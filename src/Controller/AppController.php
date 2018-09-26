<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\I18n\I18n;
use Cake\I18n\Number;
use Cake\Database\Type;

require_once ROOT . DS . 'vendor' . DS . 'postFileCurl' . DS . 'PostFileCURL.php';

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
I18n::locale('pt_BR');
Type::build('date')->useLocaleParser()->setLocaleFormat('dd/MM/yyyy');
Type::build('datetime')->useLocaleParser()->setLocaleFormat('dd/MM/yyyy HH:mm:ss');
Type::build('timestamp')->useLocaleParser()->setLocaleFormat('dd/MM/yyyy HH:mm:ss');

Type::build('decimal')->useLocaleParser();
Type::build('float')->useLocaleParser();

class AppController extends Controller {

    use \Cake\Mailer\MailerAwareTrait;

    public $menu;

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize() {
        parent::initialize();

        $this->response->header('Access-Control-Allow-Origin', '*');
        $this->response->header('Access-Control-Allow-Methods', '*');
        $this->response->header('Access-Control-Allow-Headers', 'X-Requested-With');
        $this->response->header('Access-Control-Allow-Headers', 'Content-Type, x-xsrf-token');
        $this->response->header('Access-Control-Max-Age', '172800');


        /* dump($this->request->domain());
          dump($this->request->host());
          dump($this->request->is('put'));
          dump($this->request->here);
          dump($this->request->method());

          dump($this->request->clientIp());
          dump($this->request->scheme());
          //dump($this->request);


          die(); */

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'email',
                        'password' => 'password',
                        'finder' => 'auth'
                    ]
                ]
            ],
            'authError' => __('Did you really think you are allowed to see that?'),
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
            'unauthorizedRedirect' => $this->referer()
        ]);
        $this->loadComponent('ActionsControllers');

        // Permission accsses action display
        $this->Auth->allow(['display']);

        $menu_parent = $this->getParentMenus();

        /**
         * ###########################################################
         *                      Set value constants
         * ###########################################################
         */
        $this->setConstants();
        //$this->setMenu();

        $this->set('form_templates', \Cake\Core\Configure::read('Templates'));
        $this->set(compact('menu_parent'));
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);

        if (!empty($this->menu->id) && $this->request->getParam('action') != 'login' && !is_null(PROFILE_ID)) {
            $this->loadModel('Permissions');

            dump($this->menu->id);die;
            $query = $this->Permissions->findByMenuIdAndActionAndProfileId($this->menu->id, $this->request->getParam('action'), PROFILE_ID);

            if (empty($query->toArray())) {
                $this->Flash->error(__('You do not have permission for this action'));
                return $this->redirect(['controller' => $this->request->params['controller'], 'action' => 'index']);
            }
        }

        if ($this->request->params['action'] == 'edit' || $this->request->params['action'] == 'delete' || $this->request->params['action'] == 'view') {
            /* $id = $this->request->pass[0];
              $table = \Cake\ORM\TableRegistry::get(\Cake\Utility\Inflector::camelize($this->request->params['controller']));
              if ($table->get($id)->person_id !== PERSON_ID) {
              $this->Flash->error(__('You do not have permission for this actions: Delete, Edit and View'));
              return $this->redirect(['controller' => '/', 'action' => 'index']);
              } */
        }
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    public function beforeRender(Event $event) {
        parent::beforeFilter($event);

        if (!array_key_exists('_serialize', $this->viewVars) && in_array($this->response->type(), ['application/json', 'application/xml'])) {
            $this->set('_serialize', true);
        }
    }

    /**
     * Arrow constants used in the system
     * @return void
     */
    protected function setConstants() {
        $person_id = null;

        if (!defined('USER_ID')) {
            define('USER_ID', 1);
        }

        if (!defined('PROFILE_ID')) {
            define('PROFILE_ID', 1);
        }

    }

    /**
     * Returns parent menus.
     * @return \Cake\ORM\Query
     */
    protected function getParentMenus() {
        $this->loadModel('Menus');
        //return $this->Menus->getParentMenus(['profile_id' => 1]);
        return $this->Menus->getParentMenus(['profile_id' => 1]);
    }

    /**
     * Set Menu
     * @return \Cake\ORM\Query
     * @return void
     */
    protected function setMenu() {

        $url = explode('/', $this->request->here());
        $url = '/' . $url[1];
//        $url .= (!empty($this->request->getQuery('kind_person_id')) ? '/?kind_person_id=' . $this->request->getQuery('kind_person_id') : null);

        $queryString = '?';
        if (!empty($this->request->getQuery())):
            (new \Cake\Collection\Collection($this->request->getQuery()))->each(function($entity, $key) use (&$queryString) {
                $queryString .= $key . '=' . $entity . '&';
            });

            $url .= substr($queryString, 0, -1);
        endif;

        $query = $this->Menus->find('all')->where(['url' => $url]);
        $menu_data = $query->toArray();

        if (!empty($menu_data)) {
            $this->menu = $menu_data[0];
        }
    }

}

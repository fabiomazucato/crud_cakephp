<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Menus Controller
 *
 * @property \App\Model\Table\MenusTable $Menus
 */
class MenusController extends AppController {

    public $paginate = [
        'limit' => 100,
    ];
    
    public function beforeRender(Event $event) {
        $parentMenus = $this->Menus->find('list')->where(['parent_id IS NULL'])->order(['name ASC']);
        $this->set(compact('parentMenus'));
        parent::beforeRender($event);
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index() {

        $options = [
            'contain' => ['ParentMenus']
        ];

        $conditions = [];
        if (!empty($this->request->data['parent_id']))
            $conditions[] = ['Menus.parent_id' => $this->request->data['parent_id']];

        if (!empty($this->request->data['name']))
            $conditions[] = ['Menus.name LIKE' => '%' . $this->request->data['name'] . '%'];

        
        $query = $this->Menus->find('all', $options)->where($conditions);
        $query = $this->paginate($query);
        $this->set('menus', $query);
        $this->set('_serialize', ['menus']);
    }

    /**
     * View method
     *
     * @param string|null $id Menu id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null) {
        $menu = $this->Menus->get($id, [
            'contain' => ['ParentMenus', 'ChildMenus', 'Permissions']
        ]);
        $this->set('menu', $menu);
        $this->set('_serialize', ['menu']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $menu = $this->Menus->newEntity();
        if ($this->request->is('post')) {

            $this->getActionController();

            $menu = $this->Menus->patchEntity($menu, $this->request->data);
            if ($this->Menus->save($menu)) {

                $this->loadModel('Permissions');
                if ($this->Menus->save($menu)) {

                    $collection = (new \Cake\Collection\Collection($menu->menu_actions))->each(function ($entity, $key) use (&$permissions) {

                        $data = [
                            "person_id" => PERSON_ID,
                            "profile_id" => PROFILE_ID,
                            "menu_id" => $entity->menu_id,
                            "action" => $entity->action
                        ];

                        $permission = $this->Permissions->patchEntity($this->Permissions->newEntity(), $data);
                        $this->Permissions->save($permission);
                    });
                }

                $this->Flash->success(__('The menu has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The menu could not be saved. Please, try again.'));
            }
        }

        $this->set(compact('menu'));
        $this->set('_serialize', ['menu']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Menu id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $menu = $this->Menus->get($id, [
            'contain' => ['MenuActions']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $this->getActionController();

            $menu = $this->Menus->patchEntity($menu, $this->request->data);
            if (!empty($menu->menu_actions))
                $this->Menus->MenuActions->deleteAll(['MenuActions.menu_id' => $id]);

            if ($this->Menus->save($menu)) {

                $this->loadModel('Permissions');
                $collection = (new \Cake\Collection\Collection($menu->menu_actions))->each(function ($entity, $key) use (&$permissions) {
                    $data = [
                        "person_id" => PERSON_ID,
                        "profile_id" => PROFILE_ID,
                        "menu_id" => $entity->menu_id,
                        "action" => $entity->action
                    ];

                    $permission = $this->Permissions->patchEntity($this->Permissions->newEntity(), $data);
                    $this->Permissions->save($permission);
                });
                $this->Flash->success(__('The menu has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The menu could not be saved. Please, try again.'));
            }
        }
        $parentMenus = $this->Menus->ParentMenus->find('list', ['limit' => 200]);
        $this->set(compact('menu', 'parentMenus'));
        $this->set('_serialize', ['menu']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Menu id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $menu = $this->Menus->get($id);
        if ($this->Menus->delete($menu)) {
            $this->Flash->success(__('The menu has been deleted.'));
        } else {
            $this->Flash->error(__('The menu could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    protected function getActionController() {
        $actions = $this->ActionsControllers->actions($this->request->data['controller']);
        if (!empty($actions)) {
            $this->request->data['menu_actions'] = $actions;
        }
    }

}

<?php

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/**
 * QuickMenu helper
 */
class QuickMenuHelper extends Helper {

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];
    private $string = null;
    public $helpers = ['Form', 'Html'];

    public function QuickMenu() {

        $class = new \ReflectionClass('App\\Controller\\' . $this->request->getParam('controller') . 'Controller');

        $query = '/?';
        if (!empty($this->request->getQuery())):
            (new \Cake\Collection\Collection($this->request->getQuery()))->each(function($entity, $key) use (&$query) {
                $query .= $key . '=' . $entity . '&';
            });
            $query = substr($query, 0, -1);
        endif;



        $this->string .= '<div class="fixed-action-btn horizontal">
                                <a class="btn-floating btn-large indigo">
                                    <i class="large material-icons">mode_edit</i>
                                </a>
                                <ul>';

        if ($class->hasMethod('add')):
            $this->string .= '<li>'
                    . '             <a href="/' . strtolower(\Cake\Utility\Inflector::dasherize($this->request->getParam('controller'))) . '/add' . $query . '" target="_self" class="btn-floating red" title="' . __($this->name) . '">'
                    . '                 <i class="material-icons">add</i>'
                    . '             </a>'
                    . '         </li>';
        endif;

        if ($class->hasMethod('index')):
            $this->string .= '<li>'
                    . '             <a href="/' . strtolower(\Cake\Utility\Inflector::dasherize($this->request->getParam('controller'))) . $query . '" target="_self" class="btn-floating blue darken-2 white-text">'
                    . '                 <i class="material-icons">list</i>'
                    . '             </a>'
                    . '       </li>';
        endif;

        if ($this->request->getParam('action') == 'index'):

            $this->string .= '<li>'
                    . '             <a target="_self" href="#modal-search" id="search-btn" class="btn-floating blue darken-4 white-text modal-trigger">'
                    . '                 <i class="material-icons">search</i>'
                    . '             </a>'
                    . '       </li>';
        endif;

        $this->string .= '<li>'
                . '         <a href="/users/logout" target="_self" class="btn-floating blue darken-1 white-text">'
                . '             <i class="material-icons">power_settings_new</i>'
                . '         </a>'
                . '      </li>';

        $this->string .= '</ul>';
        $this->string .= '</div>';

        return $this->string;
    }

}

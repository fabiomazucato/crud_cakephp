<?php

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/**
 * Layout helper
 */
class LayoutHelper extends Helper {

    public $helpers = ['Html', 'Paginator', 'Form'];

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function paginate() {

        $str = '<div class="paginator col s12 l12">';
        $str .= '    <ul class="pagination center">';
        $str .= $this->Paginator->prev('<i class="material-icons">keyboard_arrow_left</i>', ['escape' => false]);
        $str .= $this->Paginator->numbers();
        $str .= $this->Paginator->next('<i class="material-icons">keyboard_arrow_right</i>', ['escape' => false]);
        $str .= '    </ul>';
        $str .= '</div>';

        if ($this->Paginator->counter(['format' => '{{count}}']) > 0):
            return $str;
        else:
            return false;
        endif;
    }

    public function dropDownListIndex($primary_key, $options = []) {
        $default = [
            'items' => [
                'edit' => [
                    'pk' => true,
                    'divider' => false,
                    'label' => __('Edit'),
                    'controller' => $this->request->getParam('controller'),
                    'action' => 'edit',
                    'query_string' => [],
                    'options' => [
                        'class' => 'dropdown-item'
                    ]
                ],
                'view' => [
                    'pk' => true,
                    'divider' => false,
                    'label' => __('View'),
                    'controller' => $this->request->getParam('controller'),
                    'action' => 'view',
                    'query_string' => [],
                    'options' => [
                        'class' => 'dropdown-item'
                    ]
                ],
                'delete' => [
                    'pk' => true,
                    'divider' => false,
                    'label' => __('Delete'),
                    'controller' => $this->request->getParam('controller'),
                    'action' => 'delete',
                    'query_string' => [],
                    'options' => [
                        'class' => 'dropdown-item btn-danger',
                        'confirm' => __('Are you sure you want to delete # {0}?', $primary_key),
                        'escape' => false,
                    ],
                ],
            ],
            'query_string' => []
        ];

        $default = \Cake\Utility\Hash::merge($default, $options);

        (new \Cake\Collection\Collection($default['items']))->each(function($entity, $key) use (&$str_item, $primary_key, $default) {
            $settings = [
                'controller' => $entity['controller'],
                'action' => $entity['action']
            ];

            if (isset($entity['pk']) && $entity['pk'] === true):
                $settings[] = $primary_key;
            endif;

            $settings['?'] = $default['query_string'];
            if (isset($entity['query_string']) && !empty($entity['query_string'])):
                $settings['?'] = $entity['query_string'];
            endif;

            if (isset($entity['divider']) && $entity['divider'] === true):
                $str_item .= ' <div class="dropdown-divider"></div> ';
            endif;

            //$str_item .= '    <a class="dropdown-item" href="#">';
                if ($key !== 'delete'):
                    $str_item .= $this->Html->link($entity['label'], $settings, $entity['options']);
                elseif ($key === 'delete'):
                    $str_item .= $this->Form->postLink($entity['label'], $settings, $entity['options']);
                endif;
            //$str_item .= '    </a>';
        });

        $str  = '<div class="dropdown">';
        $str .=     '<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">';
        $str .=         __('Action');
        $str .=     '</button>';
        $str .=     '<div class="dropdown-menu">';
        $str .=         $str_item;
        $str .=     '</div>';
        $str .= '</div>';

        /**
        $str = '<button class = "dropdown-button float-right" data-activates = "dropdown' . $primary_key . '">';
        $str .= __('Action');
        $str .= '   <i class="material-icons right">arrow_drop_down</i>';
        $str .= '</button>';

        $str .= '<ul id="dropdown' . $primary_key . '" class="dropdown-content">';
        $str .= $str_item;
        $str .= '</ul>';
        **/

        return $str;
    }

}

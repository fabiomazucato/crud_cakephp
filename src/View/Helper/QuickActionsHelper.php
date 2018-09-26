<?php

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/**
 * QuickActions helper
 */
class QuickActionsHelper extends Helper {

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];
    private $string = null;

    public function Menu($array = null) {


        $this->string .= '<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">'
                . '    <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">'
                . '        <i class="la la-plus m--hide"></i>'
                . '        <i class="la la-ellipsis-h"></i>'
                . '    </a>'
                . '    <div class="m-dropdown__wrapper">'
                . '        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>'
                . '        <div class="m-dropdown__inner">'
                . '            <div class="m-dropdown__body">'
                . '                <div class="m-dropdown__content">'
                . '                    <ul class="m-nav">'
                . '                        <li class="m-nav__section m-nav__section--first">'
                . '                            <span class="m-nav__section-text">'
                . __('Quick Actions')
                . '                            </span>'
                . '                        </li>';

        foreach ($array as $item):

            $this->string .= '<li class="m-nav__item">'
                    . $item
                    . '</li>';

        endforeach;

        $this->string .= '</ul>'
                . '</div>'
                . '</div>'
                . '</div>'
                . '</div>'
                . '</div>';

        return $this->string;
    }

}

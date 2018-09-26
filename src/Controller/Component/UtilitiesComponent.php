<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;

/**
 * Utilities component
 */
class UtilitiesComponent extends Component {

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    /**
     * Implemented available calculated
     * @param type $allotment
     * @param type $selled
     * @return int
     */
    public function available($allotment, $selled, $new_value) {

        $available = $allotment - $selled;
        $increment = $new_value - $available;
        $new_allotment = $allotment + ($increment);

        return $new_allotment;
    }

}

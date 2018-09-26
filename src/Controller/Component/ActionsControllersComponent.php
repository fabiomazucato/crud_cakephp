<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;

/**
 * ActionsControllers component
 */
class ActionsControllersComponent extends Component {

    protected $objectController;

    public function __construct(ComponentRegistry $registry, array $config = []) {
        parent::__construct($registry, $config);
        $this->objectController = $registry->getController();
    }

    /**
     * Returned
     * @param type $name
     * @return type
     */
    public function actions($name) {

        try {

            $results = [];
            $class_name = 'App\\Controller\\' . $name . 'Controller';

            $class   = new \ReflectionClass($class_name);
            
            $actions = $class->getMethods(\ReflectionMethod::IS_PUBLIC);
            $ignore  = ['beforeRender', 'beforeFilter', 'afterFilter', 'initialize'];

            foreach ($actions as $action) {
                if ($action->class == $class_name && !in_array($action->name, $ignore)) {
                    $results[]['action'] = $action->name;
                }
            }

            return $results;
        } catch (\ReflectionException $e) {
            return false;
        }
    }

}

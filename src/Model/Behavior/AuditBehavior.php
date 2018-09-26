<?php

namespace App\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\ORM\Table;

/**
 * Audit behavior
 */
class AuditBehavior extends Behavior {

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    protected function setAuditFields() {

        $audit = [
            'person_id' => PERSON_ID,
            'user_id' => \Cake\Routing\Router::getRequest()->session()->read('User.id'),
            'action' => \Cake\Routing\Router::getRequest()->params['action'],
            'controller' => \Cake\Routing\Router::getRequest()->params['controller'],
            'table_name' => $this->_table->alias(),
            'user_data' => json_encode(\Cake\Routing\Router::getRequest()->session()->read('User')),
//            'date' => \Cake\I18n\Time::now(),
        ];

        return $audit;
    }

    protected function save($data) {

        $auditsTable = \Cake\ORM\TableRegistry::get('Audits');

        $audit = $auditsTable->newEntity();
        $audit = $auditsTable->patchEntity($audit, $data);


        if ($auditsTable->save($audit)) {
            $audit->success = __('The audit has been saved.');
        } else {
            $audit->error = __('The audit could not be saved. Please, try again.');
        }
    }

    public function beforeSave(\Cake\Event\Event $event, \Cake\Datasource\EntityInterface $entity, \ArrayObject $options) {
        $audit = $this->setAuditFields();

        if (\Cake\Routing\Router::getRequest()->params['action'] == 'edit' || \Cake\Routing\Router::getRequest()->params['action'] == 'delete'):


            $getEntity = (!empty($entity->id) ? $this->_table->get($entity->id) : null);

            $audit['before'] = json_encode($getEntity);
            $audit['after'] = json_encode($entity);

            $this->save($audit);
        endif;
    }

    public function beforeDelete(\Cake\Event\Event $event, \Cake\Datasource\EntityInterface $entity, \ArrayObject $options) {
        $audit = $this->setAuditFields();

        $getEntity = $this->_table->get($entity->id);

        $audit['before'] = json_encode($getEntity);
        $audit['after'] = json_encode($entity);

        $this->save($audit);
    }

    public function afterSave(\Cake\Event\Event $event, \Cake\Datasource\EntityInterface $entity, \ArrayObject $options) {

        $audit = $this->setAuditFields();

        if (\Cake\Routing\Router::getRequest()->params['action'] == 'add'):

            $audit['after'] = json_encode($entity);
            $this->save($audit);
        endif;
    }

}

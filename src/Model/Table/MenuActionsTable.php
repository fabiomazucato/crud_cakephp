<?php

namespace App\Model\Table;

use App\Model\Entity\MenuAction;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MenuActions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Menus
 */
class MenuActionsTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('menu_actions');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Menus', [
            'foreignKey' => 'menu_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
        $validator
                ->allowEmpty('action');

        $validator
                ->add('id', 'valid', ['rule' => 'numeric'])
                ->allowEmpty('id', 'create');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->existsIn(['menu_id'], 'Menus'));
        return $rules;
    }

    /**
     * Returns the result of search based on id MenuActions
     * @param Query $query
     * @param array $options
     * @return type \Cake\Utility\Hash
     */
    protected function findMenuActionPermissions(Query $query, array $options) {

        $options = \Cake\Utility\Hash::extract($options, '{n}._ids.{n}');

        $query = $query->where(function ($exp, $q) use (&$options) {
            return $exp->in('id', $options);
        });

        $collection = (new \Cake\Collection\Collection($query->toArray()))->each(function($value, $key) use (&$actions) {
            $actions['permissions'][] = [
                'person_id' => PERSON_ID,
                'menu_id' => $value->menu_id,
                'action' => $value->action,
            ];
        });

//        dump($actions);

        return $actions;
    }

    /**
     * Returns an array with the ids MenuActions
     * @param Query $query
     * @param array $options
     * @return Hash \Cake\Utility\Hash
     */
    protected function findMenuActionIds(Query $query, array $options) {

        $options = $options['permissions'];

        $menu_id = [];
        $action  = [];

        $collection = (new \Cake\Collection\Collection($options))->combine('id', 'action', 'menu_id');
        $collection = $collection->each(function($value, $key) use (&$action, &$menu_id, &$query) {
            $action = \Cake\Utility\Hash::merge($action, $value);
            $menu_id = \Cake\Utility\Hash::merge($menu_id, $key);
        });


        $query = $query->innerJoin(
                    ['Permissions' => 'permissions'], 
                    [
                        'Permissions.menu_id = MenuActions.menu_id', 
                        'MenuActions.action  = Permissions.action'
                    ]
                )->where(function ($exp, $q) use (&$menu_id, &$action) {
                    return $exp->in('MenuActions.action', $action)
                            ->in('MenuActions.menu_id', $menu_id);
                })
                ->order(['MenuActions.id' => 'ASC']);
                
        $menuActionIds = \Cake\Utility\Hash::extract($query->toArray(), '{n}.id.{n}');

        return $menuActionIds;
    }

    /**
     * Returns an array with the ids MenuActions
     * @param Query $query
     * @param array $options
     * @return Hash \Cake\Utility\Hash
     */
    protected function findMenuActionIdsProfileId(Query $query, array $options) {   

        $profile_id = $options['profile_id'];

        $query = $query->innerJoin(
                ['Permissions' => 'permissions'], 
                [
                    'Permissions.menu_id = MenuActions.menu_id', 
                    'MenuActions.action  = Permissions.action'
                ]
            )->where(['Permissions.profile_id =' => $profile_id]
            )->order(['MenuActions.id' => 'ASC']);

        $menuActionIdsProfileId = \Cake\Utility\Hash::extract($query->toArray(), '{n}.id.{n}');

        return $menuActionIdsProfileId;
    }

}

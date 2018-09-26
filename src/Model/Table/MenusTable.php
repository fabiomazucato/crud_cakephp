<?php

namespace App\Model\Table;

use App\Model\Entity\Menu;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Menus Model
 *
 * @property \Cake\ORM\Association\BelongsTo $ParentMenus
 * @property \Cake\ORM\Association\HasMany $ChildMenus
 * @property \Cake\ORM\Association\HasMany $Permissions
 * @property \Cake\ORM\Association\HasMany $SeoAreas
 */
class MenusTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('menus');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('ParentMenus', [
            'className' => 'Menus',
            'foreignKey' => 'parent_id'
        ]);
        $this->hasMany('ChildMenus', [
            'className' => 'Menus',
            'foreignKey' => 'parent_id'
        ]);
        $this->hasMany('Permissions', [
            'foreignKey' => 'menu_id'
        ]);
        $this->hasMany('MenuActions', [
            'foreignKey' => 'menu_id'
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
                ->add('id', 'valid', ['rule' => 'numeric'])
                ->allowEmpty('id', 'create');

        $validator
                ->requirePresence('name', 'create')
                ->notEmpty('name', __('This field cannot be left empty'));

        $validator
                ->allowEmpty('url');
        $validator
                ->allowEmpty('icon');
        $validator
                ->allowEmpty('controller');

        $validator
                ->allowEmpty('position');

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
        $rules->add($rules->existsIn(['parent_id'], 'ParentMenus'));
        return $rules;
    }

    /**
     * 
     * @param array $options
     * @return type
     */
    public function getParentMenus(array $options) {
        $query = $this->find('all')
                ->innerJoin(
                        ['ChildMenus' => 'Menus'], ['Menus.id = ChildMenus.parent_id']
                )->innerJoin(
                        ['Permissions'], ['Permissions.menu_id = ChildMenus.id']
                )
                ->where(
                        [
                            'Menus.parent_id IS NULL',
                            'Permissions.profile_id' => $options['profile_id'],
                        ]
                )
                ->order(['Menus.position' => 'ASC', 'Menus.name' => 'ASC']);

        $obj = [];
        foreach ($query as $menu) {
            $obj[$menu->id] = [
                'id' => $menu->id,
                'parent_id' => $menu->parent_id,
                'name' => $menu->name,
                'icon' => $menu->icon,
            ];
            $parents = $this->find('all')
                    ->select(
                            ['Menus.id', 'Menus.name', 'Menus.url', 'Menus.icon']
                    )
                    ->innerJoin(
                            ['Permissions'], ['Permissions.menu_id = Menus.id']
                    )
                    ->where(
                            [
                                'Menus.parent_id' => $menu->id,
                                'Permissions.profile_id' => $options['profile_id'],
                            ]
                    )
                    ->group(['Menus.id', 'Menus.name', 'Menus.url', 'Menus.icon'])
                    ->order(['Menus.position' => 'ASC', 'Menus.name' => 'ASC']);
            foreach ($parents as $parent) {
                $obj[$menu->id]['parents'][] = [
                    'id' => $parent->id,
                    'name' => $parent->name,
                    'url' => $parent->url,
                    'icon' => $parent->icon,
                ];
            }
        }

        return $obj;
    }

    /**
     * Returns a menu of actions array 
     * @param Query $query
     * @param array $options
     * @return array $this->action
     */
    protected function findMenuActionGroups(Query $query, array $options) {

        $where[] = ['Menus.parent_id IS NOT NULL'];
        if (!empty($options['profile_id']))
            $where[] = ['Users.profile_id' => $options['profile_id']];


        $query = $query->select(
                        [
                            'Menus.name',
                            'Menus.id',
                            'MenuActions.id',
                            'MenuActions.action'
                        ]
                )->leftJoin(
                        [
                    'MenuActions' => 'menu_actions'
                        ], [
                    'MenuActions.menu_id = Menus.id'
                        ]
                )->leftJoin(
                        ['Permissions'], [
                    'Permissions.menu_id = MenuActions.menu_id',
                    'Permissions.action = MenuActions.action',
                        ]
                )->leftJoin(
                        ['Profiles'], ['Permissions.profile_id = Profiles.id']
                )->leftJoin(
                        ['Users'], ['Users.profile_id = Profiles.id']
                )
                ->where($where)
                ->order(['Menus.name', 'MenuActions.id' => 'ASC']);

        $collection = new \Cake\Collection\Collection($query);
        $collection = $collection->each(function ($value, $key) use (&$action) {
            $action[$value->name][$value->MenuActions['id']] = $value->MenuActions['action'];
        });

        return $action;
    }

}

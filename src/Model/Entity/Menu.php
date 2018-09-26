<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Menu Entity.
 *
 * @property int $id
 * @property int $parent_id
 * @property \App\Model\Entity\Menu $parent_menu
 * @property string $description
 * @property string $url
 * @property int $position
 * @property string $name
 * @property \App\Model\Entity\Menu[] $child_menus
 * @property \App\Model\Entity\Permission[] $permissions
 */
class Menu extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}

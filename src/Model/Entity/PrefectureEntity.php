<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Prefecture Entity
 * 
 * @property int $id tinyint(4) unsigned
 * @property string $name varchar(30)
 * 
 */
class Prefecture extends Entity
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
    ];
}
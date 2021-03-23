<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pharmacy Entity
 * 
 * @property int    $shop_id  int(10) unsigned
 * @property string $shop_name  varchar(45)
 * @property string $shop_name_kana  varchar(120)
 * @property string $tel   varchar(13)
 * @property string $fax   varchar(13)
 * @property string $zip_code  varchar(7)
 * @property string $address1  varchar(100)
 * @property string $address2  varchar(100)
 * @property double $lat 
 * @property double $lon 
 * @property string $area_l varchar(4) 
 * @property string $area_m varchar(4) 
 * @property string $mon text 
 * @property string $tue text 
 * @property string $wed text 
 * @property string $mon text 
 * @property string $fri text 
 * @property string $sat text 
 * @property string $sun text 
 * @property string $holiday text 
 * @property int    $pharmacy_type tinyint(4) unsigned 1：調剤薬局, 2：ドラッグストア, 3：調剤併設型ドラッグストア
 * @property int    $shohobin_flag tinyint(4) 0：電話帳, 1：導入店
 * @property int    $disabled tinyint(4)
 * @property string $img1
 */
class Pharmacy extends Entity
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
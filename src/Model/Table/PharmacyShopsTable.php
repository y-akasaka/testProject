<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Http\Client\Request;

class PharmacyShopsTable extends Table
{
    public function initialize(array $config)
    {
        $this->belongsTo('prefectures', [
            'foreignKey' => 'id',
        ]);
    }

    // public function prefectures(): HasMany
    // {
    //     return $this->hasMany('pharmacy_shops');
    // }

    public function getPharmacyShops()
    {
        return $this->find()->all();
    }
}
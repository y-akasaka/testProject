<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Http\Client\Request;

class PharmacyShopsTable extends Table
{
    public function getPharmacyShops(Request $request)
    {
        return $this->find()->where('area_l', $request['area_l']);
    }
}
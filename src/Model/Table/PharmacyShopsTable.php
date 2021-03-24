<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Http\Client\Request;

class PharmacyShopsTable extends Table
{
    public function getPharmacyShops()
    {
        return $this->find()->all();
    }

    public function getPrefecturePharmacyShops(string $area_l)
    {
        return $this->find()->where('area_l', $area_l);
    }
}
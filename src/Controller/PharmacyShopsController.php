<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Http\Client\Request;

class PharmacyShopsController extends AppController
{
    public function index()
    {
        $this->autoLayout = false;

        $pharmacyShopsTbl = TableRegistry::getTableLocator()->get('PharmacyShops');
        $pharmacyShops = $pharmacyShopsTbl->getPharmacyShops();

        $this->set('pharmacyShops', $pharmacyShops);
    }

    public function detail(Request $request)
    {
        var_dump($request);
        var_dump($this->getRequest()->getData());
        // $this->getRequest()->getData('area_l')

        $pharmacyShopsTbl = TableRegistry::getTableLocator()->get('PharmacyShops');
        $prefecurePharmacyShop = $pharmacyShopsTbl->getPrefecturePharmacyShops($request['area_l']);
        
        $this->set('prefecturePharmacyShops', $prefecurePharmacyShop);
    }
}
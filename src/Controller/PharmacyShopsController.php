<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Http\Client\Request;

class PharmacyShopsController extends AppController
{
    public function index()
    {
        $this->autoLayout = false;

        $prefecturesTbl = TableRegistry::getTableLocator()->get('Prefectures');
        $prefectures = $prefecturesTbl->getPrefectures();

        $this->set('prefectures', $prefectures);
    }

    public function list($id)
    {
        $prefecturesTbl = TableRegistry::getTableLocator()->get('Prefectures');
        $prefecturePharmacyShops = $prefecturesTbl->getPrefecturePharmacyShops($id);

        $title = $prefecturesTbl->getName($id);

        $this->set('title', $title);
        $this->set('prefecturePharmacyShops', $prefecturePharmacyShops);
    }

    public function detail($shopId)
    {
        $pharmacyShopsTbl = TableRegistry::getTableLocator()->get('PharmacyShops');
        $pharmacyShop = $pharmacyShopsTbl->getDetailPharmacyShop($shopId);
        $this->set('pharmacyShop', $pharmacyShop);
    }
}
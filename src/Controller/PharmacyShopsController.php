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

    public function detail($id)
    {
        $prefecturesTbl = TableRegistry::getTableLocator()->get('Prefectures');
        $prefecturePharmacyShops = $prefecturesTbl->getPrefecturePharmacyShops($id);
        // var_dump($prefecturePharmacyShops);
        
        $this->set('prefecturePharmacyShops', $prefecturePharmacyShops);
    }
}
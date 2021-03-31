<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Http\Client\Request;
use App\View\AppView;

class PharmacyShopsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }


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
        // var_dump(json_encode($prefecturePharmacyShops, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT));
        
        $this->set('prefecturePharmacyShops', json_encode($prefecturePharmacyShops, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT));
        // $this->set('prefecturePharmacyShops', ['prefecturePharmacyShops']);
        // $this->viewVars['_jsonOptions'] = JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT;
    }
}
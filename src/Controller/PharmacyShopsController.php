<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Http\Client\Request;

class PharmacyShopsController extends AppController
{
    public function index()
    {
        $this->autoLayout = false;

        // $pharmacyShopsTbl = TableRegistry::getTableLocator()->get('PharmacyShops');
        // $pharmacyShops = $pharmacyShopsTbl->getPharmacyShops();
        $prefectures = [
            '北海道',
            '青森',
            '秋田',
            '岩手',
            '山形',
            '宮城',
            '福島',
            '新潟',
            '富山',
            '長野',
            '石川',
            '福井',
            '岐阜',
            '愛知',
            '山梨',
            '静岡',
            '栃木',
            '群馬',
            '茨城',
            '千葉',
            '埼玉',
            '東京',
            '神奈川',
            '滋賀',
            '三重',
            '京都',
            '大阪',
            '奈良',
            '和歌山',
            '兵庫',
            '鳥取',
            '岡山',
            '島根',
            '広島',
            '山口',
            '香川',
            '徳島',
            '愛媛',
            '高知',
            '福岡',
            '佐賀',
            '長崎',
            '大分',
            '熊本',
            '宮崎',
            '鹿児島',
            '沖縄',
        ];
        $this->set('pharmacyShops', $prefectures);
    }

    public function detail(Request $request)
    {
        $pharmacyShopsTbl = TableRegistry::getTableLocator()->get('PharmacyShops');
        $area_l = $pharmacyShopsTbl->getPharmacyShops($request['area_l']);
    }
}
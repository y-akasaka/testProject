<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;

class TopController extends AppController
{
    public function index()
    {
        $this->autoLayout = false;
        $testData = '薬局&ドラッグストア検索・予約サイト';
        $headerMenu = [
            'クーポン', 
            '初めての方', 
            '会員登録', 
            'ログイン',
        ];
        $this->set('testData', $testData);
        // $this->set([
        //     'testData' => $testData,
        //     'headerMenu' => $headerMenu,
        // ]);
    }


    public function notices()
    {
        $query = Notices::find()
        ->order(['Notices.created_at' => 'DESC']);
    }
}

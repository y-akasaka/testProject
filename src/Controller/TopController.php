<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;

class TopController extends AppController
{
    public function index()
    {
        $this->autoLayout = false;
        $testData = '薬局&ドラッグストア検索・予約サイト';

        $usersTbl = TableRegistry::getTableLocator()->get('Users');
        $users = $usersTbl->getAllUsers();

        $this->set('users', $users);
    }

}

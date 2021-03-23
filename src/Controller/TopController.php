<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;

class TopController extends AppController
{
    public function index()
    {
        $this->autoLayout = false;

        $usersTbl = TableRegistry::getTableLocator()->get('Users');
        $users = $usersTbl->getAllUsers();

        $this->set('users', $users);
    }
}

<?php

namespace App\Controller;

use Cake\ORM\TableRegistry;

class PharmacyShopsController extends AppController
{
    public function detail($id)
    {
        $prefectureTbl = TableRegistry::getTableLocator()->get('Prefectre');
        $title = $prefectureTbl->getName($id);

        $this->set('title', $title);
    }
}
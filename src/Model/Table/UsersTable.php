<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class UsersTable extends Table
{
    public function getAllUsers () 
    {
       return $this->find()->all();
    }
}
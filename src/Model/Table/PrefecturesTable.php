<?php
namespace App\Model\Table;

use Cake\ORM\Association\HasMany;
use Cake\ORM\Table;

class PrefecturesTable extends Table
{

    public function initialize(array $config)
    {
        $this->setTable('prefectures');
        $this->setPrimaryKey('id');

        $this->hasMany('pharmacyShops', [
            'foreignKey' => 'area_l',
        ]);
    }

    public function getPrefectures()
    {
        return $this->find()->all();
    }

    public function getPrefecturePharmacyShops($id)
    {
        return $this->find()
            ->contain(['PharmacyShops'])
            ->where(['id' => $id])
            ->all();
    }

    public function getName($id)
    {
        return $this->find()->select(['id', 'name'])->where(['id' => $id])->first()->toArray();
    }
}
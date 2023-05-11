<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "bahagian".
 *
 * @property int $id
 * @property string|null $namaBahagian
 *
 * @property Perjawatan[] $perjawatans
 */
class Bahagian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bahagian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['namaBahagian'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'namaBahagian' => 'Nama Bahagian',
        ];
    }

    /**
     * Gets query for [[Perjawatans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerjawatans()
    {
        return $this->hasMany(Perjawatan::class, ['bahagian' => 'id']);
    }
}

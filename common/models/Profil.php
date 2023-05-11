<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "profil".
 *
 * @property int $id
 * @property string $nama
 * @property string|null $tarikhLahir
 * @property string|null $telefon
 * @property string|null $emel
 *
 * @property Perjawatan[] $perjawatans
 */
class Profil extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profil';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tarikhLahir'], 'safe'],
            [['nama', 'telefon', 'emel'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'tarikhLahir' => 'Tarikh Lahir',
            'telefon' => 'Telefon',
            'emel' => 'Emel',
        ];
    }

    /**
     * Gets query for [[Perjawatans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerjawatans()
    {
        return $this->hasMany(Perjawatan::class, ['profile' => 'id']);
    }
}

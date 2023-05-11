<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "perjawatan".
 *
 * @property int $id
 * @property int|null $profile
 * @property int|null $jawatan
 * @property int|null $bahagian
 * @property string|null $tarikhMula
 * @property string|null $tarikhTamat
 * @property string|null $supervisor
 *
 * @property Bahagian $bahagian0
 * @property Jawatan $jawatan0
 * @property Profil $profile0
 */
class Perjawatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perjawatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['profile', 'jawatan', 'bahagian'], 'integer'],
            [['tarikhMula', 'tarikhTamat'], 'safe'],
            [['supervisor'], 'string', 'max' => 100],
            [['bahagian'], 'exist', 'skipOnError' => true, 'targetClass' => Bahagian::class, 'targetAttribute' => ['bahagian' => 'id']],
            [['jawatan'], 'exist', 'skipOnError' => true, 'targetClass' => Jawatan::class, 'targetAttribute' => ['jawatan' => 'id']],
            [['profile'], 'exist', 'skipOnError' => true, 'targetClass' => Profil::class, 'targetAttribute' => ['profile' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'profile' => 'Profile',
            'jawatan' => 'Jawatan',
            'bahagian' => 'Bahagian',
            'tarikhMula' => 'Tarikh Mula',
            'tarikhTamat' => 'Tarikh Tamat',
            'supervisor' => 'Supervisor',
        ];
    }

    /**
     * Gets query for [[Bahagian0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBahagian0()
    {
        return $this->hasOne(Bahagian::class, ['id' => 'bahagian']);
    }

    /**
     * Gets query for [[Jawatan0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJawatan0()
    {
        return $this->hasOne(Jawatan::class, ['id' => 'jawatan']);
    }

    /**
     * Gets query for [[Profile0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfile0()
    {
        return $this->hasOne(Profil::class, ['id' => 'profile']);
    }

    public function getProfile1()
    {
        return $this->hasOne(Profil::class, ['id' => 'supervisor']);
    }
}

<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "konf_rujukan".
 *
 * @property int $id
 * @property int|null $rujukanAgensi Agency
 * @property string|null $rujukanFlag Flag
 * @property string|null $rujukanNama Name
 * @property int|null $rujukanDefault Default Flag
 * @property int|null $rujukanSusunan Sequence
 * @property int|null $rujukanSso SSO Mapping
 * @property string|null $rujukanCode DDSA Code
 * @property int|null $rujukanCreated Created Date
 * @property int|null $rujukanModified Modified Date
 * @property int|null $rujukanDeleted Deleted Date
 *
 * @property Profil[] $profils
 * @property Profil[] $profils0
 * @property Profil[] $profils1
 * @property Profil[] $profils2
 * @property Profil[] $profils3
 * @property Profil[] $profils4
 * @property Profil[] $profils5
 */
class KonfRujukan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'konf_rujukan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rujukanAgensi', 'rujukanDefault', 'rujukanSusunan', 'rujukanSso', 'rujukanCreated', 'rujukanModified', 'rujukanDeleted'], 'integer'],
            [['rujukanFlag', 'rujukanNama'], 'string', 'max' => 50],
            [['rujukanCode'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rujukanAgensi' => 'Rujukan Agensi',
            'rujukanFlag' => 'Rujukan Flag',
            'rujukanNama' => 'Rujukan Nama',
            'rujukanDefault' => 'Rujukan Default',
            'rujukanSusunan' => 'Rujukan Susunan',
            'rujukanSso' => 'Rujukan Sso',
            'rujukanCode' => 'Rujukan Code',
            'rujukanCreated' => 'Rujukan Created',
            'rujukanModified' => 'Rujukan Modified',
            'rujukanDeleted' => 'Rujukan Deleted',
        ];
    }

    /**
     * Gets query for [[Profils]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfils()
    {
        return $this->hasMany(Profil::class, ['profilAffix' => 'id']);
    }

    /**
     * Gets query for [[Profils0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfils0()
    {
        return $this->hasMany(Profil::class, ['profilAgama' => 'id']);
    }

    /**
     * Gets query for [[Profils1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfils1()
    {
        return $this->hasMany(Profil::class, ['profilBangsa' => 'id']);
    }

    /**
     * Gets query for [[Profils2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfils2()
    {
        return $this->hasMany(Profil::class, ['profilGelaran' => 'id']);
    }

    /**
     * Gets query for [[Profils3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfils3()
    {
        return $this->hasMany(Profil::class, ['profilJantina' => 'id']);
    }

    /**
     * Gets query for [[Profils4]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfils4()
    {
        return $this->hasMany(Profil::class, ['StatusPencen' => 'id']);
    }

    /**
     * Gets query for [[Profils5]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfils5()
    {
        return $this->hasMany(Profil::class, ['profilWarganegara' => 'id']);
    }
}

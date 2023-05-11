<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jawatan".
 *
 * @property int $id
 * @property string|null $namaJawatan
 *
 * @property Perjawatan[] $perjawatans
 */
class Jawatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jawatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['namaJawatan'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'namaJawatan' => 'Nama Jawatan',
        ];
    }

    /**
     * Gets query for [[Perjawatans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerjawatans()
    {
        return $this->hasMany(Perjawatan::class, ['jawatan' => 'id']);
    }
}

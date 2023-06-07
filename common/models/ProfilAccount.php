<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "profil_account".
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password_hash
 * @property string|null $password_reset_token
 * @property string $auth_key
 * @property int $status
 * @property int|null $time
 * @property int|null $accAttachment Attachment
 * @property string|null $accRemarks Remarks
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property string|null $mobileId
 *
 * @property Profil $id0
 */
class ProfilAccount extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profil_account';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'username', 'email', 'password_hash', 'auth_key', 'status'], 'required'],
            [['id', 'status', 'time', 'accAttachment', 'created_at', 'updated_at'], 'integer'],
            [['accRemarks'], 'string'],
            [['username'], 'string', 'max' => 12],
            [['email', 'password_hash', 'password_reset_token', 'auth_key', 'mobileId'], 'string', 'max' => 100],
            [['username'], 'unique'],
            [['id'], 'unique'],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Profil::class, 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'auth_key' => 'Auth Key',
            'status' => 'Status',
            'time' => 'Time',
            'accAttachment' => 'Acc Attachment',
            'accRemarks' => 'Acc Remarks',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'mobileId' => 'Mobile ID',
        ];
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Profil::class, ['id' => 'id']);
    }
}

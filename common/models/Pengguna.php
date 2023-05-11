<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pengguna".
 *
 * @property int $id
 * @property string $username
 * @property string $password_hash
 * @property string|null $password_reset_token
 * @property string $verification_token
 * @property string $email
 * @property string|null $auth_key
 * @property int $status
 * @property int $created_at
 * @property int|null $updated_at
 * @property string|null $password
 * @property int|null $supervisor
 */
class Pengguna extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengguna';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password_hash', 'verification_token', 'email', 'status', 'created_at'], 'required'],
            [['status', 'created_at', 'updated_at', 'supervisor'], 'integer'],
            [['username'], 'string', 'max' => 50],
            [['password_hash', 'password_reset_token', 'verification_token', 'email', 'auth_key', 'password'], 'string', 'max' => 100],
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
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'verification_token' => 'Verification Token',
            'email' => 'Email',
            'auth_key' => 'Auth Key',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'password' => 'Password',
            'supervisor' => 'Supervisor',
        ];
    }
}

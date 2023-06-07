<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "profil_pengisian".
 *
 * @property int $id
 * @property int $pengisianProfil Profile
 * @property int $pengisianGred Grade
 * @property int|null $pengisianMemangku Acting (0-No, 1-Yes)
 * @property int|null $pengisianPenyandang Incumbent
 * @property int|null $pengisianBahagian Division
 * @property int|null $pengisianPentadbiran Administrative Filling
 * @property string|null $pengisianWaran Warrant
 * @property int|null $pengisianPenyelia Immediate Supervisor
 * @property string|null $pengisianStart Start Date
 * @property string|null $pengisianEnd End Date
 * @property int|null $pengisianCreated Created Date
 * @property int|null $pengisianCreatedBy Created By
 * @property int|null $pengisianModified Modified Date
 * @property int|null $pengisianModifiedBy Modified By
 * @property int|null $pengisianEmail Email Deleted
 */
class ProfilPengisian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profil_pengisian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pengisianProfil', 'pengisianGred'], 'required'],
            [['pengisianProfil', 'pengisianGred', 'pengisianMemangku', 'pengisianPenyandang', 'pengisianBahagian', 'pengisianPentadbiran', 'pengisianPenyelia', 'pengisianCreated', 'pengisianCreatedBy', 'pengisianModified', 'pengisianModifiedBy', 'pengisianEmail'], 'integer'],
            [['pengisianStart', 'pengisianEnd'], 'safe'],
            [['pengisianWaran'], 'string', 'max' => 12],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pengisianProfil' => 'Pengisian Profil',
            'pengisianGred' => 'Pengisian Gred',
            'pengisianMemangku' => 'Pengisian Memangku',
            'pengisianPenyandang' => 'Pengisian Penyandang',
            'pengisianBahagian' => 'Pengisian Bahagian',
            'pengisianPentadbiran' => 'Pengisian Pentadbiran',
            'pengisianWaran' => 'Pengisian Waran',
            'pengisianPenyelia' => 'Pengisian Penyelia',
            'pengisianStart' => 'Pengisian Start',
            'pengisianEnd' => 'Pengisian End',
            'pengisianCreated' => 'Pengisian Created',
            'pengisianCreatedBy' => 'Pengisian Created By',
            'pengisianModified' => 'Pengisian Modified',
            'pengisianModifiedBy' => 'Pengisian Modified By',
            'pengisianEmail' => 'Pengisian Email',
        ];
    }
}

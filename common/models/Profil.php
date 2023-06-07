<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "profil".
 *
 * @property int $id
 * @property int|null $profilAgensi Agency
 * @property int|null $profilPass Pass Number
 * @property string|null $profilNoFail File Number
 * @property int|null $profilGelaran Salutation
 * @property string|null $profilNamaPertama First Name
 * @property int|null $profilAffix Affix
 * @property string|null $profilNamaAkhir Last Name
 * @property string|null $profilNamaSingkatan Alias
 * @property int|null $profilAgama Religion
 * @property int|null $profilBangsa Race
 * @property int|null $profilWarganegara Nationality
 * @property string|null $profilPassport Passport Number
 * @property string|null $profilAlternateEmail Alternate Email
 * @property string|null $profilPreviousEmail
 * @property string|null $profilDOB DOB
 * @property int|null $profilJantina Gender
 * @property string|null $profilSambungan Office Phone
 * @property string|null $profilHp Mobile Phone
 * @property string|null $TkhLantikan Tarikh Lantikan Pertama
 * @property string|null $TkhLantikanSkim Tarikh Lantikan Skim
 * @property string|null $TkhPengesahan Tarikh Pengesahan Perkhidmatan
 * @property string|null $TkhBerpencen Tarikh Taraf Berpencen
 * @property int|null $StatusPencen Pilihan Umur Berpencen
 * @property string|null $TkhBersara Tarikh Bersara
 * @property int|null $profilMigrated Migration Flag
 * @property int|null $profilBiometrik Biometrik Id
 * @property int|null $profilSso SSO Id
 * @property int|null $profilProses Process Flag
 * @property int|null $profilMis MIS Id
 * @property int|null $profilTempah eTempah Id
 * @property int|null $profilSpl SPL Id
 * @property int|null $profilCoas COAS Id
 * @property int|null $profilCreated Created Date
 * @property int|null $profilModified Modified Date
 * @property int|null $profilDeleted Deleted Date
 * @property string|null $profilDPlatform Desktop Platform
 * @property string|null $profilDBrowser Desktop Browser
 * @property string|null $profilDVersion Desktop Version
 * @property string|null $profilMPlatform Mobile Platform
 * @property string|null $profilMBrowser Mobile Browser
 * @property string|null $profilMVersion Mobile Version
 * @property int|null $StatusLantikan
 * @property int|null $StatusPengesahan
 * @property string|null $TkhLanjutan
 * @property int|null $PilihanBersara
 * @property int|null $TapisanKeselamatan
 * @property int|null $BlnGaji
 * @property string|null $TkhPangkat
 * @property string|null $TkhMemangku
 * @property string|null $NoKWSP
 * @property string|null $NoLHDN
 * @property string|null $TkhMulaSkim
 * @property int|null $byPass
 *
 * @property ProfilAccount $profilAccount
 * @property KonfRujukan $profilAffix0
 * @property KonfRujukan $profilAgama0
 * @property KonfRujukan $profilBangsa0
 * @property KonfRujukan $profilGelaran0
 * @property KonfRujukan $profilJantina0
 * @property KonfRujukan $profilWarganegara0
 * @property KonfRujukan $statusPencen
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
            [['profilAgensi', 'profilPass', 'profilGelaran', 'profilAffix', 'profilAgama', 'profilBangsa', 'profilWarganegara', 'profilJantina', 'StatusPencen', 'profilMigrated', 'profilBiometrik', 'profilSso', 'profilProses', 'profilMis', 'profilTempah', 'profilSpl', 'profilCoas', 'profilCreated', 'profilModified', 'profilDeleted', 'StatusLantikan', 'StatusPengesahan', 'PilihanBersara', 'TapisanKeselamatan', 'BlnGaji', 'byPass'], 'integer'],
            [['profilDOB', 'TkhLantikan', 'TkhLantikanSkim', 'TkhPengesahan', 'TkhBerpencen', 'TkhBersara', 'TkhLanjutan', 'TkhPangkat', 'TkhMemangku', 'TkhMulaSkim'], 'safe'],
            [['profilNoFail'], 'string', 'max' => 50],
            [['profilNamaPertama', 'profilNamaAkhir'], 'string', 'max' => 60],
            [['profilNamaSingkatan', 'profilDPlatform', 'profilDVersion', 'profilMPlatform', 'profilMVersion', 'NoKWSP', 'NoLHDN'], 'string', 'max' => 20],
            [['profilPassport', 'profilHp'], 'string', 'max' => 15],
            [['profilAlternateEmail', 'profilPreviousEmail'], 'string', 'max' => 100],
            [['profilSambungan'], 'string', 'max' => 10],
            [['profilDBrowser', 'profilMBrowser'], 'string', 'max' => 25],
            [['profilAffix'], 'exist', 'skipOnError' => true, 'targetClass' => KonfRujukan::class, 'targetAttribute' => ['profilAffix' => 'id']],
            [['profilAgama'], 'exist', 'skipOnError' => true, 'targetClass' => KonfRujukan::class, 'targetAttribute' => ['profilAgama' => 'id']],
            [['profilBangsa'], 'exist', 'skipOnError' => true, 'targetClass' => KonfRujukan::class, 'targetAttribute' => ['profilBangsa' => 'id']],
            [['profilGelaran'], 'exist', 'skipOnError' => true, 'targetClass' => KonfRujukan::class, 'targetAttribute' => ['profilGelaran' => 'id']],
            [['profilJantina'], 'exist', 'skipOnError' => true, 'targetClass' => KonfRujukan::class, 'targetAttribute' => ['profilJantina' => 'id']],
            [['StatusPencen'], 'exist', 'skipOnError' => true, 'targetClass' => KonfRujukan::class, 'targetAttribute' => ['StatusPencen' => 'id']],
            [['profilWarganegara'], 'exist', 'skipOnError' => true, 'targetClass' => KonfRujukan::class, 'targetAttribute' => ['profilWarganegara' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'profilAgensi' => 'Profil Agensi',
            'profilPass' => 'Profil Pass',
            'profilNoFail' => 'Profil No Fail',
            'profilGelaran' => 'Profil Gelaran',
            'profilNamaPertama' => 'Profil Nama Pertama',
            'profilAffix' => 'Profil Affix',
            'profilNamaAkhir' => 'Profil Nama Akhir',
            'profilNamaSingkatan' => 'Profil Nama Singkatan',
            'profilAgama' => 'Profil Agama',
            'profilBangsa' => 'Profil Bangsa',
            'profilWarganegara' => 'Profil Warganegara',
            'profilPassport' => 'Profil Passport',
            'profilAlternateEmail' => 'Profil Alternate Email',
            'profilPreviousEmail' => 'Profil Previous Email',
            'profilDOB' => 'Profil Dob',
            'profilJantina' => 'Profil Jantina',
            'profilSambungan' => 'Profil Sambungan',
            'profilHp' => 'Profil Hp',
            'TkhLantikan' => 'Tkh Lantikan',
            'TkhLantikanSkim' => 'Tkh Lantikan Skim',
            'TkhPengesahan' => 'Tkh Pengesahan',
            'TkhBerpencen' => 'Tkh Berpencen',
            'StatusPencen' => 'Status Pencen',
            'TkhBersara' => 'Tkh Bersara',
            'profilMigrated' => 'Profil Migrated',
            'profilBiometrik' => 'Profil Biometrik',
            'profilSso' => 'Profil Sso',
            'profilProses' => 'Profil Proses',
            'profilMis' => 'Profil Mis',
            'profilTempah' => 'Profil Tempah',
            'profilSpl' => 'Profil Spl',
            'profilCoas' => 'Profil Coas',
            'profilCreated' => 'Profil Created',
            'profilModified' => 'Profil Modified',
            'profilDeleted' => 'Profil Deleted',
            'profilDPlatform' => 'Profil D Platform',
            'profilDBrowser' => 'Profil D Browser',
            'profilDVersion' => 'Profil D Version',
            'profilMPlatform' => 'Profil M Platform',
            'profilMBrowser' => 'Profil M Browser',
            'profilMVersion' => 'Profil M Version',
            'StatusLantikan' => 'Status Lantikan',
            'StatusPengesahan' => 'Status Pengesahan',
            'TkhLanjutan' => 'Tkh Lanjutan',
            'PilihanBersara' => 'Pilihan Bersara',
            'TapisanKeselamatan' => 'Tapisan Keselamatan',
            'BlnGaji' => 'Bln Gaji',
            'TkhPangkat' => 'Tkh Pangkat',
            'TkhMemangku' => 'Tkh Memangku',
            'NoKWSP' => 'No Kwsp',
            'NoLHDN' => 'No Lhdn',
            'TkhMulaSkim' => 'Tkh Mula Skim',
            'byPass' => 'By Pass',
        ];
    }

    /**
     * Gets query for [[ProfilAccount]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfilAccount()
    {
        return $this->hasOne(ProfilAccount::class, ['id' => 'id']);
    }

    /**
     * Gets query for [[ProfilAffix0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfilAffix0()
    {
        return $this->hasOne(KonfRujukan::class, ['id' => 'profilAffix']);
    }

    /**
     * Gets query for [[ProfilAgama0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfilAgama0()
    {
        return $this->hasOne(KonfRujukan::class, ['id' => 'profilAgama']);
    }

    /**
     * Gets query for [[ProfilBangsa0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfilBangsa0()
    {
        return $this->hasOne(KonfRujukan::class, ['id' => 'profilBangsa']);
    }

    /**
     * Gets query for [[ProfilGelaran0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfilGelaran0()
    {
        return $this->hasOne(KonfRujukan::class, ['id' => 'profilGelaran']);
    }

    /**
     * Gets query for [[ProfilJantina0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfilJantina0()
    {
        return $this->hasOne(KonfRujukan::class, ['id' => 'profilJantina']);
    }

    /**
     * Gets query for [[ProfilWarganegara0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfilWarganegara0()
    {
        return $this->hasOne(KonfRujukan::class, ['id' => 'profilWarganegara']);
    }

    /**
     * Gets query for [[StatusPencen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatusPencen()
    {
        return $this->hasOne(KonfRujukan::class, ['id' => 'StatusPencen']);
    }
}

<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "konf_program".
 *
 * @property int $id
 * @property int|null $prgParent Parent
 * @property int|null $prgBahagian Division
 * @property int|null $splBahagian SPL
 * @property string $prgStart Start Date
 * @property string|null $prgEnd End Date
 * @property string $prgCode Program Code
 * @property string $prgName Program Name
 * @property string|null $prgAbv Program Abbr.
 * @property string $prgFlag Flag (0-Null, 1-Agensi Name, 2-Division)
 * @property string|null $prgNotes Remarks
 * @property int|null $prgCreated Created Date
 * @property int|null $prgCreatedBy Created By
 * @property int|null $prgModified Modified Date
 * @property int|null $prgModifiedBy Modified By
 * @property int|null $prgDeleted Deleted Date
 * @property int|null $prgDeletedBy Deleted By
 */
class KonfProgram extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'konf_program';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prgParent', 'prgBahagian', 'splBahagian', 'prgCreated', 'prgCreatedBy', 'prgModified', 'prgModifiedBy', 'prgDeleted', 'prgDeletedBy'], 'integer'],
            [['prgStart', 'prgCode', 'prgName', 'prgFlag'], 'required'],
            [['prgStart', 'prgEnd'], 'safe'],
            [['prgFlag', 'prgNotes'], 'string'],
            [['prgCode'], 'string', 'max' => 50],
            [['prgName'], 'string', 'max' => 200],
            [['prgAbv'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'prgParent' => 'Prg Parent',
            'prgBahagian' => 'Prg Bahagian',
            'splBahagian' => 'Spl Bahagian',
            'prgStart' => 'Prg Start',
            'prgEnd' => 'Prg End',
            'prgCode' => 'Prg Code',
            'prgName' => 'Prg Name',
            'prgAbv' => 'Prg Abv',
            'prgFlag' => 'Prg Flag',
            'prgNotes' => 'Prg Notes',
            'prgCreated' => 'Prg Created',
            'prgCreatedBy' => 'Prg Created By',
            'prgModified' => 'Prg Modified',
            'prgModifiedBy' => 'Prg Modified By',
            'prgDeleted' => 'Prg Deleted',
            'prgDeletedBy' => 'Prg Deleted By',
        ];
    }
}

<?php

namespace app\models;

use Yii;
use yii\helpers\Utf8ToHtml;

/**
 * This is the model class for table "resrve_school".
 *
 * @property string $school_no
 * @property string $school_code
 * @property string $school_name1
 * @property string $school_name2
 * @property string $school_flag
 * @property string $school_status
 * @property string $school_nature1
 * @property string $school_nature2
 * @property string $school_nature3
 * @property string $school_nature4
 * @property string $school_nature5
 * @property string $school_picture01
 * @property string $school_picture02
 * @property string $school_picture03
 * @property string $school_picture04
 * @property string $school_picture05
 * @property string $school_userdefine1
 * @property string $school_userdefine2
 * @property string $school_userdefine3
 * @property string $school_userdefine4
 * @property string $school_userdefine5
 * @property string $school_userdefine6
 * @property integer $school_userdefine7
 * @property integer $school_userdefine8
 * @property string $school_userdefine9
 * @property string $school_userdefine10
 * @property string $school_sorting
 * @property string $school_sys_last_mod_date
 * @property string $school_sys_last_mod_user
 * @property string $school_sys_delete_flag
 */
class ResrveSchool extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resrve_school';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_name1'], 'required'],
            [['school_name1', 'school_name2', 'school_picture01', 'school_picture02', 'school_picture03', 'school_picture04', 'school_picture05', 'school_userdefine1', 'school_userdefine2', 'school_userdefine3'], 'string'],
            [['school_nature1', 'school_nature2', 'school_nature3', 'school_nature4', 'school_nature5', 'school_userdefine7', 'school_userdefine8', 'school_sys_last_mod_user'], 'integer'],
            [['school_userdefine5', 'school_userdefine6'], 'number'],
            [['school_userdefine9', 'school_userdefine10', 'school_sys_last_mod_date'], 'safe'],
            [['school_code'], 'string', 'max' => 120],
            [['school_flag', 'school_status', 'school_userdefine4', 'school_sys_delete_flag'], 'string', 'max' => 1],
            [['school_sorting'], 'string', 'max' => 40],
            [['school_code'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'school_no' => Yii::t('app', 'School No'),
            'school_code' => Yii::t('app', 'School Code'),
            'school_name1' => Yii::t('app', 'School Name1'),
            'school_name2' => Yii::t('app', 'School Name2'),
            'school_flag' => Yii::t('app', 'School Flag'),
            'school_status' => Yii::t('app', 'School Status'),
            'school_nature1' => Yii::t('app', 'School Nature1'),
            'school_nature2' => Yii::t('app', 'School Nature2'),
            'school_nature3' => Yii::t('app', 'School Nature3'),
            'school_nature4' => Yii::t('app', 'School Nature4'),
            'school_nature5' => Yii::t('app', 'School Nature5'),
            'school_picture01' => Yii::t('app', 'School Picture01'),
            'school_picture02' => Yii::t('app', 'School Picture02'),
            'school_picture03' => Yii::t('app', 'School Picture03'),
            'school_picture04' => Yii::t('app', 'School Picture04'),
            'school_picture05' => Yii::t('app', 'School Picture05'),
            'school_userdefine1' => Yii::t('app', 'School Userdefine1'),
            'school_userdefine2' => Yii::t('app', 'School Userdefine2'),
            'school_userdefine3' => Yii::t('app', 'School Userdefine3'),
            'school_userdefine4' => Yii::t('app', 'School Userdefine4'),
            'school_userdefine5' => Yii::t('app', 'School Userdefine5'),
            'school_userdefine6' => Yii::t('app', 'School Userdefine6'),
            'school_userdefine7' => Yii::t('app', 'School Userdefine7'),
            'school_userdefine8' => Yii::t('app', 'School Userdefine8'),
            'school_userdefine9' => Yii::t('app', 'School Userdefine9'),
            'school_userdefine10' => Yii::t('app', 'School Userdefine10'),
            'school_sorting' => Yii::t('app', 'School Sorting'),
            'school_sys_last_mod_date' => Yii::t('app', 'School Sys Last Mod Date'),
            'school_sys_last_mod_user' => Yii::t('app', 'School Sys Last Mod User'),
            'school_sys_delete_flag' => Yii::t('app', 'School Sys Delete Flag'),
        ];
    }

    public static function ddlSchool() 
    {
        $schools = ResrveSchool::find()->all();
        $data = array();

        foreach ($schools as $school) {
            $data[$school->school_no] = trim(Utf8ToHtml::decrypt($school->school_name1, 'UTF-8'));
        }

        return $data;
    }
}

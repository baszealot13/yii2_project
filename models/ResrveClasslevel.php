<?php

namespace app\models;

use Yii;
use yii\helpers\UTf8ToHtml;

/**
 * This is the model class for table "resrve_classlevel".
 *
 * @property string $level_no
 * @property string $level_code
 * @property string $level_name1
 * @property string $level_name2
 * @property string $level_flag
 * @property string $level_status
 * @property string $level_userdefine1
 * @property string $level_userdefine2
 * @property string $level_userdefine3
 * @property string $level_userdefine4
 * @property string $level_userdefine5
 * @property string $level_userdefine6
 * @property integer $level_userdefine7
 * @property integer $level_userdefine8
 * @property string $level_userdefine9
 * @property string $level_userdefine10
 * @property string $level_sorting
 * @property string $level_sys_last_mod_date
 * @property string $level_sys_last_mod_user
 * @property string $level_sys_delete_flag
 */
class ResrveClasslevel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resrve_classlevel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['level_name1'], 'required'],
            [['level_name1', 'level_name2', 'level_userdefine1', 'level_userdefine2', 'level_userdefine3'], 'string'],
            [['level_userdefine5', 'level_userdefine6'], 'number'],
            [['level_userdefine7', 'level_userdefine8', 'level_sys_last_mod_user'], 'integer'],
            [['level_userdefine9', 'level_userdefine10', 'level_sys_last_mod_date'], 'safe'],
            [['level_code'], 'string', 'max' => 120],
            [['level_flag', 'level_status', 'level_userdefine4', 'level_sys_delete_flag'], 'string', 'max' => 1],
            [['level_sorting'], 'string', 'max' => 40],
            [['level_code'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'level_no' => Yii::t('app', 'Level No'),
            'level_code' => Yii::t('app', 'Level Code'),
            'level_name1' => Yii::t('app', 'Level Name1'),
            'level_name2' => Yii::t('app', 'Level Name2'),
            'level_flag' => Yii::t('app', 'Level Flag'),
            'level_status' => Yii::t('app', 'Level Status'),
            'level_userdefine1' => Yii::t('app', 'Level Userdefine1'),
            'level_userdefine2' => Yii::t('app', 'Level Userdefine2'),
            'level_userdefine3' => Yii::t('app', 'Level Userdefine3'),
            'level_userdefine4' => Yii::t('app', 'Level Userdefine4'),
            'level_userdefine5' => Yii::t('app', 'Level Userdefine5'),
            'level_userdefine6' => Yii::t('app', 'Level Userdefine6'),
            'level_userdefine7' => Yii::t('app', 'Level Userdefine7'),
            'level_userdefine8' => Yii::t('app', 'Level Userdefine8'),
            'level_userdefine9' => Yii::t('app', 'Level Userdefine9'),
            'level_userdefine10' => Yii::t('app', 'Level Userdefine10'),
            'level_sorting' => Yii::t('app', 'Level Sorting'),
            'level_sys_last_mod_date' => Yii::t('app', 'Level Sys Last Mod Date'),
            'level_sys_last_mod_user' => Yii::t('app', 'Level Sys Last Mod User'),
            'level_sys_delete_flag' => Yii::t('app', 'Level Sys Delete Flag'),
        ];
    }

    public static function ddlClassLevel() 
    {
        $classlevels = ResrveClasslevel::find()->all();
        $data = array();

        foreach ($classlevels as $classlevel) {
            $data[$classlevel->level_no] = trim(Utf8ToHtml::decrypt($classlevel->level_name1, 'UTF-8'));
        }

        return $data;
    }
}

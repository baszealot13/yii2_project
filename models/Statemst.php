<?php

namespace app\models;

use Yii;
use yii\helpers\Utf8ToHtml;


/**
 * This is the model class for table "statemst".
 *
 * @property string $stte_no
 * @property string $stte_code
 * @property string $stte_name1
 * @property string $stte_name2
 * @property string $stte_start_date
 * @property string $stte_target
 * @property string $stte_flag
 * @property string $stte_ref
 * @property string $stte_status
 * @property string $stte_userdefine1
 * @property string $stte_userdefine2
 * @property string $stte_userdefine3
 * @property string $stte_userdefine4
 * @property string $stte_userdefine5
 * @property string $stte_userdefine6
 * @property integer $stte_userdefine7
 * @property integer $stte_userdefine8
 * @property string $stte_userdefine9
 * @property string $stte_userdefine10
 * @property string $stte_sorting
 * @property string $stte_sys_last_mod_date
 * @property string $stte_sys_last_mod_user
 * @property string $stte_sys_delete_flag
 * @property integer $stte_leaddays
 */
class Statemst extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'statemst';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['stte_name1'], 'required'],
            [['stte_name1', 'stte_name2', 'stte_ref', 'stte_userdefine1', 'stte_userdefine2', 'stte_userdefine3'], 'string'],
            [['stte_start_date', 'stte_userdefine9', 'stte_userdefine10', 'stte_sys_last_mod_date'], 'safe'],
            [['stte_target', 'stte_userdefine5', 'stte_userdefine6'], 'number'],
            [['stte_userdefine7', 'stte_userdefine8', 'stte_sys_last_mod_user', 'stte_leaddays'], 'integer'],
            [['stte_code'], 'string', 'max' => 120],
            [['stte_flag', 'stte_status', 'stte_userdefine4', 'stte_sys_delete_flag'], 'string', 'max' => 1],
            [['stte_sorting'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'stte_no' => Yii::t('app', 'Stte No'),
            'stte_code' => Yii::t('app', 'Stte Code'),
            'stte_name1' => Yii::t('app', 'Stte Name1'),
            'stte_name2' => Yii::t('app', 'Stte Name2'),
            'stte_start_date' => Yii::t('app', 'Stte Start Date'),
            'stte_target' => Yii::t('app', 'Stte Target'),
            'stte_flag' => Yii::t('app', 'Stte Flag'),
            'stte_ref' => Yii::t('app', 'Stte Ref'),
            'stte_status' => Yii::t('app', 'Stte Status'),
            'stte_userdefine1' => Yii::t('app', 'Stte Userdefine1'),
            'stte_userdefine2' => Yii::t('app', 'Stte Userdefine2'),
            'stte_userdefine3' => Yii::t('app', 'Stte Userdefine3'),
            'stte_userdefine4' => Yii::t('app', 'Stte Userdefine4'),
            'stte_userdefine5' => Yii::t('app', 'Stte Userdefine5'),
            'stte_userdefine6' => Yii::t('app', 'Stte Userdefine6'),
            'stte_userdefine7' => Yii::t('app', 'Stte Userdefine7'),
            'stte_userdefine8' => Yii::t('app', 'Stte Userdefine8'),
            'stte_userdefine9' => Yii::t('app', 'Stte Userdefine9'),
            'stte_userdefine10' => Yii::t('app', 'Stte Userdefine10'),
            'stte_sorting' => Yii::t('app', 'Stte Sorting'),
            'stte_sys_last_mod_date' => Yii::t('app', 'Stte Sys Last Mod Date'),
            'stte_sys_last_mod_user' => Yii::t('app', 'Stte Sys Last Mod User'),
            'stte_sys_delete_flag' => Yii::t('app', 'Stte Sys Delete Flag'),
            'stte_leaddays' => Yii::t('app', 'Stte Leaddays'),
        ];
    }

    public function ddlStatemst() 
    {
        $statemsts = Statemst::find()->all();
        $data = array();

        foreach ($statemsts as $statemst) {
            $data[$statemst->stte_no] = trim(Utf8ToHtml::decrypt($statemst->stte_name1, 'UTF-8'));
        }

        return $data;
    }
}

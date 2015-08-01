<?php

namespace app\models;

use Yii;
use yii\helpers\Utf8ToHtml;

/**
 * This is the model class for table "resrve_majormst".
 *
 * @property integer $rm_no
 * @property string $rm_name1
 * @property string $rm_name2
 * @property string $rm_flag
 * @property string $rm_sorting
 * @property string $rm_sys_last_mod_date
 * @property string $rm_sys_last_mod_user
 * @property string $rm_sys_delete_flag
 */
class ResrveMajormst extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resrve_majormst';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rm_name1', 'rm_name2'], 'string'],
            [['rm_sys_last_mod_date'], 'safe'],
            [['rm_sys_last_mod_user'], 'integer'],
            [['rm_flag', 'rm_sys_delete_flag'], 'string', 'max' => 1],
            [['rm_sorting'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rm_no' => Yii::t('app', 'Rm No'),
            'rm_name1' => Yii::t('app', 'Rm Name1'),
            'rm_name2' => Yii::t('app', 'Rm Name2'),
            'rm_flag' => Yii::t('app', 'Rm Flag'),
            'rm_sorting' => Yii::t('app', 'Rm Sorting'),
            'rm_sys_last_mod_date' => Yii::t('app', 'Rm Sys Last Mod Date'),
            'rm_sys_last_mod_user' => Yii::t('app', 'Rm Sys Last Mod User'),
            'rm_sys_delete_flag' => Yii::t('app', 'Rm Sys Delete Flag'),
        ];
    }

    public function ddlMajormst() 
    {
        $majormsts = ResrveMajormst::find()->all();
        $data = array();

        foreach ($majormsts as $majormst) {
            $data[$majormst->rm_no] = trim(Utf8ToHtml::decrypt($majormst->rm_name1, 'UTF-8'));
        }

        return $data;
    }
}

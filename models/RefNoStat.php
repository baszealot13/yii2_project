<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ref_no_stat".
 *
 * @property string $SREF_TYPE1
 * @property string $SREF_TYPE2
 * @property string $SREF_REFERER
 * @property string $SREF_DESC1
 * @property string $SREF_DESC2
 * @property string $SREF_ORDER
 * @property string $SREF_PARAMETER1
 * @property string $SREF_PARAMETER2
 * @property string $SREF_MODE
 * @property string $SREF_DEBIT
 * @property string $SREF_CREDIT
 * @property string $SREF_CUR
 * @property string $SREF_MIN
 * @property string $SREF_MAX
 * @property string $sref_flag_custom
 * @property integer $sref_custom_runnum_digit
 * @property string $sref_custom_format
 * @property string $sref_custom_used_refno
 * @property string $SREF_USERDEFINE1
 * @property string $SREF_USERDEFINE2
 * @property string $SREF_USERDEFINE3
 * @property string $SREF_USERDEFINE4
 * @property string $SREF_USERDEFINE5
 * @property string $SREF_USERDEFINE6
 * @property integer $SREF_USERDEFINE7
 * @property integer $SREF_USERDEFINE8
 * @property string $SREF_USERDEFINE9
 * @property string $SREF_USERDEFINE10
 * @property string $SREF_LG_SORTING
 * @property string $SREF_RUN_FLAG
 * @property string $SREF_sys_last_mod_date
 * @property string $SREF_sys_last_mod_user
 * @property string $SREF_sys_delete_flag
 * @property integer $sref_active
 * @property integer $sref_reason_flag
 * @property string $SREF_COM_CTRL_REF_NO
 * @property string $sref_userdef1SQL
 * @property string $sref_userdef2SQL
 * @property string $sref_userdef3SQL
 * @property string $sref_userdef1Title
 * @property string $sref_userdef2Title
 * @property string $sref_userdef3Title
 * @property string $sref_body_desc_control
 * @property string $sref_body_subdesc_control
 */
class RefNoStat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ref_no_stat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SREF_TYPE1', 'SREF_TYPE2', 'SREF_REFERER', 'SREF_DESC1', 'SREF_CUR'], 'required'],
            [['SREF_DESC1', 'SREF_DESC2', 'SREF_ORDER', 'SREF_MODE', 'SREF_USERDEFINE1', 'SREF_USERDEFINE2', 'SREF_USERDEFINE3', 'sref_userdef1SQL', 'sref_userdef2SQL', 'sref_userdef3SQL'], 'string'],
            [['SREF_DEBIT', 'SREF_CREDIT', 'SREF_USERDEFINE5', 'SREF_USERDEFINE6'], 'number'],
            [['SREF_CUR', 'SREF_MIN', 'SREF_MAX', 'sref_custom_runnum_digit', 'SREF_USERDEFINE7', 'SREF_USERDEFINE8', 'SREF_sys_last_mod_user', 'sref_active', 'sref_reason_flag'], 'integer'],
            [['SREF_USERDEFINE9', 'SREF_USERDEFINE10', 'SREF_sys_last_mod_date'], 'safe'],
            [['SREF_TYPE1', 'SREF_TYPE2', 'SREF_PARAMETER1', 'SREF_PARAMETER2'], 'string', 'max' => 160],
            [['SREF_REFERER'], 'string', 'max' => 50],
            [['sref_flag_custom', 'sref_custom_used_refno', 'SREF_USERDEFINE4', 'SREF_RUN_FLAG', 'SREF_sys_delete_flag', 'SREF_COM_CTRL_REF_NO'], 'string', 'max' => 1],
            [['sref_custom_format', 'SREF_LG_SORTING'], 'string', 'max' => 40],
            [['sref_userdef1Title', 'sref_userdef2Title', 'sref_userdef3Title'], 'string', 'max' => 20],
            [['sref_body_desc_control', 'sref_body_subdesc_control'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'SREF_TYPE1' => Yii::t('app', 'Sref  Type1'),
            'SREF_TYPE2' => Yii::t('app', 'Sref  Type2'),
            'SREF_REFERER' => Yii::t('app', 'Sref  Referer'),
            'SREF_DESC1' => Yii::t('app', 'Sref  Desc1'),
            'SREF_DESC2' => Yii::t('app', 'Sref  Desc2'),
            'SREF_ORDER' => Yii::t('app', 'Sref  Order'),
            'SREF_PARAMETER1' => Yii::t('app', 'Sref  Parameter1'),
            'SREF_PARAMETER2' => Yii::t('app', 'Sref  Parameter2'),
            'SREF_MODE' => Yii::t('app', 'Sref  Mode'),
            'SREF_DEBIT' => Yii::t('app', 'Sref  Debit'),
            'SREF_CREDIT' => Yii::t('app', 'Sref  Credit'),
            'SREF_CUR' => Yii::t('app', 'Sref  Cur'),
            'SREF_MIN' => Yii::t('app', 'Sref  Min'),
            'SREF_MAX' => Yii::t('app', 'Sref  Max'),
            'sref_flag_custom' => Yii::t('app', 'Sref Flag Custom'),
            'sref_custom_runnum_digit' => Yii::t('app', 'Sref Custom Runnum Digit'),
            'sref_custom_format' => Yii::t('app', 'Sref Custom Format'),
            'sref_custom_used_refno' => Yii::t('app', 'Sref Custom Used Refno'),
            'SREF_USERDEFINE1' => Yii::t('app', 'Sref  Userdefine1'),
            'SREF_USERDEFINE2' => Yii::t('app', 'Sref  Userdefine2'),
            'SREF_USERDEFINE3' => Yii::t('app', 'Sref  Userdefine3'),
            'SREF_USERDEFINE4' => Yii::t('app', 'Sref  Userdefine4'),
            'SREF_USERDEFINE5' => Yii::t('app', 'Sref  Userdefine5'),
            'SREF_USERDEFINE6' => Yii::t('app', 'Sref  Userdefine6'),
            'SREF_USERDEFINE7' => Yii::t('app', 'Sref  Userdefine7'),
            'SREF_USERDEFINE8' => Yii::t('app', 'Sref  Userdefine8'),
            'SREF_USERDEFINE9' => Yii::t('app', 'Sref  Userdefine9'),
            'SREF_USERDEFINE10' => Yii::t('app', 'Sref  Userdefine10'),
            'SREF_LG_SORTING' => Yii::t('app', 'Sref  Lg  Sorting'),
            'SREF_RUN_FLAG' => Yii::t('app', 'Sref  Run  Flag'),
            'SREF_sys_last_mod_date' => Yii::t('app', 'Sref Sys Last Mod Date'),
            'SREF_sys_last_mod_user' => Yii::t('app', 'Sref Sys Last Mod User'),
            'SREF_sys_delete_flag' => Yii::t('app', 'Sref Sys Delete Flag'),
            'sref_active' => Yii::t('app', 'Sref Active'),
            'sref_reason_flag' => Yii::t('app', 'Sref Reason Flag'),
            'SREF_COM_CTRL_REF_NO' => Yii::t('app', 'Sref  Com  Ctrl  Ref  No'),
            'sref_userdef1SQL' => Yii::t('app', 'Sref Userdef1 Sql'),
            'sref_userdef2SQL' => Yii::t('app', 'Sref Userdef2 Sql'),
            'sref_userdef3SQL' => Yii::t('app', 'Sref Userdef3 Sql'),
            'sref_userdef1Title' => Yii::t('app', 'Sref Userdef1 Title'),
            'sref_userdef2Title' => Yii::t('app', 'Sref Userdef2 Title'),
            'sref_userdef3Title' => Yii::t('app', 'Sref Userdef3 Title'),
            'sref_body_desc_control' => Yii::t('app', 'Sref Body Desc Control'),
            'sref_body_subdesc_control' => Yii::t('app', 'Sref Body Subdesc Control'),
        ];
    }

    /*$sql = "SELECT  sref_cur
                    FROM    enconcept.ref_no_stat
                    WHERE   sref_type1 = 'RES' AND
                    sref_type2 = 'CUS' AND
                    sref_referer = 'resrve_customer'";

    $query = mysql_query($sql,$dbh1);
    $objResult_no = mysql_fetch_array($query);
    $customer_code = "1000" .  $objResult_no["sref_cur"] + 1;
    $ref_code =  $objResult_no["sref_cur"] + 1;
    $pw = $customer_code;
    $pw = student_password($pw);

    
    $up_ref = "update enconcept.ref_no_stat
                    set sref_cur = '$ref_code'
                WHERE sref_type1 = 'RES' 
                    AND sref_type2 = 'CUS' 
                    AND sref_referer = 'resrve_customer'" ;*/
    public static function getCustomerCode() {
        $model = RefNoStat::find()->where(['sref_type1' => 'RES', 'sref_type2' => 'CUS', 'sref_referer' => 'resrve_customer'])->one();
        return $model;
    }
}

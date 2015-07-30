<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "resrve_customer".
 *
 * @property integer $customer_no
 * @property string $customer_code
 * @property string $customer_id01
 * @property string $customer_id02
 * @property integer $reference_year_01
 * @property integer $reference_year_02
 * @property integer $reference_year_03
 * @property string $customer_last_name
 * @property string $customer_first_name
 * @property string $customer_middle_name
 * @property string $customer_name2
 * @property string $customer_nickname
 * @property string $customer_password
 * @property string $customer_ssn
 * @property string $customer_passport_no
 * @property string $customer_passport_expiry_date
 * @property integer $customer_salutation
 * @property string $customer_last_name2
 * @property string $customer_first_name2
 * @property string $customer_job_title
 * @property string $customer_company_name
 * @property string $customer_company_address1
 * @property string $customer_company_address2
 * @property string $customer_company_address3
 * @property string $customer_company_address4
 * @property integer $customer_max_edu
 * @property string $customer_coordinator_contact
 * @property string $customer_organization_url
 * @property string $customer_flag
 * @property string $customer_status
 * @property string $customer_primary_contact_name
 * @property string $customer_primary_contact_last_name
 * @property string $customer_primary_contact_mobile
 * @property string $customer_secondary_contact_name
 * @property string $customer_secondary_contact_last_name
 * @property integer $customer_no_of_siblings
 * @property string $customer_secondary_contact_mobile
 * @property string $customer_parent_name
 * @property string $customer_parent_last_name
 * @property string $customer_enroll_date
 * @property string $customer_start_date
 * @property string $customer_start_level
 * @property integer $customer_nature1
 * @property integer $customer_nature2
 * @property integer $customer_nature3
 * @property integer $customer_nature4
 * @property integer $customer_nature5
 * @property string $customer_picture01
 * @property string $customer_picture02
 * @property string $customer_picture03
 * @property string $customer_picture04
 * @property string $customer_picture05
 * @property integer $customer_organization
 * @property string $customer_address1
 * @property string $customer_address2
 * @property string $customer_address3
 * @property string $customer_address4
 * @property integer $customer_area_no
 * @property integer $customer_state_no
 * @property integer $customer_postcode_no
 * @property integer $customer_country_no
 * @property string $customer_tel
 * @property string $customer_mobile
 * @property string $customer_fax
 * @property string $customer_email
 * @property integer $customer_gender_no
 * @property integer $customer_classlevel_no
 * @property integer $customer_major_no
 * @property string $customer_birthdate
 * @property integer $customer_dbtr_link
 * @property integer $customer_royalty_no
 * @property string $customer_discover
 * @property string $customer_bouncebk
 * @property string $customer_userdefine1
 * @property string $customer_userdefine2
 * @property string $customer_userdefine3
 * @property string $customer_userdefine4
 * @property string $customer_userdefine5
 * @property string $customer_userdefine6
 * @property integer $customer_userdefine7
 * @property integer $customer_userdefine8
 * @property string $customer_userdefine9
 * @property string $customer_userdefine10
 * @property string $customer_sorting
 * @property string $customer_sys_last_mod_date
 * @property integer $customer_sys_last_mod_user
 * @property string $customer_sys_delete_flag
 * @property string $consult_card_no
 * @property integer $customer_branch
 * @property integer $customer_age_range
 * @property string $customer_race
 * @property integer $customer_query_promo
 * @property string $customer_query_comm
 * @property string $customer_source
 * @property string $customer_remark
 * @property string $customer_point
 * @property string $customer_sys_last_create_date
 * @property integer $customer_sys_last_create_user
 * @property string $customer_min_redeem_point
 * @property integer $customer_parent_gender_no
 * @property string $customer_parent_email
 * @property string $customer_parent_mobile
 * @property integer $customer_vat_group
 */
class ResrveCustomer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resrve_customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reference_year_01', 'reference_year_02', 'reference_year_03', 'customer_salutation', 'customer_max_edu', 'customer_no_of_siblings', 'customer_nature1', 'customer_nature2', 'customer_nature3', 'customer_nature4', 'customer_nature5', 'customer_organization', 'customer_area_no', 'customer_state_no', 'customer_postcode_no', 'customer_country_no', 'customer_gender_no', 'customer_classlevel_no', 'customer_major_no', 'customer_dbtr_link', 'customer_royalty_no', 'customer_userdefine7', 'customer_userdefine8', 'customer_sys_last_mod_user', 'customer_branch', 'customer_age_range', 'customer_query_promo', 'customer_sys_last_create_user', 'customer_parent_gender_no', 'customer_vat_group'], 'integer'],
            [['customer_last_name', 'customer_first_name'], 'required'],
            [['customer_last_name', 'customer_first_name', 'customer_middle_name', 'customer_name2', 'customer_nickname', 'customer_passport_no', 'customer_last_name2', 'customer_first_name2', 'customer_job_title', 'customer_company_name', 'customer_company_address1', 'customer_company_address2', 'customer_company_address3', 'customer_company_address4', 'customer_coordinator_contact', 'customer_organization_url', 'customer_primary_contact_name', 'customer_primary_contact_last_name', 'customer_secondary_contact_name', 'customer_secondary_contact_last_name', 'customer_parent_name', 'customer_parent_last_name', 'customer_picture01', 'customer_picture02', 'customer_picture03', 'customer_picture04', 'customer_picture05', 'customer_address1', 'customer_address2', 'customer_address3', 'customer_address4', 'customer_tel', 'customer_mobile', 'customer_fax', 'customer_discover', 'customer_userdefine1', 'customer_userdefine2', 'customer_userdefine3', 'customer_remark', 'customer_parent_mobile'], 'string'],
            [['customer_passport_expiry_date', 'customer_enroll_date', 'customer_start_date', 'customer_birthdate', 'customer_userdefine9', 'customer_userdefine10', 'customer_sys_last_mod_date', 'customer_sys_last_create_date'], 'safe'],
            [['customer_userdefine5', 'customer_userdefine6', 'customer_point', 'customer_min_redeem_point'], 'number'],
            [['customer_code'], 'string', 'max' => 120],
            [['customer_id01', 'customer_id02', 'customer_email', 'consult_card_no', 'customer_source', 'customer_parent_email'], 'string', 'max' => 250],
            [['customer_password'], 'string', 'max' => 255],
            [['customer_ssn', 'customer_race'], 'string', 'max' => 16],
            [['customer_flag', 'customer_status', 'customer_bouncebk', 'customer_userdefine4', 'customer_sys_delete_flag'], 'string', 'max' => 1],
            [['customer_primary_contact_mobile', 'customer_secondary_contact_mobile'], 'string', 'max' => 30],
            [['customer_start_level'], 'string', 'max' => 256],
            [['customer_sorting'], 'string', 'max' => 40],
            [['customer_query_comm'], 'string', 'max' => 10],
            [['customer_code'], 'unique'],
            [['customer_id01'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'customer_no' => 'Customer No',
            'customer_code' => 'Customer Code',
            'customer_id01' => 'Customer Id01',
            'customer_id02' => 'Customer Id02',
            'reference_year_01' => 'Reference Year 01',
            'reference_year_02' => 'Reference Year 02',
            'reference_year_03' => 'Reference Year 03',
            'customer_last_name' => 'Customer Last Name',
            'customer_first_name' => 'Customer First Name',
            'customer_middle_name' => 'Customer Middle Name',
            'customer_name2' => 'Customer Name2',
            'customer_nickname' => 'Customer Nickname',
            'customer_password' => 'Customer Password',
            'customer_ssn' => 'Customer Ssn',
            'customer_passport_no' => 'Customer Passport No',
            'customer_passport_expiry_date' => 'Customer Passport Expiry Date',
            'customer_salutation' => 'Customer Salutation',
            'customer_last_name2' => 'Customer Last Name2',
            'customer_first_name2' => 'Customer First Name2',
            'customer_job_title' => 'Customer Job Title',
            'customer_company_name' => 'Customer Company Name',
            'customer_company_address1' => 'Customer Company Address1',
            'customer_company_address2' => 'Customer Company Address2',
            'customer_company_address3' => 'Customer Company Address3',
            'customer_company_address4' => 'Customer Company Address4',
            'customer_max_edu' => 'Customer Max Edu',
            'customer_coordinator_contact' => 'Customer Coordinator Contact',
            'customer_organization_url' => 'Customer Organization Url',
            'customer_flag' => 'Customer Flag',
            'customer_status' => 'Customer Status',
            'customer_primary_contact_name' => 'Customer Primary Contact Name',
            'customer_primary_contact_last_name' => 'Customer Primary Contact Last Name',
            'customer_primary_contact_mobile' => 'Customer Primary Contact Mobile',
            'customer_secondary_contact_name' => 'Customer Secondary Contact Name',
            'customer_secondary_contact_last_name' => 'Customer Secondary Contact Last Name',
            'customer_no_of_siblings' => 'Customer No Of Siblings',
            'customer_secondary_contact_mobile' => 'Customer Secondary Contact Mobile',
            'customer_parent_name' => 'Customer Parent Name',
            'customer_parent_last_name' => 'Customer Parent Last Name',
            'customer_enroll_date' => 'Customer Enroll Date',
            'customer_start_date' => 'Customer Start Date',
            'customer_start_level' => 'Customer Start Level',
            'customer_nature1' => 'Customer Nature1',
            'customer_nature2' => 'Customer Nature2',
            'customer_nature3' => 'Customer Nature3',
            'customer_nature4' => 'Customer Nature4',
            'customer_nature5' => 'Customer Nature5',
            'customer_picture01' => 'Customer Picture01',
            'customer_picture02' => 'Customer Picture02',
            'customer_picture03' => 'Customer Picture03',
            'customer_picture04' => 'Customer Picture04',
            'customer_picture05' => 'Customer Picture05',
            'customer_organization' => 'Customer Organization',
            'customer_address1' => 'Customer Address1',
            'customer_address2' => 'Customer Address2',
            'customer_address3' => 'Customer Address3',
            'customer_address4' => 'Customer Address4',
            'customer_area_no' => 'Customer Area No',
            'customer_state_no' => 'Customer State No',
            'customer_postcode_no' => 'Customer Postcode No',
            'customer_country_no' => 'Customer Country No',
            'customer_tel' => 'Customer Tel',
            'customer_mobile' => 'Customer Mobile',
            'customer_fax' => 'Customer Fax',
            'customer_email' => 'Customer Email',
            'customer_gender_no' => 'Customer Gender No',
            'customer_classlevel_no' => 'Customer Classlevel No',
            'customer_major_no' => 'Customer Major No',
            'customer_birthdate' => 'Customer Birthdate',
            'customer_dbtr_link' => 'Customer Dbtr Link',
            'customer_royalty_no' => 'Customer Royalty No',
            'customer_discover' => 'Customer Discover',
            'customer_bouncebk' => 'Customer Bouncebk',
            'customer_userdefine1' => 'Customer Userdefine1',
            'customer_userdefine2' => 'Customer Userdefine2',
            'customer_userdefine3' => 'Customer Userdefine3',
            'customer_userdefine4' => 'Customer Userdefine4',
            'customer_userdefine5' => 'Customer Userdefine5',
            'customer_userdefine6' => 'Customer Userdefine6',
            'customer_userdefine7' => 'Customer Userdefine7',
            'customer_userdefine8' => 'Customer Userdefine8',
            'customer_userdefine9' => 'Customer Userdefine9',
            'customer_userdefine10' => 'Customer Userdefine10',
            'customer_sorting' => 'Customer Sorting',
            'customer_sys_last_mod_date' => 'Customer Sys Last Mod Date',
            'customer_sys_last_mod_user' => 'Customer Sys Last Mod User',
            'customer_sys_delete_flag' => 'Customer Sys Delete Flag',
            'consult_card_no' => 'Consult Card No',
            'customer_branch' => 'Customer Branch',
            'customer_age_range' => 'Customer Age Range',
            'customer_race' => 'Customer Race',
            'customer_query_promo' => 'Customer Query Promo',
            'customer_query_comm' => 'Customer Query Comm',
            'customer_source' => 'Customer Source',
            'customer_remark' => 'Customer Remark',
            'customer_point' => 'Customer Point',
            'customer_sys_last_create_date' => 'Customer Sys Last Create Date',
            'customer_sys_last_create_user' => 'Customer Sys Last Create User',
            'customer_min_redeem_point' => 'Customer Min Redeem Point',
            'customer_parent_gender_no' => 'Customer Parent Gender No',
            'customer_parent_email' => 'Customer Parent Email',
            'customer_parent_mobile' => 'Customer Parent Mobile',
            'customer_vat_group' => 'Customer Vat Group',
        ];
    }
}

<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ResrveCustomer;

/**
 * ResrveCustomerSearch represents the model behind the search form about `app\models\ResrveCustomer`.
 */
class ResrveCustomerSearch extends ResrveCustomer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_no', 'reference_year_01', 'reference_year_02', 'reference_year_03', 'customer_salutation', 'customer_max_edu', 'customer_no_of_siblings', 'customer_nature1', 'customer_nature2', 'customer_nature3', 'customer_nature4', 'customer_nature5', 'customer_organization', 'customer_area_no', 'customer_state_no', 'customer_postcode_no', 'customer_country_no', 'customer_gender_no', 'customer_classlevel_no', 'customer_major_no', 'customer_dbtr_link', 'customer_royalty_no', 'customer_userdefine7', 'customer_userdefine8', 'customer_sys_last_mod_user', 'customer_branch', 'customer_age_range', 'customer_query_promo', 'customer_sys_last_create_user', 'customer_parent_gender_no', 'customer_vat_group'], 'integer'],
            [['customer_code', 'customer_id01', 'customer_id02', 'customer_last_name', 'customer_first_name', 'customer_middle_name', 'customer_name2', 'customer_nickname', 'customer_password', 'customer_ssn', 'customer_passport_no', 'customer_passport_expiry_date', 'customer_last_name2', 'customer_first_name2', 'customer_job_title', 'customer_company_name', 'customer_company_address1', 'customer_company_address2', 'customer_company_address3', 'customer_company_address4', 'customer_coordinator_contact', 'customer_organization_url', 'customer_flag', 'customer_status', 'customer_primary_contact_name', 'customer_primary_contact_last_name', 'customer_primary_contact_mobile', 'customer_secondary_contact_name', 'customer_secondary_contact_last_name', 'customer_secondary_contact_mobile', 'customer_parent_name', 'customer_parent_last_name', 'customer_enroll_date', 'customer_start_date', 'customer_start_level', 'customer_picture01', 'customer_picture02', 'customer_picture03', 'customer_picture04', 'customer_picture05', 'customer_address1', 'customer_address2', 'customer_address3', 'customer_address4', 'customer_tel', 'customer_mobile', 'customer_fax', 'customer_email', 'customer_birthdate', 'customer_discover', 'customer_bouncebk', 'customer_userdefine1', 'customer_userdefine2', 'customer_userdefine3', 'customer_userdefine4', 'customer_userdefine9', 'customer_userdefine10', 'customer_sorting', 'customer_sys_last_mod_date', 'customer_sys_delete_flag', 'consult_card_no', 'customer_race', 'customer_query_comm', 'customer_source', 'customer_remark', 'customer_sys_last_create_date', 'customer_parent_email', 'customer_parent_mobile'], 'safe'],
            [['customer_userdefine5', 'customer_userdefine6', 'customer_point', 'customer_min_redeem_point'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ResrveCustomer::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'customer_no' => $this->customer_no,
            'reference_year_01' => $this->reference_year_01,
            'reference_year_02' => $this->reference_year_02,
            'reference_year_03' => $this->reference_year_03,
            'customer_passport_expiry_date' => $this->customer_passport_expiry_date,
            'customer_salutation' => $this->customer_salutation,
            'customer_max_edu' => $this->customer_max_edu,
            'customer_no_of_siblings' => $this->customer_no_of_siblings,
            'customer_enroll_date' => $this->customer_enroll_date,
            'customer_start_date' => $this->customer_start_date,
            'customer_nature1' => $this->customer_nature1,
            'customer_nature2' => $this->customer_nature2,
            'customer_nature3' => $this->customer_nature3,
            'customer_nature4' => $this->customer_nature4,
            'customer_nature5' => $this->customer_nature5,
            'customer_organization' => $this->customer_organization,
            'customer_area_no' => $this->customer_area_no,
            'customer_state_no' => $this->customer_state_no,
            'customer_postcode_no' => $this->customer_postcode_no,
            'customer_country_no' => $this->customer_country_no,
            'customer_gender_no' => $this->customer_gender_no,
            'customer_classlevel_no' => $this->customer_classlevel_no,
            'customer_major_no' => $this->customer_major_no,
            'customer_birthdate' => $this->customer_birthdate,
            'customer_dbtr_link' => $this->customer_dbtr_link,
            'customer_royalty_no' => $this->customer_royalty_no,
            'customer_userdefine5' => $this->customer_userdefine5,
            'customer_userdefine6' => $this->customer_userdefine6,
            'customer_userdefine7' => $this->customer_userdefine7,
            'customer_userdefine8' => $this->customer_userdefine8,
            'customer_userdefine9' => $this->customer_userdefine9,
            'customer_userdefine10' => $this->customer_userdefine10,
            'customer_sys_last_mod_date' => $this->customer_sys_last_mod_date,
            'customer_sys_last_mod_user' => $this->customer_sys_last_mod_user,
            'customer_branch' => $this->customer_branch,
            'customer_age_range' => $this->customer_age_range,
            'customer_query_promo' => $this->customer_query_promo,
            'customer_point' => $this->customer_point,
            'customer_sys_last_create_date' => $this->customer_sys_last_create_date,
            'customer_sys_last_create_user' => $this->customer_sys_last_create_user,
            'customer_min_redeem_point' => $this->customer_min_redeem_point,
            'customer_parent_gender_no' => $this->customer_parent_gender_no,
            'customer_vat_group' => $this->customer_vat_group,
        ]);

        $query->andFilterWhere(['like', 'customer_code', $this->customer_code])
            ->andFilterWhere(['like', 'customer_id01', $this->customer_id01])
            ->andFilterWhere(['like', 'customer_id02', $this->customer_id02])
            ->andFilterWhere(['like', 'customer_last_name', $this->customer_last_name])
            ->andFilterWhere(['like', 'customer_first_name', $this->customer_first_name])
            ->andFilterWhere(['like', 'customer_middle_name', $this->customer_middle_name])
            ->andFilterWhere(['like', 'customer_name2', $this->customer_name2])
            ->andFilterWhere(['like', 'customer_nickname', $this->customer_nickname])
            ->andFilterWhere(['like', 'customer_password', $this->customer_password])
            ->andFilterWhere(['like', 'customer_ssn', $this->customer_ssn])
            ->andFilterWhere(['like', 'customer_passport_no', $this->customer_passport_no])
            ->andFilterWhere(['like', 'customer_last_name2', $this->customer_last_name2])
            ->andFilterWhere(['like', 'customer_first_name2', $this->customer_first_name2])
            ->andFilterWhere(['like', 'customer_job_title', $this->customer_job_title])
            ->andFilterWhere(['like', 'customer_company_name', $this->customer_company_name])
            ->andFilterWhere(['like', 'customer_company_address1', $this->customer_company_address1])
            ->andFilterWhere(['like', 'customer_company_address2', $this->customer_company_address2])
            ->andFilterWhere(['like', 'customer_company_address3', $this->customer_company_address3])
            ->andFilterWhere(['like', 'customer_company_address4', $this->customer_company_address4])
            ->andFilterWhere(['like', 'customer_coordinator_contact', $this->customer_coordinator_contact])
            ->andFilterWhere(['like', 'customer_organization_url', $this->customer_organization_url])
            ->andFilterWhere(['like', 'customer_flag', $this->customer_flag])
            ->andFilterWhere(['like', 'customer_status', $this->customer_status])
            ->andFilterWhere(['like', 'customer_primary_contact_name', $this->customer_primary_contact_name])
            ->andFilterWhere(['like', 'customer_primary_contact_last_name', $this->customer_primary_contact_last_name])
            ->andFilterWhere(['like', 'customer_primary_contact_mobile', $this->customer_primary_contact_mobile])
            ->andFilterWhere(['like', 'customer_secondary_contact_name', $this->customer_secondary_contact_name])
            ->andFilterWhere(['like', 'customer_secondary_contact_last_name', $this->customer_secondary_contact_last_name])
            ->andFilterWhere(['like', 'customer_secondary_contact_mobile', $this->customer_secondary_contact_mobile])
            ->andFilterWhere(['like', 'customer_parent_name', $this->customer_parent_name])
            ->andFilterWhere(['like', 'customer_parent_last_name', $this->customer_parent_last_name])
            ->andFilterWhere(['like', 'customer_start_level', $this->customer_start_level])
            ->andFilterWhere(['like', 'customer_picture01', $this->customer_picture01])
            ->andFilterWhere(['like', 'customer_picture02', $this->customer_picture02])
            ->andFilterWhere(['like', 'customer_picture03', $this->customer_picture03])
            ->andFilterWhere(['like', 'customer_picture04', $this->customer_picture04])
            ->andFilterWhere(['like', 'customer_picture05', $this->customer_picture05])
            ->andFilterWhere(['like', 'customer_address1', $this->customer_address1])
            ->andFilterWhere(['like', 'customer_address2', $this->customer_address2])
            ->andFilterWhere(['like', 'customer_address3', $this->customer_address3])
            ->andFilterWhere(['like', 'customer_address4', $this->customer_address4])
            ->andFilterWhere(['like', 'customer_tel', $this->customer_tel])
            ->andFilterWhere(['like', 'customer_mobile', $this->customer_mobile])
            ->andFilterWhere(['like', 'customer_fax', $this->customer_fax])
            ->andFilterWhere(['like', 'customer_email', $this->customer_email])
            ->andFilterWhere(['like', 'customer_discover', $this->customer_discover])
            ->andFilterWhere(['like', 'customer_bouncebk', $this->customer_bouncebk])
            ->andFilterWhere(['like', 'customer_userdefine1', $this->customer_userdefine1])
            ->andFilterWhere(['like', 'customer_userdefine2', $this->customer_userdefine2])
            ->andFilterWhere(['like', 'customer_userdefine3', $this->customer_userdefine3])
            ->andFilterWhere(['like', 'customer_userdefine4', $this->customer_userdefine4])
            ->andFilterWhere(['like', 'customer_sorting', $this->customer_sorting])
            ->andFilterWhere(['like', 'customer_sys_delete_flag', $this->customer_sys_delete_flag])
            ->andFilterWhere(['like', 'consult_card_no', $this->consult_card_no])
            ->andFilterWhere(['like', 'customer_race', $this->customer_race])
            ->andFilterWhere(['like', 'customer_query_comm', $this->customer_query_comm])
            ->andFilterWhere(['like', 'customer_source', $this->customer_source])
            ->andFilterWhere(['like', 'customer_remark', $this->customer_remark])
            ->andFilterWhere(['like', 'customer_parent_email', $this->customer_parent_email])
            ->andFilterWhere(['like', 'customer_parent_mobile', $this->customer_parent_mobile]);

        return $dataProvider;
    }
}

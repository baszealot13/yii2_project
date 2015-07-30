<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ResrveCustomerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resrve-customer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'customer_no') ?>

    <?= $form->field($model, 'customer_code') ?>

    <?= $form->field($model, 'customer_id01') ?>

    <?= $form->field($model, 'customer_id02') ?>

    <?= $form->field($model, 'reference_year_01') ?>

    <?php // echo $form->field($model, 'reference_year_02') ?>

    <?php // echo $form->field($model, 'reference_year_03') ?>

    <?php // echo $form->field($model, 'customer_last_name') ?>

    <?php // echo $form->field($model, 'customer_first_name') ?>

    <?php // echo $form->field($model, 'customer_middle_name') ?>

    <?php // echo $form->field($model, 'customer_name2') ?>

    <?php // echo $form->field($model, 'customer_nickname') ?>

    <?php // echo $form->field($model, 'customer_password') ?>

    <?php // echo $form->field($model, 'customer_ssn') ?>

    <?php // echo $form->field($model, 'customer_passport_no') ?>

    <?php // echo $form->field($model, 'customer_passport_expiry_date') ?>

    <?php // echo $form->field($model, 'customer_salutation') ?>

    <?php // echo $form->field($model, 'customer_last_name2') ?>

    <?php // echo $form->field($model, 'customer_first_name2') ?>

    <?php // echo $form->field($model, 'customer_job_title') ?>

    <?php // echo $form->field($model, 'customer_company_name') ?>

    <?php // echo $form->field($model, 'customer_company_address1') ?>

    <?php // echo $form->field($model, 'customer_company_address2') ?>

    <?php // echo $form->field($model, 'customer_company_address3') ?>

    <?php // echo $form->field($model, 'customer_company_address4') ?>

    <?php // echo $form->field($model, 'customer_max_edu') ?>

    <?php // echo $form->field($model, 'customer_coordinator_contact') ?>

    <?php // echo $form->field($model, 'customer_organization_url') ?>

    <?php // echo $form->field($model, 'customer_flag') ?>

    <?php // echo $form->field($model, 'customer_status') ?>

    <?php // echo $form->field($model, 'customer_primary_contact_name') ?>

    <?php // echo $form->field($model, 'customer_primary_contact_last_name') ?>

    <?php // echo $form->field($model, 'customer_primary_contact_mobile') ?>

    <?php // echo $form->field($model, 'customer_secondary_contact_name') ?>

    <?php // echo $form->field($model, 'customer_secondary_contact_last_name') ?>

    <?php // echo $form->field($model, 'customer_no_of_siblings') ?>

    <?php // echo $form->field($model, 'customer_secondary_contact_mobile') ?>

    <?php // echo $form->field($model, 'customer_parent_name') ?>

    <?php // echo $form->field($model, 'customer_parent_last_name') ?>

    <?php // echo $form->field($model, 'customer_enroll_date') ?>

    <?php // echo $form->field($model, 'customer_start_date') ?>

    <?php // echo $form->field($model, 'customer_start_level') ?>

    <?php // echo $form->field($model, 'customer_nature1') ?>

    <?php // echo $form->field($model, 'customer_nature2') ?>

    <?php // echo $form->field($model, 'customer_nature3') ?>

    <?php // echo $form->field($model, 'customer_nature4') ?>

    <?php // echo $form->field($model, 'customer_nature5') ?>

    <?php // echo $form->field($model, 'customer_picture01') ?>

    <?php // echo $form->field($model, 'customer_picture02') ?>

    <?php // echo $form->field($model, 'customer_picture03') ?>

    <?php // echo $form->field($model, 'customer_picture04') ?>

    <?php // echo $form->field($model, 'customer_picture05') ?>

    <?php // echo $form->field($model, 'customer_organization') ?>

    <?php // echo $form->field($model, 'customer_address1') ?>

    <?php // echo $form->field($model, 'customer_address2') ?>

    <?php // echo $form->field($model, 'customer_address3') ?>

    <?php // echo $form->field($model, 'customer_address4') ?>

    <?php // echo $form->field($model, 'customer_area_no') ?>

    <?php // echo $form->field($model, 'customer_state_no') ?>

    <?php // echo $form->field($model, 'customer_postcode_no') ?>

    <?php // echo $form->field($model, 'customer_country_no') ?>

    <?php // echo $form->field($model, 'customer_tel') ?>

    <?php // echo $form->field($model, 'customer_mobile') ?>

    <?php // echo $form->field($model, 'customer_fax') ?>

    <?php // echo $form->field($model, 'customer_email') ?>

    <?php // echo $form->field($model, 'customer_gender_no') ?>

    <?php // echo $form->field($model, 'customer_classlevel_no') ?>

    <?php // echo $form->field($model, 'customer_major_no') ?>

    <?php // echo $form->field($model, 'customer_birthdate') ?>

    <?php // echo $form->field($model, 'customer_dbtr_link') ?>

    <?php // echo $form->field($model, 'customer_royalty_no') ?>

    <?php // echo $form->field($model, 'customer_discover') ?>

    <?php // echo $form->field($model, 'customer_bouncebk') ?>

    <?php // echo $form->field($model, 'customer_userdefine1') ?>

    <?php // echo $form->field($model, 'customer_userdefine2') ?>

    <?php // echo $form->field($model, 'customer_userdefine3') ?>

    <?php // echo $form->field($model, 'customer_userdefine4') ?>

    <?php // echo $form->field($model, 'customer_userdefine5') ?>

    <?php // echo $form->field($model, 'customer_userdefine6') ?>

    <?php // echo $form->field($model, 'customer_userdefine7') ?>

    <?php // echo $form->field($model, 'customer_userdefine8') ?>

    <?php // echo $form->field($model, 'customer_userdefine9') ?>

    <?php // echo $form->field($model, 'customer_userdefine10') ?>

    <?php // echo $form->field($model, 'customer_sorting') ?>

    <?php // echo $form->field($model, 'customer_sys_last_mod_date') ?>

    <?php // echo $form->field($model, 'customer_sys_last_mod_user') ?>

    <?php // echo $form->field($model, 'customer_sys_delete_flag') ?>

    <?php // echo $form->field($model, 'consult_card_no') ?>

    <?php // echo $form->field($model, 'customer_branch') ?>

    <?php // echo $form->field($model, 'customer_age_range') ?>

    <?php // echo $form->field($model, 'customer_race') ?>

    <?php // echo $form->field($model, 'customer_query_promo') ?>

    <?php // echo $form->field($model, 'customer_query_comm') ?>

    <?php // echo $form->field($model, 'customer_source') ?>

    <?php // echo $form->field($model, 'customer_remark') ?>

    <?php // echo $form->field($model, 'customer_point') ?>

    <?php // echo $form->field($model, 'customer_sys_last_create_date') ?>

    <?php // echo $form->field($model, 'customer_sys_last_create_user') ?>

    <?php // echo $form->field($model, 'customer_min_redeem_point') ?>

    <?php // echo $form->field($model, 'customer_parent_gender_no') ?>

    <?php // echo $form->field($model, 'customer_parent_email') ?>

    <?php // echo $form->field($model, 'customer_parent_mobile') ?>

    <?php // echo $form->field($model, 'customer_vat_group') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

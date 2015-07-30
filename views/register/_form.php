<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ResrveCustomer */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="well">
    <div class="resrve-customer-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'customer_code')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'customer_id01')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'customer_id02')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'reference_year_01')->textInput() ?>

        <?= $form->field($model, 'reference_year_02')->textInput() ?>

        <?= $form->field($model, 'reference_year_03')->textInput() ?>

        <?= $form->field($model, 'customer_last_name')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_first_name')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_middle_name')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_name2')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_nickname')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_password')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'customer_ssn')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'customer_passport_no')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_passport_expiry_date')->textInput() ?>

        <?= $form->field($model, 'customer_salutation')->textInput() ?>

        <?= $form->field($model, 'customer_last_name2')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_first_name2')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_job_title')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_company_name')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_company_address1')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_company_address2')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_company_address3')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_company_address4')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_max_edu')->textInput() ?>

        <?= $form->field($model, 'customer_coordinator_contact')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_organization_url')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_flag')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'customer_status')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'customer_primary_contact_name')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_primary_contact_last_name')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_primary_contact_mobile')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'customer_secondary_contact_name')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_secondary_contact_last_name')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_no_of_siblings')->textInput() ?>

        <?= $form->field($model, 'customer_secondary_contact_mobile')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'customer_parent_name')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_parent_last_name')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_enroll_date')->textInput() ?>

        <?= $form->field($model, 'customer_start_date')->textInput() ?>

        <?= $form->field($model, 'customer_start_level')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'customer_nature1')->textInput() ?>

        <?= $form->field($model, 'customer_nature2')->textInput() ?>

        <?= $form->field($model, 'customer_nature3')->textInput() ?>

        <?= $form->field($model, 'customer_nature4')->textInput() ?>

        <?= $form->field($model, 'customer_nature5')->textInput() ?>

        <?= $form->field($model, 'customer_picture01')->textInput() ?>

        <?= $form->field($model, 'customer_picture02')->textInput() ?>

        <?= $form->field($model, 'customer_picture03')->textInput() ?>

        <?= $form->field($model, 'customer_picture04')->textInput() ?>

        <?= $form->field($model, 'customer_picture05')->textInput() ?>

        <?= $form->field($model, 'customer_organization')->textInput() ?>

        <?= $form->field($model, 'customer_address1')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_address2')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_address3')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_address4')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_area_no')->textInput() ?>

        <?= $form->field($model, 'customer_state_no')->textInput() ?>

        <?= $form->field($model, 'customer_postcode_no')->textInput() ?>

        <?= $form->field($model, 'customer_country_no')->textInput() ?>

        <?= $form->field($model, 'customer_tel')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_mobile')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_fax')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_email')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'customer_gender_no')->textInput() ?>

        <?= $form->field($model, 'customer_classlevel_no')->textInput() ?>

        <?= $form->field($model, 'customer_major_no')->textInput() ?>

        <?= $form->field($model, 'customer_birthdate')->textInput() ?>

        <?= $form->field($model, 'customer_dbtr_link')->textInput() ?>

        <?= $form->field($model, 'customer_royalty_no')->textInput() ?>

        <?= $form->field($model, 'customer_discover')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_bouncebk')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'customer_userdefine1')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_userdefine2')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_userdefine3')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_userdefine4')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'customer_userdefine5')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'customer_userdefine6')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'customer_userdefine7')->textInput() ?>

        <?= $form->field($model, 'customer_userdefine8')->textInput() ?>

        <?= $form->field($model, 'customer_userdefine9')->textInput() ?>

        <?= $form->field($model, 'customer_userdefine10')->textInput() ?>

        <?= $form->field($model, 'customer_sorting')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'customer_sys_last_mod_date')->textInput() ?>

        <?= $form->field($model, 'customer_sys_last_mod_user')->textInput() ?>

        <?= $form->field($model, 'customer_sys_delete_flag')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'consult_card_no')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'customer_branch')->textInput() ?>

        <?= $form->field($model, 'customer_age_range')->textInput() ?>

        <?= $form->field($model, 'customer_race')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'customer_query_promo')->textInput() ?>

        <?= $form->field($model, 'customer_query_comm')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'customer_source')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'customer_remark')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_point')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'customer_sys_last_create_date')->textInput() ?>

        <?= $form->field($model, 'customer_sys_last_create_user')->textInput() ?>

        <?= $form->field($model, 'customer_min_redeem_point')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'customer_parent_gender_no')->textInput() ?>

        <?= $form->field($model, 'customer_parent_email')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'customer_parent_mobile')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'customer_vat_group')->textInput() ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>

<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\bootstrap\Alert;
use yii\captcha\Captcha;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\ResrveCustomer */
/* @var $form yii\widgets\ActiveForm */
?>
<?php  
if (!empty(Yii::$app->session->getFlash('success'))) {
    echo Alert::widget([
    'options' => [
        'class' => 'alert-success',
    ],
    'body' => Yii::$app->session->getFlash('success'),
]);
}
?>
<div class="well">
    <div class="resrve-customer-form">
 
        <?php $form = ActiveForm::begin(); ?>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-primary">

                    <div class="panel-heading">
                        <h3 class="panel-title">ข้อมูลส่วนตัว</h3>
                    </div>

                    <div class="panel-body">
                        <div class="col-md-12">
                            <div class="row">
                                <?= $form->field($model, 'customer_first_name')->textInput(['placeholder' => 'ชื่อ'])->label(false) ?>
                            </div>
                            <div class="row">
                                <?= $form->field($model, 'customer_last_name')->textInput(['placeholder' => 'นามสกุล'])->label(false) ?>
                            </div>
                            <div class="row">
                                <?= $form->field($model, 'customer_nickname')->textInput(['placeholder' => 'ชื่อเล่น'])->label(false) ?>
                            </div>
                            <div class="row">
                                <?= $form->field($model, 'customer_ssn')->textInput(['maxlength' => true, 'placeholder' => 'รหัสบัตรประจำตัวประชาชน'])->label(false) ?>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-1" style="padding-left: 0">เพศ</div>
                                <div class="col-md-11">
                                    <?= $form->field($model, 'customer_gender_no')->radioList(
                                            [0 => 'ชาย', 1 => 'หญิง'],
                                            [
                                                'unselect' => 0,
                                                'item' => function($index, $label, $name, $checked, $value) {
                                                    $check = $checked ? ' checked="checked"' : '';
                                                    $return = '<div class="radio radio-info" style="float: left; margin: 0px; margin-right: 15px;">';
                                                    $return .= '<label>';
                                                    $return .= '<input type="radio" name="' . $name . '" value="' . $value . '" '.$check.'>';
                                                    $return .= $label;
                                                    $return .= '</label>';
                                                    $return .= '</div>';
                                                    return $return;
                                                }
                                            ])->label(false) ?>
                                </div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col-md-2" style="padding-left: 0">วันเกิด</div>
                                <div class="col-md-3">
                                    <?php echo html::dropDownList('birthdate_d', !empty($birthdate_cur_d)?$birthdate_cur_d:null, $birthdate_d, ['class' => 'form-control']); ?>
                                </div>
                                <div class="col-md-4">
                                    <?php echo html::dropDownList('birthdate_m', !empty($birthdate_cur_m)?$birthdate_cur_m:null, $birthdate_m, ['class' => 'form-control']); ?>
                                </div>
                                <div class="col-md-3">
                                    <?php echo html::dropDownList('birthdate_y', !empty($birthdate_cur_y)?$birthdate_cur_y:null, $birthdate_y, ['class' => 'form-control']); ?>
                                </div>
                            </div>
                            <div class="row">
                                <?= $form->field($model, 'customer_classlevel_no')->dropDownList(
                                            $classLevels,
                                            ['prompt' => 'เลือกระดับชั้น', 'placeholder' => ''])->label(false) ?>
                            </div>
                            <div class="row">
                                <?= $form->field($model, 'customer_major_no')->dropDownList(
                                            $majormsts,
                                            ['prompt' => 'เลือกสายการเรียน', 'placeholder' => ''])->label(false) ?>
                            </div>
                            <div class="row">
                                <?= $form->field($model, 'customer_organization')->widget(Select2::classname(), [
                                            'data' => $schools,
                                            'options' => ['placeholder' => 'เลือกโรงเรียน'],
                                            'pluginOptions' => [
                                                'allowClear' => true
                                            ],
                                        ]); ?>
                                <!-- <?= $form->field($model, 'customer_organization')->dropDownList(
                                            $schools,
                                            ['prompt' => 'เลือกโรงเรียน', 'placeholder' => ''])->label(false) ?> -->
                            </div>
                            <div class="row">
                                <?= $form->field($model, 'customer_address1')->textarea(['rows' => 3, 'placeholder' => 'ที่อยู่'])->label(false) ?>
                            </div>
                            <div class="row">
                                <?= $form->field($model, 'customer_postcode_no')->textInput(['placeholder' => 'รหัสไปรษณีย์'])->label(false) ?>
                            </div>
                            <div class="row">
                                <?= $form->field($model, 'customer_state_no')->dropDownList(
                                        $statemsts,
                                        ['prompt' => 'เลือกจังหวัด', 'placeholder' => ''])->label(false) ?>
                            </div>
                            <div class="row">
                                <?= $form->field($model, 'customer_tel')->textInput(['placeholder' => 'เบอร์โทรศัพท์บ้าน'])->label(false) ?>
                            </div>
                            <div class="row">
                                <?= $form->field($model, 'customer_mobile')->textInput(['placeholder' => 'เบอร์โทรศัพท์มือถือ'])->label(false) ?>
                            </div>
                            <div class="row">
                                <?= $form->field($model, 'customer_email')->textInput(['maxlength' => true, 'placeholder' => 'อีเมลล์'])->label(false) ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-primary">

                    <div class="panel-heading">
                        <h3 class="panel-title">ข้อมูลผู้ติดต่อ</h3>
                    </div>

                    <div class="panel-body">
                        <div class="col-md-12">
                            <?= $form->field($model, 'customer_parent_name')->textInput(['placeholder' => 'ชื่อ'])->label(false) ?>
                            <?= $form->field($model, 'customer_parent_last_name')->textInput(['placeholder' => 'นามสกุล'])->label(false) ?>
                            <?= $form->field($model, 'customer_coordinator_contact')->textInput(['placeholder' => 'เบอร์โทรศัพท์'])->label(false) ?>
                            <?= $form->field($model, 'customer_organization_url')->textInput(['placeholder' => 'อีเมลล์'])->label(false) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php if (!$model->customer_no): ?>
        <div class="row">
            <div class="col-md-6">
            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                'options' => [
                    'class' => 'form-control floating-label',
                    'placeholder' => 'Verify Code'
                ],
                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
            ]) ?>
            </div>
        </div>
        <?php endif ?>


        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>

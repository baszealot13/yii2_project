<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

$this->title = 'Login';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">

    <div class="col-lg-offset-3 col-lg-6">
        <div class="well">
            <h1 style="text-align: center; padding-bottom: 20px;"><i class="mdi-action-face-unlock mdi-material-teal" style="font-size: 69px;"></i></h1>

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'options' => ['autocomplete' => 'off'],
            ]); ?>

            <?= $form->field($model, 'username')->textInput(['class' => 'form-control', 'placeholder' => 'Username'])->label(false) ?>

            <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control', 'placeholder' => 'Password'])->label(false) ?>

             <?= $form->field($model, 'rememberMe', [
                'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            ])->checkbox() ?> 

            <div class="row">
                <div class="col-lg-12">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <?= html::a('Register', ['register/create'], ['class' => 'btn btn-default btn-block']) ?>
                </div>
            </div>
        
            <?php ActiveForm::end(); ?>
        </div>
    </div>
       <!--  <div class="col-lg-offset-1" style="color:#999;">
            You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>
            To modify the username/password, please check out the code <code>app\models\User::$users</code>.
        </div> -->

</div>

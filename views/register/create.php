<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ResrveCustomer */

// $this->title = Yii::t('app', 'Create Resrve Customer');
$this->title = 'สมัครสมาชิก';
// $this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Resrve Customers'), 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="resrve-customer-create">

    <h2><i class="mdi-social-person-add"></i> <?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
        'birthdate_d' => $birthdate_d,
        'birthdate_y' => $birthdate_y,
        'birthdate_m' => $birthdate_m,
        'classLevels' => $classLevels,
        'majormsts' => $majormsts,
        'schools' => $schools,
        'statemsts' => $statemsts
    ]) ?>

</div>

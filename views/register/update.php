<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ResrveCustomer */

// $this->title = Yii::t('app', 'Update {modelClass}: ', [
//     'modelClass' => 'Resrve Customer',
// ]) . ' ' . $model->customer_no;
// $this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Resrve Customers'), 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->customer_no, 'url' => ['view', 'id' => $model->customer_no]];
// $this->params['breadcrumbs'][] = Yii::t('app', 'Update');
$this->title = 'ช้อมูลสมาชิก';
?>
<div class="resrve-customer-update">

    <h2><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
        'birthdate_d' => $birthdate_d,
        'birthdate_cur_d' => $birthdate_cur_d,
        'birthdate_y' => $birthdate_y,
        'birthdate_cur_y' => $birthdate_cur_y,
        'birthdate_m' => $birthdate_m,
        'birthdate_cur_m' => $birthdate_cur_m,
        'classLevels' => $classLevels,
        'majormsts' => $majormsts,
        'schools' => $schools,
        'statemsts' => $statemsts
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ResrveCustomer */

$this->title = 'Update Resrve Customer: ' . ' ' . $model->customer_no;
$this->params['breadcrumbs'][] = ['label' => 'Resrve Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->customer_no, 'url' => ['view', 'id' => $model->customer_no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resrve-customer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

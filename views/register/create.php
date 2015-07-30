<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ResrveCustomer */

$this->title = 'Create Resrve Customer';
$this->params['breadcrumbs'][] = ['label' => 'Resrve Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resrve-customer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\themes\resrve\ResrveAsset;
use yii\web\Session;

/* @var $this \yii\web\View */
/* @var $content string */

ResrveAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php // echo 'Session: ' . Yii::$app->session->get('sess_customer_no') ?>
<?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'ENCONCEPT',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-static-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => '', 'url' => ['/site/index'], 'linkOptions' => ['class' => 'mdi-action-home']],
                    // ['label' => 'About', 'url' => ['/site/about']],
                    // ['label' => 'Contact', 'url' => ['/site/contact']],
                    // Yii::$app->user->isGuest ?
                    // ['label' => 'Register', 'url' => ['/register/create']],
                    !Yii::$app->session->get('sess_customer_no') ?
                        ['label' => 'Login', 'url' => ['/site/login']]: 
                        ['label' => '',
                            'linkOptions' => ['class' => 'mdi-action-account-circle'],
                            'items' => [
                                ['label' => 'Edit Profile', 'url' => ['/register/update', 'id' => Yii::$app->session->get('sess_customer_no')]],
                                ['label' => 'History', 'url' => '#'],
                                ['label' => 'Logout', 
                                            'url' => ['/site/logout'],
                                            'linkOptions' => ['data-method' => 'post']],
                        ],
                    ],
                    // ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    //     'url' => ['/site/logout'],
                    //     'linkOptions' => ['data-method' => 'post']],
                ],
            ]);
            NavBar::end();
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>

<?php $this->endBody() ?>
<script>
$(function() {
    $.material.init();
});
</script>
</body>
</html>
<?php $this->endPage() ?>
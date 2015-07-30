<?php  
namespace app\themes\resrve;
use yii\web\AssetBundle;

class ResrveAsset extends AssetBundle {
    public $sourcePath = '@app/themes/resrve/assets/material-design';
    public $baseUrl = '@web';

    public $css = [
        'css/roboto.css',
        'css/material.css',
        'css/ripples.css',
    ];

    public $js = [
        'js/ripples.js',
        'js/material.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public function init () {
        parent::init();
    }

}
?>
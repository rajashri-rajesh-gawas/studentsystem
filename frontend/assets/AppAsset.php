<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/bootstrap.css',
        'css/chocolat.css',
        'css/style.css',
        'css/bootstrap.min.css',
        'css/fancybox/jquery.fancybox.css',
        'css/jcarousel.css',
        'css/flexslider.css',
        'css/animate.css',
        'css/custom-fonts.css',
        'css/font-awesome.css',
    ];
    public $js = [
        'js/easing.js',
        'js/jquery.chocolat.js',
        'js/jquery.hoverdir.js',
        'js/jquery-1.11.0.min.js',
        'js/menu_jquery.js',
        'js/modernizr.custom.97074.js',
        'js/animate.js',
       
        'js/bootstrap.min.js',
        'js/custom.js',
        'js/jquery.easing.1.3.js',
        'js/jquery.fancybox.pack.js',
        'js/jquery.fancybox-media.js',
        'js/jquery.flexslider.js',
        
        'js/validate.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       'css/bootstrap.min.css',
       'font-awesome/css/font-awesome.css',
      
        'css/plugins/timeline/timeline.css',
    
        'css/plugins/dataTables/dataTables.bootstrap.css',

        'css/sb-admin.css',
        'css/custom.css',
    
        // 'css/font-awesome.css',
        // 'css/font-awesome.min.css',
    ];
    public $js = [
        //'js/jquery-1.10.2.js',
         'js/bootstrap.js',
        // 'js/demo/flot-demo.js',
        // 'js/demo/morris-demo.js',
         'js/plugins/flot/excanvas.min.js',
         'js/plugins/flot/jquery.flot.js',
         'js/plugins/flot/jquery.flot.pie.js',
         'js/plugins/flot/jquery.flot.resize.js',
         'js/plugins/flot/jquery.flot.tooltip.min.js',
         'js/plugins/metisMenu/jquery.metisMenu.js',
         'js/plugins/morris/morris.js',
         'js/plugins/morris/raphael-2.1.0.min.js',
         'js/sb-admin.js',
        // 'js/demo/dashboard-demo.js',

        //'js/bootstrap.min.js',
        // 'js/jquery-1.10.2.js',
        // 'js/jquery-3.2.1.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}

<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
   // public $basePath = '@webroot';
    //public $baseUrl = '@web';
    public $sourcePath = '@bower/freelancer/';
    public $css = [
        'vendor/bootstrap/css/bootstrap.min.css',
        'vvendor/fontawesome-free/css/all.min.css',
        'https://fonts.googleapis.com/css?family=Montserrat:400,700',
        'https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic',
        'vendor/magnific-popup/magnific-popup.css',
        'css/freelancer.min.css',
    ];
    public $js = [
            'vendor/jquery/jquery.min.js',
            'vendor/bootstrap/js/bootstrap.bundle.min.js',
            'vendor/jquery-easing/jquery.easing.min.js',
            'vendor/magnific-popup/jquery.magnific-popup.min.js',
            'js/jqBootstrapValidation.js',
            'js/contact_me.js',
            'js/freelancer.min.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

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
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'template/lib/animate/animate.min.css',
        'template/lib/owlcarousel/assets/owl.carousel.min.css',
        'template/css/bootstrap.min.css',
        'template/css/style.css',
        'template/lib/animate/animate.css',
        'template/css/style.css',
    ];
    public $js = [
        'template/lib/wow/wow.min.js',
        'template/lib/easing/easing.min.js',
        'template/lib/waypoints/waypoints.min.js',
        'template/lib/counterup/counterup.min.js',
        'template/lib/owlcarousel/owl.carousel.min.js',
        'template/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}

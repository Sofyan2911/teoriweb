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

        'template/https://fonts.googleapis.com',
        'template/https://fonts.gstatic.com',
        'template/https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap',
        'template/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css',
        'template/https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css',
        'template/lib/animate/animate.min.css',
        'template/lib/owlcarousel/assets/owl.carousel.min.css',
        'template/css/bootstrap.min.css',
        'template/css/style.css'

      
    ];
    public $js = [
        'template/https://code.jquery.com/jquery-3.4.1.min.js',
        'template/https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js',
        'template/lib/wow/wow.min.js',
        'lib/easing/easing.min.js',
        'lib/waypoints/waypoints.min.js',
        'lib/counterup/counterup.min.js',
        'lib/owlcarousel/owl.carousel.min.js',
       

       
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}

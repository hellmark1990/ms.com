<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.css',
        'css/camera.css',
        'css/responsive.css',
        'css/style.css',
    ];
    public $js = [
        'js/camera.js',
        'js/jquery.easing.1.3.js',
        'js/jquery.js',
        'js/jquery.mobile.customized.min.js',
        'js/jquery.ui.totop.js',
        'js/superfish.js',
        'js/bootstrap.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

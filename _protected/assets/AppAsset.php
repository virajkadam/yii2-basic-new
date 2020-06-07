<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;
use Yii;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@themes';

    public $css = [
        'css/bootstrap.min.css',
        'css/icons.min.css',
        'css/app.min.css'
    ];

    public $js = [
        // 'libs/jquery/jquery.min.js',
        'libs/bootstrap/js/bootstrap.bundle.min.js',
        'libs/metismenu/metisMenu.min.js',
        'libs/simplebar/simplebar.min.js',
        'libs/node-waves/waves.min.js',
        'js/app.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}

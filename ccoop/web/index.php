<?php
/**
 * Created by PhpStorm.
 * User: liangjun
 * Date: 2017/6/26
 * Time: 17:06
 */
defined('YII_DEBUG') or define('YII_DEBUG',true);
defined('YII_ENV') or define('YII_ENV','dev');

require (__DIR__.'/../../vendor/autoload.php');
require (__DIR__.'/../../vendor/yiisoft/yii2/yii.php');
require (__DIR__.'/../../common/config/bootstrap.php');//引用别名配置

$config = yii\helpers\ArrayHelper::merge(
    require (__DIR__.'/../../common/config/main.php'),
    require (__DIR__.'/../../common/config/main-local.php')
);

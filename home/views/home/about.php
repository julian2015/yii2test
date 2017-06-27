<?php
/**
 * Created by PhpStorm.
 * User: liangjun
 * Date: 2017/6/27
 * Time: 10:04
 */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <code><?= $myInterestingData ?></code>
</div>
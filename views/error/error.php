<?php
/**
 * Created by PhpStorm.
 * User: M
 * Date: 17/5/17
 * Time: 下午3:04
 */
use yii\helpers\Html;
$this->title = $message;
?>
<div class="row">
    <div class="site-error">
        <h1><?= nl2br(Html::encode($message)) ?></h1>
        <div class="error-search center-block">
            <form action="/search" method="get">
                <div class="input-group">
                    <input class="form-control" name="q" placeholder="全站搜索" type="text">
                <span class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
                </span>
                </div>
            </form>
        </div>
    </div>
</div>
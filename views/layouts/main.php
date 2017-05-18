<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\bootstrap\Modal;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <!-- 头部 -->
    <?php
    NavBar::begin([
        'brandLabel' => 'My Blog',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-default navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            ['label' => '首页', 'url' => '/', 'active' => Yii::$app->defaultRoute ==  Yii::$app->controller->id . '/' . Yii::$app->controller->action->id],
            ['label' => '文章', 'url' => ['article/index']],
            ['label' => '相册', 'url' => ['photo-album/index']],
            ['label' => '音乐', 'url' => ['music/index']],
            ['label' => '视频', 'url' => ['video/index']],
        ]
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            '<li>'
            . Html::beginForm(['index/search'], 'post', ['class' => 'navbar-form navbar-left'])
            . '<div class="input-group">'
            . Html::textInput('search', null, ['class' => 'form-control', 'placeholder' => '搜索'])
            . '<span class="input-group-btn">'
            . Html::submitButton('<span class="glyphicon glyphicon-search"></span>', ['class' => 'btn btn-default'])
            . '</span></div>'
            . Html::endForm()
            . '</li>',
            ['label' => '注册', 'url' => 'javascript:;', 'visible' => Yii::$app->user->isGuest],
            [
                'label' => '登录',
                'url' => 'javascript:;',
                'linkOptions' => [
                    'data-title' => '登录',
                    'data-url' => '/user/login',
                    'data-toggle' => 'modal',
                    'data-target' => '#page-modal',
                    'class' => 'page-modal',
                ],
                'visible' => Yii::$app->user->isGuest],
            [
                'label' => '李四',
                'items' => [
                    ['label' => '修改密码', 'url' => ['user/change-password']],
                    '<li class="divider"></li>',
                    ['label' => '退出', 'url' => ['user/logout'], 'linkOptions' => ['data-method' => 'post']],
                ],
                'visible' => !Yii::$app->user->isGuest
            ]
        ]
    ]);
    NavBar::end();
    ?>

    <!-- 内容 -->
    <div class="container">
        <?= Breadcrumbs::widget([
            'options' => ['class' => 'breadcrumb', 'style' => 'background-color:#fff'],
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<!--  尾部 -->
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        <p class="pull-right">
            技术支持
            <a href="http://www.yiiframework.com/" rel="external">小马哥</a>
        </p>
    </div>
</footer>
<!--  模态框 -->
<?php
Modal::begin([
    'id' => 'page-modal',
]);
$js = <<<JS
$(".page-modal").click(function(){ 
    var url = $(this).attr('data-url');
    var title = $(this).attr('data-title');
    $($(this).attr('data-target')+" .modal-title").text(title);
    $($(this).attr('data-target')).modal("show")
         .find(".modal-content")
         .load(url); 
    return false;
}); 
JS;
$this->registerJs($js);

Modal::end();
?>
<!-- 返回顶部 -->
<?= \bluezed\scrollTop\ScrollTop::widget() ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
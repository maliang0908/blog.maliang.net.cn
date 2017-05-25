<?php
/**
 * Created by PhpStorm.
 * User: M
 * Date: 17/5/12
 * Time: 下午2:58
 */
/* @var $blogRoll \app\models\BlogRoll */
/* @var $userDynamic \app\models\UserDynamic */
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Carousel;
use app\models\UserDynamic;

$this->registerCssFile('/css/nanoscroller.css');
$this->registerJsFile('/js/jquery.nanoscroller.min.js', ['depends' => \app\assets\AppAsset::className()]);
?>
<!-- 轮播start -->
<div class="row hidden-xs flash-view">
    <div class="col-xs-12">
        <?= Carousel::widget([
            'items' => [
                [
                    'content' => '<img src="/images/p2.jpg" style="height: 324px;width: 100%">',
                    'caption' => '<h4>小马哥</h4><p>This is the caption text</p>',
                ],[
                    'content' => '<img src="/images/p3.jpg" style="height: 324px;width: 100%">',
                    'caption' => '<h4>This is title</h4><p>你说今天天气怎么样？</p>',
                ],
                [
                    'content' => '<img src="/images/p4.jpg" style="height: 324px;width: 100%">',
                    'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
                    //'options' => [...],       //配置对应的样式
                ],
            ]
        ]);?>
    </div>
</div>
<!-- 轮播end -->
<div class="row">
    <div class="col-xs-3 hidden-xs">
        <div class="panel panel-default" style="background: url(http://www.yiichina.com/images/user-bg.jpg) #fff; background-size:100% 120px; background-repeat:no-repeat;">
            <div class="panel-body">
                <div class="user">
                    <img class="avatar" src="/images/a4.jpg" alt="wkf928592">
                    <h1>Ma Liang</h1>
                    <ul class="stat">
                        <li>文章<h3>1120</h3></li>
                        <li>访客<h3>123</h3></li>
                        <li>用户<h3>1270</h3></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- 友情链接start -->
        <div class="panel panel-default hidden-xs">
            <div class="panel-heading">
                <h2 class="panel-title">
                    <i class="fa fa-link"></i>
                    友情链接
                </h2>
            </div>
            <div class="panel-body">
                <ul class="post-list">
                    <?php foreach ($blogRoll as $val){ ?>
                    <li>
                        <i class="fa fa-angle-double-right"></i>
                        <a href="<?= Html::encode($val->link); ?>" target="_blank"><?= Html::encode($val->title); ?></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <!-- 友情链接end -->
        <!-- 打赏start -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">
                    <i class="fa fa-retweet"></i>
                    打赏
                </h2>
            </div>
            <div class="panel-body">
                <a href="javascript:;" title="扫码支付">
                    <img class="fund" src="<?= Html::encode(Yii::$app->params['payQrCode']); ?>" alt="" >
                </a>
            </div>
        </div>
        <!-- 打赏end -->
    </div>
    <!--  动态start -->
    <div class="col-xs-9">
        <div class="panel panel-default  main-content">
            <div class="panel-body">
                <ul id="w1" class="media-list">
                    <?php foreach ($userDynamic as $val){ ?>
                    <li class="media">
                        <div class="media-left">
                            <a href="javascript:;" rel="author">
                                <img class="media-object" src="<?= Html::encode($val->user->avatar); ?>" alt="akingsky">
                            </a>
                        </div>
                        <div class="media-body">
                            <div class="media-heading">
                                <a href="javascript:;" rel="author"><?= Html::encode($val->user->nickname); ?></a>
                                发布了<?= Html::encode($val->categoryArray[$val->category]);?>
                            </div>
                            <?php $model = $val->category == UserDynamic::CATEGORY_ARTICLE ? $val->article : $val->talk; ?>
                            <div class="media-content">
                                <a href="<?= Url::toRoute($val->category == UserDynamic::CATEGORY_ARTICLE ? ['article/detail', 'id' => $val->id] : ['talk/detail', 'id' => $val->id]); ?>" target="_blank"><?= Html::encode($val->category == UserDynamic::CATEGORY_ARTICLE ? $val->article->title : $val->talk->content); ?></a>
                            </div>
                            <div class="media-action">
                                <span><?= date('Y-m-d H:i:s', $val->created_at); ?></span>
                            <span class="pull-right">
                            浏览(<?= $model->browse_num; ?>) |
                            评论(<?= $model->comment_num; ?>)
                            </span>
                            </div>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <!--  动态end-->
    <!-- 友情链接start -->
    <div class="col-xs-3 visible-xs-block">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">
                    <i class="fa fa-file-word-o"></i>
                    打赏
                </h2>
            </div>
            <div class="panel-body">
                <a href="javascript:;" title="扫码支付">
                    <img class="fund" src="<?= Html::encode(Yii::$app->params['payQrCode']); ?>" alt="" >
                </a>
            </div>
        </div>
    </div>
    <!-- 友情链接end -->
</div>
<?php
$js = <<<EOD
if($(window).width() >= 768){
    if($(window).height() + 500 < $('.main-content .panel-body').height()) {
        $('.main-content ul').addClass('nano-content').wrap('<div class="nano"></div>');
        $('.main-content .nano').height($(window).height() + 500).nanoScroller();
    } 
}
EOD;
$this->registerJs($js);
?>
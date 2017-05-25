<?php
/**
 * Created by PhpStorm.
 * User: M
 * Date: 17/5/12
 * Time: 下午3:12
 */
/* @var $article \app\models\Article */
/* @var $userDynamic \app\models\UserDynamic */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\helpers\Markdown;
$this->title = $article->title;
$this->params['breadcrumbs'] = [
    ['label' => '文章', 'url' => ['article/index']],
    $article->title
];
?>
<div  id='wx_pic'  style="margin:0 auto;display:none;">
    <img src="/images/pic300.jpg">
</div>
<div class="row">
    <div class="col-sm-9">
        <div class="panel panel-default">
            <div class="panel-body">
                <!-- 标题 -->
                <div class="page-header">
                    <h1>
                        <?= Html::encode($article->title); ?>
                        <small>[ <?= $article->categoryArray[$article->category]; ?> ]</small>
                    </h1>
                </div>
                <div class="action">
                    <!-- 作者 -->
                    <span>
                        <a href="/user/42068">
                            <i class="fa fa-user"></i>
                            <?= Html::encode($userDynamic->user->nickname); ?>
                        </a>
                    </span>
                    <!-- 时间 -->
                    <span>
                        <i class="fa fa-clock-o"></i>
                        <?= date('Y-m-d H:i:s', $userDynamic->created_at); ?>
                    </span>
                    <!-- 浏览次数 -->
                    <span>
                        <i class="fa fa-eye"></i>
                        <?= $article->browse_num; ?>次浏览
                    </span>
                    <!-- 评论次数 -->
                    <span>
                        <a href="#comments">
                            <i class="fa fa-comments-o"></i>
                            <?= $article->comment_num; ?>条评论
                        </a>
                    </span>
                    <!-- 收藏次数 -->
                    <span>
                        <a class="favorite" href="javascript:void(0);" title="" data-type="post" data-id="1265" data-toggle="tooltip" data-original-title="收藏">
                            <i class="fa fa-star-o"></i>
                            <?= $article->collect_num; ?>
                        </a>
                    </span>
                    <span class="pull-right">
                        <!-- 顶次数 -->
                        <a class="vote up" href="javascript:void(0);" title="" data-type="post" data-id="1265" data-toggle="tooltip" data-original-title="顶">
                            <i class="fa fa-thumbs-o-up"></i>
                            <?= $article->praise_num; ?>
                        </a>
                        <!-- 踩次数 -->
                        <a class="vote down" href="javascript:void(0);" title="" data-type="post" data-id="1265" data-toggle="tooltip" data-original-title="踩">
                            <i class="fa fa-thumbs-o-down"></i>
                            <?= $article->tread_num; ?>
                        </a>
                    </span>
                </div>
                <!-- 文章内容 -->
                <?= Markdown::process($article->content, 'gfm-comment'); ?>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <div id="comments">
                    <div class="page-header">
                        <?= Html::tag('h2','共 <em>2</em> 条评论'); ?>
                        <?=
                        Nav::widget([
                            'options' => ['class' => 'nav nav-tabs nav-sub'],
                            'items' => [
                                ['label' => '默认排序' ,'url' => '/sort', 'link', 'active' => true],
                                ['label' => '最后评论' ,'url' => '/desc', 'active' => false],
                            ]
                        ]);
                        ?>
                    </div>
                    <ul id="w1" class="media-list">
                        <li class="media" data-key="5512">
                            <div class="media-left">
                                <a href="/user/38329" rel="author">
                                    <img class="media-object" src="/images/a2.jpg" alt="wushshsha">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="/user/38329" rel="author">wushshsha</a>
                                    评论于 2017-05-12 10:01
                                    <span class="pull-right">
                                    <a class="report" data-type="comment" data-id="5512" href="javascript:void(0);">
                                        <i class="fa fa-flag-checkered"></i>
                                        举报
                                    </a>
                                    </span>
                                </div>
                                <div class="media-content">
                                    <p>mark，以后会用到</p>
                                    <div class="hint">
                                        共
                                        <em>2</em>
                                        条回复
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="/user/32493" rel="author">
                                                <img class="media-object" src="/images/a7.jpg" alt="iceluo">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="media-heading">
                                                <a href="/user/32493" rel="author">iceluo</a>
                                                评论于 2015-08-24 14:02
                                            <span class="pull-right">
                                            <a class="reply" href="javascript:void(0);">
                                                <i class="fa fa-reply"></i>
                                                回复
                                            </a>
                                            </span>
                                            </div>
                                            <div class="media-content">
                                                <p>foreach</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="/user/32674" rel="author">
                                                <img class="media-object" src="/images/a8.jpg" alt="晦涩de咚">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <div class="media-heading">
                                                <a href="/user/32674" rel="author" data-original-title="" title="">晦涩de咚</a>
                                                评论于 2015-11-26 10:12
                                            <span class="pull-right">
                                            <a class="reply" href="javascript:void(0);">
                                                <i class="fa fa-reply"></i>
                                                回复
                                            </a>
                                            </span>
                                            </div>
                                            <div class="media-content">
                                                <p>
                                                    <a href="/user/32493" rel="author" data-original-title="" title="">@iceluo</a>
                                                    确实不错
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-action">
                                    <a class="reply" href="javascript:void(0);">
                                        <i class="fa fa-reply"></i>
                                        回复
                                    </a>
                                    <span class="pull-right">
                                        <a class="vote up" href="javascript:void(0);" title="" data-type="comment" data-id="5512" data-toggle="tooltip" data-original-title="顶">
                                            <i class="fa fa-thumbs-o-up"></i>
                                            0
                                        </a>
                                        <a class="vote down" href="javascript:void(0);" title="" data-type="comment" data-id="5512" data-toggle="tooltip" data-original-title="踩">
                                            <i class="fa fa-thumbs-o-down"></i>
                                            0
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li class="media" data-key="5516">
                            <div class="media-left">
                                <a href="/user/28426" rel="author">
                                    <img class="media-object" src="/images/a3.jpg" alt="qc100f">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="/user/28426" rel="author">qc100f</a>
                                    评论于 2017-05-12 17:08
                                    <span class="pull-right">
                                    <a class="report" data-type="comment" data-id="5516" href="javascript:void(0);">
                                        <i class="fa fa-flag-checkered"></i>
                                        举报
                                    </a>
                                    </span>
                                </div>
                                <div class="media-content">
                                    <p>挺好，以后会用到</p>
                                </div>
                                <div class="media-action">
                                    <a class="reply" href="javascript:void(0);">
                                        <i class="fa fa-reply"></i>
                                        回复
                                    </a>
                                    <span class="pull-right">
                                        <a class="vote up" href="javascript:void(0);" title="" data-type="comment" data-id="5516" data-toggle="tooltip" data-original-title="顶">
                                            <i class="fa fa-thumbs-o-up"></i>
                                            0
                                        </a>
                                        <a class="vote down" href="javascript:void(0);" title="" data-type="comment" data-id="5516" data-toggle="tooltip" data-original-title="踩">
                                            <i class="fa fa-thumbs-o-down"></i>
                                            0
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <!-- 评论区 -->
                <div id="comment">
                    <div class="page-header">
                        <h2>发表评论</h2>
                    </div>
                    <div class="well danger">
                        您需要登录后才可以评论。
                        <a href="/login">登录</a>
                        |
                        <a href="/signup">立即注册</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->render('right-content'); ?>
</div>
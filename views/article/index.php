<?php
/**
 * Created by PhpStorm.
 * User: M
 * Date: 17/5/12
 * Time: 下午3:12
 */
/* @var  $sort */
/* @var  $article \app\models\UserDynamic */
/* @var  $dataProvider \yii\data\ActiveDataProvider */
use yii\helpers\Url;
use yii\helpers\Html;
use app\models\Article;
use yii\widgets\LinkPager;

$this->params['breadcrumbs'] = ['文章'];
?>
<div class="row">
    <div class="col-sm-9">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="page-header" style="padding-bottom:7px ">
                    <h1>文章</h1>
                    <ul id="w0" class="nav nav-tabs nav-main">
                        <?php foreach (Article::$sortArray as $key => $val) { ?>
                        <li <?= $sort == $key ? 'class="active"' : ''; ?>>
                            <a href="<?= Url::toRoute(['article/index', 'sort' => $key]); ?>"><?= $val; ?></a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <ul id="w1" class="media-list">
                    <?php foreach ($article as $val){ ?>
                    <li class="media" data-key="<?= $val->id; ?>">
                        <div class="media-left">
                            <a href="javascript:;" rel="author">
                                <img class="media-object" src="<?= Html::encode($val->user->avatar); ?>" alt="akingsky">
                            </a>
                        </div>
                        <div class="media-body">
                            <h2 class="media-heading">
                                <i class="fa fa-file-text-o fa-fw"></i>
                                <a href="<?= Url::toRoute(['article/detail', 'id' => $val->id]); ?>" target="_blank"><?= Html::encode($val->article->title); ?></a>
                                <small>
                                    <i class="fa fa-thumbs-o-up"></i>
                                    <?= $val->article->praise_num; ?>
                                </small>
                            </h2>
                            <div class="media-action">
                                <a href="javascript:;" rel="author"><?= Html::encode($val->user->nickname); ?></a>
                                发布于 <?= date('Y-m-d', $val->created_at); ?>
                                <span class="dot">•</span>
                                <?= $val->article->collect_num; ?> 人收藏
                                <span class="dot">•</span>
                                <?= $val->article->categoryArray[$val->article->category]; ?>
                            </div>
                        </div>
                        <div class="media-right">
                            <a class="btn btn-default" href="javascript:;">
                                <h4>浏览</h4>
                                <?= $val->article->browse_num; ?>
                            </a>
                        </div>
                        <div class="media-right">
                            <a class="btn btn-default" href="javascript:;">
                                <h4>评论</h4>
                                <?= $val->article->comment_num; ?>
                            </a>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
                <?= LinkPager::widget(['pagination' => $dataProvider->pagination]); ?>
            </div>
        </div>
    </div>
    <?= $this->render('right-content'); ?>
</div>
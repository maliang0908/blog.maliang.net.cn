<?php
/**
 * Created by PhpStorm.
 * User: M
 * Date: 17/5/22
 * Time: 上午9:28
 */
/* @var $article \app\models\Article*/
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="page-header">
                    <?php $form = ActiveForm::begin(); ?>
                    <?= $form->field($article, 'title'); ?>
                    <?= $form->field($article, 'category')->dropDownList($article->categoryArray, ['prompt' => '请选择']); ?>
                    <?= $form->field($article, 'content')->widget('yidashi\markdown\Markdown', ['useUploadImage' => true]); ?>
                    <?= Html::submitButton('提交', ['class' => 'btn btn-default']); ?>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
/**
 * Created by PhpStorm.
 * User: M
 * Date: 17/5/18
 * Time: 下午2:24
 */
/* @var $user \app\models\User */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<?php $form = ActiveForm::begin([
    'layout' => 'horizontal',
    'id' => 'login-form',
    'enableAjaxValidation' => true,
]); ?>
<div class="modal-header">
    <?= Html::button('×',['class' => 'close', 'data-dismiss' => "modal" ,'aria-hidden' => 'true']); ?>
    <?= Html::tag('h4', '登录', ['class' => 'modal-title'])?>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-lg-12">
            <?= $form->field($user, 'username'); ?>
            <?= $form->field($user, 'password'); ?>
        </div>
    </div>
</div>
<div class="modal-footer">
    <?= Html::submitButton('登录', ['class' => 'btn btn-default']); ?>
</div>
<?php ActiveForm::end(); ?>
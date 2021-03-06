<?php
use yii\helpers\Html;
use app\config\widgets\ActiveForm;
/* @var $this  \yii\web\View */
/* @var $form  \app\config\widgets\ActiveForm */
/* @var $model \app\modules\users\models\VML\UsersGroupsVML */
?>
<div class="users-groups-form">
    <div class="box">
        <?php $form = ActiveForm::begin() ?>
        <div class="box-header"><?= Yii::t('app', $model->id ? 'Update' : 'Create') ?></div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="box-footer">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-sm btn-success']) ?>
        </div>
        <?php ActiveForm::end() ?>
    </div>
</div>
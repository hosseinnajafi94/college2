<?php
/* @var $this  \yii\web\View */
/* @var $model \app\modules\terms\models\VML\TermsStatusesListVML */
$this->params['breadcrumbs'][] = ['label' => Yii::t('terms', 'Terms Statuses Lists'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="terms-statuses-list-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
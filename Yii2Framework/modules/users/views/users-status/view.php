<?php
use yii\helpers\Html;
use app\config\widgets\DetailView;
/* @var $this  \yii\web\View */
/* @var $model \app\modules\users\models\DAL\UsersStatus */
$this->params['breadcrumbs'][] = ['label' => Yii::t('users', 'Users Statuses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->title;
?>
<div class="users-status-view">
    <div class="box">
        <div class="box-header"><?= $model->title ?></div>
        <p>
            <?= Html::a(Yii::t('app', 'Create'), ['create'], ['class' => 'btn btn-sm btn-success']) ?>
            <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-sm btn-primary']) ?>
            <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], ['class' => 'btn btn-sm btn-danger', 'data' => ['confirm' => Yii::t('app', 'Are you sure you want to delete this item?'), 'method' => 'post']]) ?>
        </p>
        <div class="table-responsive">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'title',
                ],
            ]) ?>
        </div>
    </div>
</div>
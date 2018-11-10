<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Market */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Markets'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="market-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'market_name',
            'street',
            'county',
            'zip',
            'website',
            'facebook',
            'twitter',
            'youtube',
            'othermedia',
            'season1date',
            'season1time',
            'season2date',
            'season2time',
            'season3date',
            'season3time',
            'season4date',
            'season4time',
            'x',
            'y',
            'location',
            'accepts_credit',
            'accepts_wic',
            'accepts_wiccash',
            'accepts_sfmnp',
            'accepts_snap',
            'updatetime',
            'updatetime_unparsed',
            'city_id',
        ],
    ]) ?>

</div>

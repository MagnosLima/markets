<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MarketSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Markets');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="market-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Market'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'market_name',
            'street',
            'county',
            'zip',
            //'website',
            //'facebook',
            //'twitter',
            //'youtube',
            //'othermedia',
            //'season1date',
            //'season1time',
            //'season2date',
            //'season2time',
            //'season3date',
            //'season3time',
            //'season4date',
            //'season4time',
            //'x',
            //'y',
            //'location',
            //'accepts_credit',
            //'accepts_wic',
            //'accepts_wiccash',
            //'accepts_sfmnp',
            //'accepts_snap',
            //'updatetime',
            //'updatetime_unparsed',
            //'city_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

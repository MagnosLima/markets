<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MarketSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="market-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'market_name') ?>

    <?= $form->field($model, 'street') ?>

    <?= $form->field($model, 'county') ?>

    <?= $form->field($model, 'zip') ?>

    <?php // echo $form->field($model, 'website') ?>

    <?php // echo $form->field($model, 'facebook') ?>

    <?php // echo $form->field($model, 'twitter') ?>

    <?php // echo $form->field($model, 'youtube') ?>

    <?php // echo $form->field($model, 'othermedia') ?>

    <?php // echo $form->field($model, 'season1date') ?>

    <?php // echo $form->field($model, 'season1time') ?>

    <?php // echo $form->field($model, 'season2date') ?>

    <?php // echo $form->field($model, 'season2time') ?>

    <?php // echo $form->field($model, 'season3date') ?>

    <?php // echo $form->field($model, 'season3time') ?>

    <?php // echo $form->field($model, 'season4date') ?>

    <?php // echo $form->field($model, 'season4time') ?>

    <?php // echo $form->field($model, 'x') ?>

    <?php // echo $form->field($model, 'y') ?>

    <?php // echo $form->field($model, 'location') ?>

    <?php // echo $form->field($model, 'accepts_credit') ?>

    <?php // echo $form->field($model, 'accepts_wic') ?>

    <?php // echo $form->field($model, 'accepts_wiccash') ?>

    <?php // echo $form->field($model, 'accepts_sfmnp') ?>

    <?php // echo $form->field($model, 'accepts_snap') ?>

    <?php // echo $form->field($model, 'updatetime') ?>

    <?php // echo $form->field($model, 'updatetime_unparsed') ?>

    <?php // echo $form->field($model, 'city_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

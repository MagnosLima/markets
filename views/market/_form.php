<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Market */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="market-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'market_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'street')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'county')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'twitter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'youtube')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'othermedia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'season1date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'season1time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'season2date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'season2time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'season3date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'season3time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'season4date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'season4time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'x')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'y')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'accepts_credit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'accepts_wic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'accepts_wiccash')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'accepts_sfmnp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'accepts_snap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updatetime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updatetime_unparsed')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

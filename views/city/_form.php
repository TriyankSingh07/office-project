<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use app\models\State;
use app\models\Dist;
use yii\helpers\ArrayHelper;
use app\models\City;

/** @var yii\web\View $this */
/** @var app\models\city $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="city-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'state_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(State::find()->all(), 'id', 'state_name'),
        [
            'prompt' => 'Select State',
            'class' => 'form-control', // Ensures consistency with other input fields
            'onchange' => '
            $.get("' . Yii::$app->urlManager->createUrl('site/getdist?state_id=') . '"+$(this).val(), function(data) {
                $("select#dist_name").html(data);
            })
        '
        ]
    ) ?>

    <?= $form->field($model, 'dist_id', [
        'inputOptions' => ['id' => 'dist_name', 'class' => 'form-control'] // Adding Bootstrap class
    ])->dropDownList([
        'prompt' => 'Select District'
    ]); ?>




    <?= $form->field($model, 'city_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList(
        ['T' => 'T', 'F' => 'F']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
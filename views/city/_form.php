<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use app\models\State;
use app\models\Dist;


/** @var yii\web\View $this */
/** @var app\models\city $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="city-form">

    <?php $form = ActiveForm::begin(); ?>

   

     <?= $form->field($model,'state_name')->dropDownList(
        \yii\helpers\ArrayHelper::map(state::find()->all(),'id','state_name')
    ) ?>
    
    <?= $form->field($model,'dist_name')->dropDownList(
        \yii\helpers\ArrayHelper::map(dist::find()->all(),'id','dist_name')
    ) ?>

    <?= $form->field($model, 'city_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList(
        ['T'=>'T', 'F'=>'F']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

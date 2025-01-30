<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use app\models\State;
use app\models\Dist;

/** @var yii\web\View $this */
/** @var app\models\Dist $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="dist-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model,'state_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(state::find()->all(),'id','state_name')
    ) ?>

    <?= $form->field($model, 'dist_name')->textInput(['maxlength' => true]) ?>

      <?= $form->field($model, 'status')->dropDownList(
        ['T'=>'T', 'F'=>'F']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

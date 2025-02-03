<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Department;
use app\models\State;
use app\models\city;
use app\models\Dist;

/** @var yii\web\View $this */
/** @var app\models\Employee $model */
/** @var yii\widgets\ActiveForm $form */

?>


<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dept_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(Department::find()->all(), 'id', 'dept_name'),
        ['prompt' => 'Select Department']
    ) ?>

    <?= $form->field($model, 'gender')->dropDownList(
        ['M' => 'Male', 'F' => 'Female'],
        ['prompt' => 'Select Gender']
    ) ?>

    <?= $form->field($model, 'state_name')->dropDownList(
        \yii\helpers\ArrayHelper::map(state::find()->all(), 'id', 'state_name', 'status'),
        ['prompt' => 'Select State']
    ) ?>

    <?= $form->field($model, 'dist_name')->dropDownList(
        \yii\helpers\ArrayHelper::map(dist::find()->all(), 'id', 'name', 'state_id', 'status'),
        ['prompt' => 'Select District']
    ) ?>


    <?= $form->field($model, 'city_name')->dropDownList(
        \yii\helpers\ArrayHelper::map(city::find()->all(), 'id', 'city_name', 'state_id', 'dist_id', 'status'),
        ['prompt' => 'Select City Name']
    ) ?>
   
     <!-- Another -->

    


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>
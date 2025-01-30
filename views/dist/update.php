<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Dist $model */

$this->title = 'Update Dist: ' . $model->dist_name;
$this->params['breadcrumbs'][] = ['label' => 'Dists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dist_name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dist-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

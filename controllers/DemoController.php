<?php

namespace app\controllers;
use yii;

class DemoController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    
public function actionDemo_home()
{
    $model = new \app\models\Emp();

    if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
            // form inputs are valid, do something here
            return;
        }
    }

    return $this->render('demo_home', [
        'model' => $model,
    ]);

}
}
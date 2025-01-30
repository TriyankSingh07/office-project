<?php

namespace app\controllers;

use yii\web\Controller;
use Yii;

class FirstController extends Controller{

    function actionTest(){
       $data=Yii::$app->db->createCommand("select * from emp")->queryAll();
      
       echo "<pre>";
       print_r($data);
       echo "</pre>";

      
    }
}

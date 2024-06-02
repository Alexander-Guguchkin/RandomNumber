<?php

namespace app\controllers;

use app\models\Number;
use yii\rest\ActiveController;
use Yii;
use \yii\web\Response;

class NumberController extends ActiveController
{
    public $modelClass = 'app\models\Number';
    public function actionGenerate()
    {
        $model = new Number();
        $model->value = mt_rand(1, 1000);
        $model->save();
    }
    public function actionRetrieve($id){
        $model = Number::findOne($id);
        $response = Yii::$app->response;
        $response->format = Response::FORMAT_JSON;
        $response->data = ['message'=> $model];
    }
}

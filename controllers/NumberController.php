<?php

namespace app\controllers;

use app\models\Number;
use yii\rest\ActiveController;

class NumberController extends ActiveController
{
    public $modelClass = 'app\models\Number';
    public function actionGenerate()
    {
        $model = new Number();
        $model->id = uniqid();
        $model->value = mt_rand(1, 1000);
        $model->save();
    }
    public function actionRetrieve($id){
        $model = Number::find($id);
        return $this->render('index', ['model' => $model]);
    }
}

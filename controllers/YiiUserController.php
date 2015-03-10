<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\YiiUser;

class YiiUserController extends Controller
{
    public function actionIndex()
    {
        $models = YiiUser::find()->all();

        return $this->render('index', ['models'=>$models]);
    }
}
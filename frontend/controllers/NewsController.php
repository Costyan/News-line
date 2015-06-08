<?php
namespace frontend\controllers;

use YII;
use yii\web\Controller;
use frontend\models\News;

class NewsController extends Controller
{
    public function actionIndex()
    {
        $query= News::find()->all();
        return $this->render('index', ['news' => $query]);
    }
            
}


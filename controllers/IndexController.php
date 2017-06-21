<?php

namespace app\controllers;


use Yii;
use yii\web\Controller;
use app\models\Index;
use yii\web\HttpException;


class IndexController extends Controller
{
    public $layout = 'index';

    public function actionIndex()
    {
        $model = Index::find()->select('id, title, link')->orderBy('id ASC')->all();
        return $this->render('index', [
              'model' => $model,
        ]);

    }


    public function actionSend()
    {


        return $this->render('send'

        );

    }

    public function actionView()
    {




        $id = Yii::$app->request->get('id');

        $model = Index::findOne($id);
        if(empty($model)) throw new HttpException(404, 'Нет такой страницы');
        $this->layout = "main";//Шаблон для этого  экшена
        return $this->render('view',[
            'model' => $model,
        ]);
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: sashapc
 * Date: 21.06.2017
 * Time: 13:20
 */

namespace app\controllers;
use yii\web\Controller;


class InternalController extends Controller
{
    public $layout = 'internal';

    public  function actionPolitic()
    {
        return $this->render('politic'

        );

    }

}
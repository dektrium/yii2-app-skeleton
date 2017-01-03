<?php

namespace app\controllers;

use yii\web\Controller;

/**
 * Default site controller.
 */
class SiteController extends Controller
{
    /**
     * @return array
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Homepage
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}

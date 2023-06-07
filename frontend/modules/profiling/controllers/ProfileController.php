<?php

namespace app\modules\profiling\controllers;

class ProfileController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionPrint()
    {
        return $this->render('print');
    }

    public function actionReport()
    {
        return $this->render('report');
    }

    public function actionView()
    {
        return $this->render('view');
    }
    public function actionDelete($id)
    {
        return $this->render('view');
    }

}

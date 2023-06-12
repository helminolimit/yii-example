<?php

namespace app\modules\profiling\controllers;

use common\models\Profil;
use common\models\ProfilAccount;

class ProfileController extends \yii\web\Controller
{
    public $layout = 'crypto';
    public function actionIndex()
    {
        $this->layout = 'crypto';
        $model = Profil::find()
            ->where([
                'profilAgama' =>25
                , 'profilJantina' => 47
                , 'profilWarganegara' => 45
            ])

//            ->where([
//                'profilAgama' => $idAgama
//                , 'profilJantina' => $idJantina
//                , 'profilWarganegara' => $idWarga
//            ])
            ->all();
//        print_r($model);
        return $this->render('index',[
            'model' => $model,
        ]);
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

<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\Html;
use app\models\MyForm;

class FormValidController extends Controller
{
    public function actionHello($massage='111 hello 111')
    {
        return $this->render('hello',
            array('massage' => $massage));
    }


    public function actionForm(){

        $form= new MyForm();
        if($form->load(Yii::$app->request->post()) && $form->validate()){
            $name=Html::encode($form->name);
            $email=Html::encode($form->email);
        }
        else {
            $name='';
            $email='';
        }
        return $this->render('form',
            ['form' => $form,
                'name'=>$name,
                'email'=>$email
            ]
        );
    }
}

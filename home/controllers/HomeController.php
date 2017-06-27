<?php
/**
 * Created by PhpStorm.
 * User: liangjun
 * Date: 2017/6/26
 * Time: 18:05
 */

namespace home\controllers;


use yii\web\Controller;

class HomeController extends Controller
{
    public function actionIndex(){
       return $this->render("index");
    }

    public function actionLogin(){
        var_dump("this is a login page");
        exit(0);
        return $this->render("login");
    }

    public function actionAbout(){
        $someVariable = 'Hello World!';

        return $this->render("about",[
            'myInterestingData' => $someVariable,
        ]);
    }

}
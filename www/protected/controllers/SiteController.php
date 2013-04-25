<?php

class SiteController extends Controller {

    public function actions() {
       
    }

    public function actionIndex() {
        $this->render('index');
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        $this->pageTitle = 'Page not found. Error 404.';

        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest) {
                echo $error['message'];
            } else {
                $this->render('error', $error);
            }

            Error404::push($error);
        }
    }
}
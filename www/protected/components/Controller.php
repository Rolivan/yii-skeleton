<?php

class Controller extends CController {

    public $layout = 'main';

    public function __construct($id, $module = null) {
        parent::__construct($id, $module);
        // If there is a post-request, redirect the application to the provided url of the selected language 
        if (isset($_POST['language'])) {

            $lang = $_POST['language'];
            $MultilangReturnUrl = $_POST[$lang];
            $this->redirect($MultilangReturnUrl);
        }

        // Set the application language if provided by GET, session or cookie
        $language = isset($_GET['language']) ? strip_tags(trim($_GET['language'])) : 'ru';
        //@NOTE: when will be many language check access for language
        //if ($language != Yii::app()->language) $language = Yii::app()->language;
        
        if ($language) {
            Yii::app()->language = $language;
            Yii::app()->user->setState('language', $language);
            $cookie = new CHttpCookie('language', $language);
            $cookie->expire = time() + (60 * 60 * 24 * 365); // (1 year)
            Yii::app()->request->cookies['language'] = $cookie;
        } elseif (Yii::app()->user->hasState('language')) {
            Yii::app()->language = Yii::app()->user->getState('language');
        } elseif (isset(Yii::app()->request->cookies['language'])) {
            Yii::app()->language = Yii::app()->request->cookies['language']->value;
        }
    }

    public function missingAction($actionID) {
        $actionID = 'action' . str_replace("-", "", $actionID);
        $this->$actionID();
    }

    public function notFound() {
        throw new CHttpException(404);
    }

    public function createMultilanguageReturnUrl($lang = 'ru') {
        if (count($_GET) > 0) {
            $arr = $_GET;
            $arr['language'] = $lang;
        } else {
            $arr = array('language' => $lang);
        }

        return $this->createUrl('', $arr);
    }
}
<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

    private $_id;

    public function __construct($username = null, $password = null) {
        parent::__construct($username, $password);
    }

    public function loginAuthenticate($userId) {
        $this->_id = $userId;
        $this->username = $userId;
    }

    public function authenticate() {
        $record = User::model()->findByAttributes(array('login' => $this->username));

        if ($record === null) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } else if ($record->password !== md5($record->salt . $this->password . strrev($record->salt))) {
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        } else {
            $this->_id = $record->id;
            $this->errorCode = self::ERROR_NONE;
        }

        return !$this->errorCode;
    }

    public function getId() {
        return $this->_id;
    }
}
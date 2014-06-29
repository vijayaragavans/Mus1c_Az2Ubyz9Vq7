<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{

	 private $_id;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
  			$user = TblAdmins::model()->findByAttributes(array('user_name'=>$this->username, 'user_password'=>md5($this->password) ));

                if ($user===null) {
                        $this->errorCode=self::ERROR_USERNAME_INVALID;
                } else if ($user->user_password !== md5($this->password) ) { 
                        $this->errorCode=self::ERROR_PASSWORD_INVALID;
                } else { // Okay!
                    $this->errorCode=self::ERROR_NONE;
                    Yii::app()->session['user_id'] = $user->user_id;
                    Yii::app()->session['user_name'] = $user->user_name;
                    Yii::app()->session['user_thumb'] = $user->user_thumb;
                    Yii::app()->session['user_privilages'] = $user->user_privilages;                    
                }
                return $user;
    }

	public function getId()       //  override Id
   {
       return $this->_id;
   }
}
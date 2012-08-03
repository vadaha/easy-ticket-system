<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
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
		$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else {
		    if($this->username == 'admin') {
		        Yii::app()->user->setState('user_nick', 'Hans');
    		    Yii::app()->user->setState('user_id', '50');
    		    Yii::app()->user->setState('user_name', 'Hans He');
    		    Yii::app()->user->setState('user_email', 'hans.he@cifang.hk');
		    } else {
		        Yii::app()->user->setState('user_nick', 'He Jialiang');
    		    Yii::app()->user->setState('user_id', '100');
    		    Yii::app()->user->setState('user_name', 'He Jialiang');
    		    Yii::app()->user->setState('user_email', 'me@hihans.com');
		    }
		    
		    $this->errorCode=self::ERROR_NONE;
		}
			
		return !$this->errorCode;
	}
}
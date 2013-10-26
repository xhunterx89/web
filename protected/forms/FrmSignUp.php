<?php
	class FrmSignUp extends CFormModel
	{
		public $username;
		public $email;
		public $password;
		public $confirm_password;
		public $verify_code;

		public function rules()
		{
			return array(
				array('username,email,password,confirm_password, verify_code','required'),
				array('username,email','unique','className'=>'User'),
				array('username','length','min'=>4,'max'=>20),
				array('email','email'),
				array('password','length','min'=>6, 'max'=>20),
				array('confirm_password','compare','compareAttribute'=>'password'),
				array('verify_code','captcha','allowEmpty'=>!CCaptcha::checkRequirements()),	
				);
		}

		public function addNew()
		{
			$user = new User();
			$user->attributes = $this->attributes;
			return $user->save(false);
		}
	}
?>
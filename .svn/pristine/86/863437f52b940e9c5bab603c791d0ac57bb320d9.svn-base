<?php
	include_once dirname(BASEPATH).'/sparks/phpmail/libraries/class.phpmailer.php';
	Class Phpmail extends PHPMailer{
		public $PHPOption;
		public function __construct(){
			parent::__construct();
			$this->PHPOption = array('email'=>'harryone.test@gmail.com');
		}
		public function sendMail($Option){
			// echo '<pre>';
			// echo $this->PHPOption->getPass();
			// print_r($this->PHPOption);exit;
			$this->IsSMTP();
		    $this->SMTPAuth 	= true;
		    $this->ContentType 	= 'text/html';
		    $this->Host     	= "ssl://smtp.gmail.com";
		    $this->Port     	= 465;
		    $this->Username   	= 'harryone.test@gmail.com'; 
			$this->Password   	= 'harrytest';
			$this->CharSet 		= "UTF-8";
			$this->From 		= 'harryone.test@gmail.com'; 
		    $this->FromName 	= 'Harry Nguyen';
		    $this->Subject  	= (!empty($Option['title']) ? $Option['title'] : 'Wellcom');
		    $this->Body     	= (!empty($Option['content']) ? $Option['content'] : 'Content');
		    $this->AddAddress($Option['email']);
		    /*foreach ($Option['email'] as $email) {
		    	$this->AddAddress($email);	
		    }*/
		    if(!$this->Send()){
		        return false;
		    }else{
		        return true;
		    }
		}

	}
?>
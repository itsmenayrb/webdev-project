<?php

require_once 'Config.php';

class Login extends Config {

	private $username = null;
	private $password = null;
	private $email = null;

	public function __construct($username, $email, $password) {

		$this->username = $username;
		$this->password = $password;
		$this->email = $email;

		$this->conn = new Config();

	}

	public function loginMe() {

		try {

			$stmt = $this->conn->runQuery("SELECT admin_username, admin_email, admin_password
											FROM adminaccount_tbl
												WHERE admin_username=:username
													OR admin_email=:email
														LIMIT 1");

			$stmt->execute(array(':username'=>$this->username, ':email'=>$this->email));
      		$row=$stmt->fetch(PDO::FETCH_ASSOC);

      		if($stmt->rowCount() == 1)
		    {
		        if(password_verify($this->password, $row['admin_password']))
		        {
		          	$_SESSION['admin_username'] = $row['admin_username'];
		          	$_SESSION['admin_email'] = $row['admin_email'];
		          	echo json_encode(array(
	                    'status' => 'success'
	                ));
		        }
		        else
		        {
		        	echo json_encode(array(
	                    'status' => 'failed',
	                    'message' => 'Invalid credentials!'
	                ));
		        }

		    }
		    else
		    {
		    	echo json_encode(array(
                    'status' => 'failed',
                    'message' => 'Invalid credentials!'
                ));
		    }

		} catch (PDOException $e) {

			echo $e->getMessage();

		}

	}


}

?>
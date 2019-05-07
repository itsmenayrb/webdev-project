<?php

require_once 'Config.php';

class Register extends Config {

	private $username = null;
	private $password = null;
	private $email = null;

	public function __construct($username, $email, $password) {

		$this->username = $username;
		$this->password = $password;
		$this->email = $email;

		$this->conn = new Config();

	}

	public function validateCredentials() {

		$error = false;

		try {

              $stmt = $this->conn->runQuery("SELECT admin_username, admin_email
              									FROM adminaccount_tbl
              										WHERE admin_username=:username
              											OR admin_email=:email
              												LIMIT 1");

              $stmt->execute(array(':username'=>$this->username, ':email'=>$this->email));
              $row=$stmt->fetch(PDO::FETCH_ASSOC);

              if($row['admin_username'] == $this->username) {

                  	echo json_encode(array(
		                'status' => 'exist',
		                'message' => 'Username is already taken.'
		            ));
		            $error = true;

              } 

              if ($row['admin_email'] == $this->email) {

                  	echo json_encode(array(
		                'status' => 'exist',
		                'message' => 'Email is already taken.'
		            ));
		            $error = true;

              } 

              if($error == false) {

              	$this->register();
              	echo json_encode(array(
	                'status' => 'success',
	                'message' => 'Registed Successfully!.'
	            ));

              }
       

          } catch (PDOException $e) {
              
              echo $e->getMessage();

          }

	}

	public function register() {

        try {

			$hashed_password = password_hash($this->password, PASSWORD_DEFAULT);
			$stmt = $this->conn->runQuery("INSERT INTO adminaccount_tbl (
										admin_username,
										admin_email,
										admin_password
										) VALUES (
											:username,
											:email,
											:password
										)
									");

			$stmt->bindparam(":username", $this->username);
		    $stmt->bindparam(":email", $this->email);
		    $stmt->bindparam(":password", $hashed_password);

		    $stmt->execute();

		    return $stmt;

        } catch (Exception $e) {

              echo $e->getMessage();

        }
              
              
	}


}

?>
<?php
require_once 'Database.php';

class Config {

	/**
	 * Connector for databases
	 */
	protected $conn;

	/**
	 * Initialize Database
	 */

	public function __construct() {

		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;

	}

	/**
	 * Function for querying
	 *
	 * @param string $sql
	 * @return $stmt
	 */
	public function runQuery($sql) {

		$stmt = $this->conn->prepare($sql);
    	return $stmt;

	}

	/**
	 * Function for Sanitizing data
	 *
	 * @param string $data
	 * @return $data
	 */
	public function checkInput($data) {

		$data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

	}

	/**
	 * Function for redirecting
	 *
	 * @param string $url
	 * @return void
	 */
	public function redirect($url) {

		header("Location: $url");

	}

	/**
	 * Function for redirecting with
	 * 5 seconds interval
	 * @param string $url
	 * @return void
	 */
	public function slow_redirect($url){

		header("refresh:5;url=$url");

	}

}
?>
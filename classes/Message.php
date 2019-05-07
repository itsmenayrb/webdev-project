<?php

require_once 'Config.php';

class Message extends Config {

	private $firstname = null;
	private $lastname = null;
	private $email = null;
	private $message = null;
	private $date = null;

	public function __construct() {


		$this->conn = new Config();

	}

	public function sendMessage($firstname, $lastname, $email, $message, $date) {

		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->email = $email;
		$this->message = $message;
		$this->date = $date;

		try {

			$stmt = $this->conn->runQuery("INSERT INTO messages_tbl (
											message_firstname,
											message_lastname,
											message_email,
											message_content,
											message_date
											) VALUES (
											:firstname,
											:lastname,
											:email,
											:content,
											:messagedate
											)
										");

			$stmt->bindparam(":firstname", $this->firstname);
			$stmt->bindparam(":lastname", $this->lastname);
			$stmt->bindparam(":email", $this->email);
			$stmt->bindparam(":content", $this->message);
			$stmt->bindparam(":messagedate", $this->date);

			$stmt->execute();
			return $stmt;
			
		} catch (PDOException $e) {
			echo $e->getMessage();
		}

	}

	public function displayMessages() {

		try {

			$stmt = $this->conn->runQuery("SELECT * FROM messages_tbl ORDER BY message_date DESC LIMIT 5");

		    $stmt->execute();
		    while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
		    {
		    	$message_name = $row['message_firstname'] . " " . $row['message_lastname'];
		    	$message_email = $row['message_email'];
		    	$message_content = $row['message_content'];
		    	$message_date = $row['message_date'];

	    		?>
				<tr>
					<td><?php echo $message_name; ?></td>
					<td><?php echo $message_email; ?></td>
					<td><?php echo substr($message_content, 0, 50); ?></td>
					<td><?php echo $message_date; ?></td>
					<td class="td-actions text-center">
						<button rel="tooltip" type="button" title="" class="btn btn-link text-info" data-original-title="Reply">
							<i class="tim-icons icon-pencil"></i>
						</button>
						<button rel="tooltip" type="button" title="" class="btn btn-link text-danger" data-original-title="Delete">
							<i class="tim-icons icon-trash-simple"></i>
						</button>
					</td>
				</tr>
	    		<?php
		    }

        } catch (PDOException $e) {

              echo $e->getMessage();

        }

	}


}

?>
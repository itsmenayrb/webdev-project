<?php

session_start();
require_once 'Config.php';

class Places extends Config {

	private $title = null;
	private $content = null;
	private $uploadedFile = null;

	public function __construct() {

		$this->conn = new Config();

	}

	public function sendPost($title, $content, $uploadedFile) {

		$this->title = $title;
		$this->content = $content;
		$this->uploadedFile = $uploadedFile;

		try {

			$stmt = $this->conn->runQuery("INSERT INTO places_tbl (
											places_title,
											places_content,
											places_fileupload
											) VALUES (
											:title,
											:content,
											:fileupload
											)
										");

			$stmt->bindparam(":title", $this->title);
			$stmt->bindparam(":content", $this->content);
			$stmt->bindparam(":fileupload", $this->uploadedFile);

			$stmt->execute();
			return $stmt;
			
		} catch (PDOException $e) {
			echo $e->getMessage();
		}

	}


	public function displayMorePlaces($lastid) {

		try {


		    $stmt1 = $this->conn->runQuery("SELECT * FROM places_tbl WHERE places_id > :lastid LIMIT 3");
		    $stmt1->execute(array(":lastid" => $lastid));

		    ?>
		    <div class="row py-3">
		        <div class="col-12 my-auto">
		            <div class="row text-center">
		    		<?php

				    while ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC))
				    {

				    	$lastid = $row1['places_id'];
				    	$title = $row1['places_title'];
				    	$content = $row1['places_content'];
				    	$image = $row1['places_fileupload'];

			    		?>
		                <div class="col-lg-4 mb-4">
		                    <div class="card h-100">
		                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
		                            <img src="<?php echo $image; ?>" class="img-fluid mb-2" />
		                            <h4 class="card-title text-primary py-2"><?php echo $title; ?></h4>
		                            <p class="card-text"><?php echo $content; ?></p>
		                        </div>
		                    </div>
		                </div>
			    		<?php
				    $lastid_holder = $lastid;
				    }
				    ?>
				    </div>
		        </div>
		    </div>
		    <div class="text-center" id="remove-row">
		        <button class="btn btn-outline-primary" id="loadmore" name="loadmore" data-id="<?php echo $lastid_holder; ?>">Load more</button>
		    </div>
		    <?php

        } catch (PDOException $e) {

              echo $e->getMessage();

        }		

	}


}

?>
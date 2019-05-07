<section class="container">
    <h1 class="text-center py-sm-3">Places I want to visit</h1>
    <div id="places-container">
        <?php
            try {

                $stmt1 = $config->runQuery("SELECT * FROM places_tbl LIMIT 3");
                $stmt1->execute();

                ?>
                <div class="row py-5">
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
                            <div class="col-lg-4 mb-1">
                                <div class="card h-100">
                                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                        <img src="<?php echo $image; ?>" class="img-fluid mb-2" />
                                        <h4 class="card-title text-primary py-2"><?php echo $title; ?></h4>
                                        <p class="card-text"><?php echo $content; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        $lastid_holder = $lastid;
                        ?>
                        </div>
                    </div>
                </div>
                <?php

            } catch (PDOException $e) {

                  echo $e->getMessage();

            }
        ?>
    </div>
    <div class="text-center" id="remove-row">
        <button class="btn btn-outline-primary" id="loadmore" name="loadmore" data-id="<?php echo $lastid_holder; ?>">Load more</button>
    </div>
</section>
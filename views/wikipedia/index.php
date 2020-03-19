<?php
include("wikipedia.module.php");
$content = $wiki->data();
?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <form action="" method="post">
                <div class="row">
                    <div class="form-group col-12 col-lg-6 mx-auto">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="keyword">
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary" type="submit">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="row">
                <div class="col-12">
                    <?php foreach ($content as $item) {
                        echo $wiki->results($item);
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>
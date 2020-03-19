<?php
include("products.module.php");
$lists = $product->get_products();

if ($_POST['keyword'] && $_POST['keyword'] != '') {
    $lists = $product->search($_POST['keyword']);
}
?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <a href="?page=productupdate">
                <button class="btn btn-primary float-right mb-2"><strong>+</strong> Add</button>
            </a>

            <form action="" method="post">
                <div class="float-right mr-2">
                    <div class="input-group">
                        <input type="text" class="form-control" name="keyword" placeholder="Search">
                        <div class="input-group-append">
                            <button class="btn btn-outline-success" type="submit">
                                <img style="width: 20px; height: 20px" src="assets/icons/feathericons/search.svg" alt="">
                            </button>
                        </div>
                    </div>
                </div>
            </form>

            <?php include("products.table.php"); ?>
        </div>
    </div>
</div>
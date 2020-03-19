<?php
include("products.module.php");
$id = $_GET['id'];
$data = $product->get_single_product($id);
?>

<script>
    function edit(id) {
        window.open('?page=productupdate&id=' + id, '_self')
    }
</script>

<div class="container col-5">
    <div class="card">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-12">
                    <form action="action.php" method="post">
                        <div class="btn-group float-right">
                            <button type="button" onclick="edit(<?php echo $id ?>)" class="btn btn-primary">Edit</button>
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <button name="remove" type="submit" value="delete" class="btn btn-danger">Delete</button>
                            <a href=".?page=products" type="button" class="btn btn-secondary">Close</a>
                        </div>
                    </form>

                    <span class="h3"><?php echo $data['name'] ?></span>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6">
                    <p><strong>Price</strong>: $ <?php echo number_format($data['price'], 2, '.', ',') ?></p>
                </div>

                <div class="col-12 col-lg-6">
                    <p><strong>Category</strong>: <?php echo $data['category_name'] ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <legend for="">Description</legend>
                    <p style="text-indent: 50px"><?php echo $data['description'] ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include("products.module.php");
$id = $_GET['id'];

$data = $product->get_single_product($id);
$categories = $product->get_categories();
?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <form action="action.php" method="post">
                <div class="row">
                    <div class="form-group col-6 col-md-6">
                        <label for="">Name</label>
                        <input type="text" name="name" id="name" value="<?php if ($id) echo $data['name'] ?>" class="form-control">
                    </div>

                    <div class="form-group col-3 col-md-3">
                        <label for="">Price</label>
                        <input type="number" step="any" name="price" value="<?php if ($id) echo $data['price'] ?>" id="price" class="form-control">
                    </div>

                    <div class="form-group col-3 col-md-3">
                        <label for="">Category</label>
                        <select name="category" id="" class="form-control">
                            <?php foreach ($categories as $category) { ?>
                                <option value="<?php echo $category['id'] ?>" <?php if ($category['id'] == $data['category_id']) echo "selected" ?>><?php echo $category['name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-12 col-md-12">
                        <label for="">Description</label>
                        <textarea type="text" rows="5" name="description" id="description" class="form-control"><?php if ($id) echo $data['description'] ?></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6 col-md-6">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <button class="btn btn-primary" name="submit" value="product">Save</button>
                        <button class="btn btn-secondary" name="cancel" value="product">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
class ProductsModule
{
    function get_single_product($id)
    {
        $json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id=' . $id);
        return json_decode($json, true);
    }
}

$product = new ProductsModule;

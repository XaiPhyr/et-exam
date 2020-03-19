<?php

class ProductsModule
{
    function get_single_product($id)
    {
        $json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id=' . $id);
        return json_decode($json, true);
    }

    function get_categories()
    {
        $json = file_get_contents('http://rdapi.herokuapp.com/category/read.php');
        $data = json_decode($json, true);
        return $data['records'];
    }
}

$product = new ProductsModule;

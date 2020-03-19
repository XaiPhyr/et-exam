<?php

class ProductsModule
{
    function get_products()
    {
        $json = file_get_contents('http://rdapi.herokuapp.com/product/read.php');
        $data = json_decode($json, true);
        return $data['records'];
    }

    function search($keyword)
    {
        $json = file_get_contents('http://rdapi.herokuapp.com/product/search.php?s=' . $keyword);
        $data = json_decode($json, true);
        return $data['records'];
    }
}

$product = new ProductsModule;

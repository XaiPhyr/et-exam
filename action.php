<?php

switch ($_POST['cancel']) {
    case 'product':
        $id = $_POST['id'];
        $id = $id == null ? header("location: .?page=products") : header("location: .?page=productdetail&id=" . $id);
        break;
}

switch ($_POST['submit']) {
    case 'product':
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $description = $_POST['description'];

        if (empty($id)) {
            include("services/create.php");
            $create->create($name, $price, $category, $description);
        } else {
            include("services/update.php");
            $update->update($id, $name, $price, $category, $description);
        }

        header("location: .?page=products");
        break;
}

switch ($_POST['remove']) {
    case 'delete':
        include("services/delete.php");
        $id_del = $_POST['id'];

        $delete->delete($id_del);
        header("location: .?page=products");
        break;
}

<?php
include("controllers/page.php");

switch ($_GET['page']) {
    default:
        $page->login();
        break;

    case 'logout':
        $page->logout();
        break;

    case 'dashboard':
        $page->dashboard();
        break;

    case 'countries':
        $page->countries();
        break;

    case 'countrydetail':
        $page->countries('detail');
        break;

    case 'wikipedia':
        $page->wikipedia();
        break;

    case 'products':
        $page->products();
        break;

    case 'productdetail':
        $page->products('details');
        break;

    case 'productupdate':
        $page->products('update');
        break;
}

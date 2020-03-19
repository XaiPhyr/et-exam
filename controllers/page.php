<?php
include("services/components.php");

class PageController extends Components
{
    function dashboard($status = 'home')
    {
        switch ($status) {
            default:
                return $this->webpage('dashboard/index.php');
                break;
        }
    }

    function countries($status = 'lists')
    {
        switch ($status) {
            default:
                return $this->webpage('countries/index.php');
                break;

            case 'detail':
                return $this->webpage('countrydetail/index.php');
                break;
        }
    }

    function wikipedia()
    {
        return $this->webpage('wikipedia/index.php');
    }

    function products($status = 'lists')
    {
        switch ($status) {
            default:
                return $this->webpage('products/index.php');
                break;

            case 'details':
                return $this->webpage('productsdetail/index.php');
                break;

            case 'update':
                return $this->webpage('productsupdate/index.php');
                break;
        }
    }
}

$page = new PageController;

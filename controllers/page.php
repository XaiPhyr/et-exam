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

    function login()
    {
        return include("views/login.php");
    }

    function logout()
    {
        require_once("plugins/google/config.php");
        session_start();
        session_destroy();
        unset($_SESSION['access_token']);
        $gClient->revokeToken();
        session_destroy();
        header("location: .");
        exit();
    }
}

$page = new PageController;

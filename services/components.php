<?php

class Components
{
    function webpage($page)
    {
        $output = include("views/header.php");
        $output .= include("views/" . $page);
        $output .= include("views/footer.php");

        return $output;
    }
}

$component = new Components;

<?php

class WikipediaModule
{
    function data()
    {
        $domOBJ = new DOMDocument();
        if ($_POST['keyword']) {
            $domOBJ->load("https://en.wikipedia.org/w/api.php?action=opensearch&format=xml&search=" . $_POST['keyword']);
        }
        return $domOBJ->getElementsByTagName("Item");
    }

    function results($content)
    {
        $output = '<div class="mb-4">';
        $output .= '<div class="h5 mb-0">' . $content->getElementsByTagName("Text")->item(0)->nodeValue . '</div>';
        $output .= '<a target="_blank" href="' . $content->getElementsByTagName("Url")->item(0)->nodeValue . '">' . $content->getElementsByTagName("Url")->item(0)->nodeValue . '</a>';
        $output .= '</div>';

        return $output;
    }
}

$wiki = new WikipediaModule;

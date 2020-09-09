<?php

function selectedSite($site)
{
    $uri = $_SERVER["REQUEST_URI"];
    $uriFile = basename($uri);
    
    $multi = $_GET["page"] ?? "index"; //Gets the ?page= string
    $multipage = $site . "?page=" . $multi;  //Variable for multipage.php?page=X
    return  $uriFile == $site ||$uriFile == $multipage ? "selected" : "";
}
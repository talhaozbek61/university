<?php
if(isset($_GET["link"]))
    $links=$_GET["link"];

switch ($links) {
    case "foods":
    case "drinks":
    case "about":
    $content = "components/$links.php";
    break;
        
    default:
    $content = "components/home.php";
    break;
}


?>
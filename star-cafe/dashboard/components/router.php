<?php
if(isset($_GET["link"]))
    $links=$_GET["link"];

switch ($links) {
    case "foods":
    case "drinks":
    case "about":
    case "users":
        $content = "components/$links.php";
    break;
        
    default:
        $content = "components/home.php";
    break;
}


?>
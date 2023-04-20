<?php
//complete code for index.php
$nav = "";
$info = "";
include_once "views/navigation.php";
include_once "classes/Page_Data.class.php";


$pageData = new Page_Data();
$pageData->setTitle("Dynamic Image Gallery");
$pageData->setContent($nav);
$pageData->setCSS("<link rel='stylesheet' href='./css/layout.css'>");


$navigationIsClicked = isset($_GET['page']);
if ($navigationIsClicked) {
    $fileToLoad = $_GET['page'];
} else {
    $fileToLoad = "gallery";
}


include_once "views/$fileToLoad.php";


$pageData->appendContent($info);


require "templates/page.php";
echo $page;

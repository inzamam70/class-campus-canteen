<?php

function d($var){
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

function dd($var){
   d($var);
   die();
}
$webroot = "http://limitless-templating.test/".DIRECTORY_SEPARATOR;
$adminurl = "admin/layout_1/LTR/material/full".DIRECTORY_SEPARATOR;
$frontendurl = "frontend/layout".DIRECTORY_SEPARATOR;
$docroot = $_SERVER['DOCUMENT_ROOT'];
$partials = $docroot.DIRECTORY_SEPARATOR.'partials'.DIRECTORY_SEPARATOR;
$partialfrontend = $docroot.DIRECTORY_SEPARATOR.'frontend/partials'.DIRECTORY_SEPARATOR;
$mainnavitems = $docroot.DIRECTORY_SEPARATOR.'admin/datasource'.DIRECTORY_SEPARATOR;
$frontenddatasource = $docroot.DIRECTORY_SEPARATOR.'frontend/datasource'.DIRECTORY_SEPARATOR;
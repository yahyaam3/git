<?php
function home($request, $response, $container){
    $response->setTemplate('home.php');
    return $response;
}
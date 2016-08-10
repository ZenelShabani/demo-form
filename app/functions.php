<?php

function translate($str_id){
    return Language::get($str_id);
}

function loadJSON($arr){
    $jsn = json_encode($arr);
    header('Content-type: text/json');
    echo json_encode($arr);
    die();
}

function fileExists($p){
    return file_exists($p) ? true : false;
}
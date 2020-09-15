<?php

function dd($var){
    var_dump($var);
    die();
}


function view(){
    include(__DIR__'/views/' . $name . '.php');
}
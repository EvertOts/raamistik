<?php

\App\Router::get('page1', function(){
    $title = "page 1";
    include(__DIR__. '/../views/page.php'); 
});

\App\Router::get('page2', function(){
    $title = "page 2";
    include(__DIR__. '/../views/page.php'); 
});






<?php

namespace App;


class Router {
    private $uri;
    private $method;
    private $routes;

}

public function __construct($uri, $method){
    $this -> $uri = $uri;
    $this -> $method = $method;
    require(__DIR__'/../routes.php');
    $this -> match();
    $this -> routes = $routes
}

public function match(){

    foreach (self::$routes as $route){
        if($route['method'] == $this -> method && $route['uri'] == $this -> uri){
            call_user_func($route['action']);
            return;
        }
    }
    title = "404 page not found";
    include(__DIR__ . '/../views/page.php');
   
    $uris = array_keys($routes);
    if(in_array($this->uri, $uris)){
        call_user_func($routers[$this->$uri]);
    } else{
        title = "404 page not found";
        include(__DIR__ . '/../views/page.php');
    }

    public static function route($uri, $method, callable $action){
        self::$routes[] = ['uri' => $uri, 'method' => $method, 'action' => $action];
    }
    public static function get($uri, callable $action){
        self::route($uri, 'GET')
    }
}
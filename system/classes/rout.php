<?php

class rout {

    //defult controller,methord, params
    public $controller = "example";
    public $method = "index";
    public $params = array();

    public function __construct() {
        $url = $this->url();
        //calls url function ^
        if (!empty($url)) {
            $file = DOCUMENTROOT . "/application/controller/" . $url[0] . ".php";
            if (file_exists(DOCUMENTROOT . "/application/controller/" . $url[0] . ".php")) {
                // echo "controller found";
                $this->controller = $url[0];
                unset($url[0]);
            } else {
                // echo "controller not found";
            }
        }
        require_once (DOCUMENTROOT . "/application/controller/" . $this->controller . ".php");
        $this->controller = new $this->controller;

        if (isset($url[1]) && !empty($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            } else {
                // echo "methord not found";
            }
        }
        if (isset($url[2])) {
            $this->params = $url;
        } else {
            $this->params = array();
        }
        call_user_func_array(array($this->controller, $this->method), array($this->params));
    }

    public function url() {
        $_GET['url'] = trim(str_replace("/rajarhatt/index.php/", "", $_SERVER['REQUEST_URI']));
        //                               this thing   wth  this       in request

        if (isset($_GET['url'])) {
            $url = trim($_GET['url']); //unnesecarry space trim
            $url = filter_var($url, FILTER_SANITIZE_URL); //removes all illegal char from url filter_var can also check if the url is valid or not
            $url = explode("/", $url); //breaks url in array
            return $url;
        }
    }

}

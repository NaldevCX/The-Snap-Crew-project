<?php

//This class is the main gateway of the program, depending on the search params it will access the controller class of said parameters and access the views.
Class App{
    protected $controller = "home";
    protected $method = "index";
    protected $params;
    public function __construct(){
        
        $url = $this->parseURL();

        if(file_exists("../app/controllers/". strtolower($url[0]).".php")){
            $this->controller = strtolower($url[0]);
            unset($url[0]);
        }
        require "../app/controllers/".$this->controller.".php";
        $this->controller = new $this->controller;
        
        if(isset($url[1])){
            $url[1] = strtolower($url[1]);
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        $this->params = (count($url) > 0) ? $url : ["home"];
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function parseURL(){
        $url = isset($_GET['url']) ? $_GET['url'] : "home";
        return explode("/", filter_var(trim($url, "/"),FILTER_SANITIZE_URL)); 
        // explode separates strings into array by using a parameter, trim removes a certain character or if not certain removes spaces.
        // filter_var(var,var) sanitizes the url, in this code, removes all illegal url parameters.
    }
}

?>
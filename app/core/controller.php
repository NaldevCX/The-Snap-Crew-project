<?php

Class Controller{


    
    public function view($path, $data = []){
        $viewPath = "../app/views/". $path.".php";

        if(file_exists("../app/views/". $path.".php")){
            include "../app/views/". $path.".php";
        }

    }
}

?>
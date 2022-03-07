<?php

define("WEBSITE_NAME", "The Snap Crew");

//database configs
define("DB_NAME", "snapcrew_db");
define("DB_USER", "snapcrew_db");
define("DB_PASS", "snapcrew_db");
define('DEBUG', true);


if(DEBUG){
    ini_set('display_errors', 1);

}else{
    ini_set('display_errors', 0);
}
?>
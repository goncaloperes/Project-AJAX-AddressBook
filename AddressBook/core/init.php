<?php

//Include Config
require_once('config/config.php');


//Helper Files
require_once('helpers/system_helper.php');


//Autoload - There's only one class, but I'll use it anyway
function __autoload($class_name)
{
    require_once('libraries/'.$class_name.'.php');
}
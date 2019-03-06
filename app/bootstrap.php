<?php
//load config
  require_once 'configs/config.php';
  //autoload core libraries
  spl_autoload_register(function($className){
    require_once 'libraries/'.$className.'.php';
  });
?>

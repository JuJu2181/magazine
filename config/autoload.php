<?php
     spl_autoload_register(function($class){
         include  CLASS_PATH.$class.'.php'; //it creates generic path for class

     });

?>
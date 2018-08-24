<?php

try{
        
        $con = new PDO('mysql:host=localhost;dbname=trabalho3;charset=utf8', 'root', '');
        
    }
    catch(Exception $e){ 
        
        echo  "$e";
        
    } 
?>
<?php

    try{

        $con = new PDO('mysql:host=localhost;dbname=CSenhas;charset=utf8', 'root', '');

    }
    catch(Exception $e){

        echo "$e";

    }

?>

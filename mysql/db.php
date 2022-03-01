<?php

$connection = mysqli_connect("localhost", "root", "", "loginapp");

        if($connection){
            echo "jsme propojeni";
        }   else{
            die("uf");
        }

?>
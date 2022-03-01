<?php

function Connection(){
    global $connection;

    $connection = mysqli_connect("localhost", "root", "", "loginapp");

        if($connection){
            echo "jsme propojeni";
        }   else{
            die("uf");
        }
}

function UpdateFun(){
        global $connection;
        $username = $_POST["username"];
        $password = $_POST["password"];
        $id = $_POST["id"];

        $query2 = "UPDATE users SET username='$username', password='$password' WHERE id=$id ";

        $result2 = mysqli_query($connection,$query2);

        if(!$result2){
            die("dotaz selhal".mysqli_error($connection));
        }
}

function DeleteFun(){
    global $connection;
    $username = $_POST["username"];
    $password = $_POST["password"];
    $id = $_POST["id"];

    $query2 = "DELETE FROM users WHERE id=$id";

    $result2 = mysqli_query($connection,$query2);

    if(!$result2){
        die("dotaz selhal".mysqli_error($connection));
    }
}

function AddFun(){
    global $connection;
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "INSERT INTO users(username,password) VALUES('$username','$password')";

    $result = mysqli_query($connection,$query);

    if(!$result){
        die("chyba");
    }

}

?>
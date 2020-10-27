<?php


    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "ddsbe";

    if(isset($_POST['submit'])){
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);
    $data = $conn->query("SELECT username from tbluser WHERE username='$username' AND password='$password'");
    


    if($data->num_rows > 0){
        echo "SUCCESS!";
    }
    else {
        echo"INVALID!";
    }




    }
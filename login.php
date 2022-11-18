<?php

$server = 'localhost';
$db = "login";
$username = "root";
$password ="";

$con = mysqli_connect($server, $username, $password,$db);
/*if($con){
    echo "Database is connected";
}   else{
    echo "Dataabse failed to connect".mysqli_error($con);
}*/

if(isset($_POST['user'])){

    $username= $_POST['user'];
    $password=$_POST['pass'];

    $sql = "Select *from user where usernmae ='$username' AND password ";
    $result = mysqli_query($con,$sql);

    if(mysqli_num_rows($result)==1){
        echo "Login succesful";
        exit();
    }else{
        echo "Failed to Login".mysqli_error($con);
        exit();
    }
}

?>
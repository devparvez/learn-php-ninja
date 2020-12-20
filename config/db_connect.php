<?php 
$conn = mysqli_connect('localhost','shaun','p7278.7278p','ninja_pizza');
//check-connection
if(!$conn){
    echo 'connection error: ' . mysqli_connect_error();
}


?>
<?php

$conn = mysqli_connect('localhost','shaun','p7278.7278p','ninja_pizza');
//check-connection
if(!$conn){
    echo 'connection error: ' . mysqli_connect_error();
}
//write query for all pizzas
$sql = 'SELECT title, ingredients, id FROM pizzas';
//make the query and get result
$result = mysqli_query($conn, $sql);
//fetch the resulting rows as an arrays
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
//free result from memory 
mysqli_free_result($result);
//closing the connection
mysqli_close($conn);

print_r($pizzas);


?>
<!DOCTYPE html>
<html lang="en">
<?php
include('templates/header.php');
?>
<?php include('templates/footer.php');?>




    




    

</html>
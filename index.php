<?php
//function sayHello($name = 'shaun',$time='mornig'){
   // echo "good $time $name";
//}
//sayHello();
//sayHello('parvez')
//function formatProduct($product){
    //echo "{$product['name']} costs £ {$product['price']} to buy <br>";
   // return  "{$product['name']} costs £ {$product['price']} to buy <br>";
//}
//$formatted=formatProduct(['name'=>'goldstar','price'=>'20']);
//echo $formatted;
//===== scope variable=====
function myFunc(){
    $price=10;
    echo $price;
}
//myFunc();
//echo $price;
function myFuncTwo($age){
    echo $age;
}
//myFuncTwo(35);
$name = 'mario';
//function sayHello(){
    //global $name;
    //$name='youshi';
   // echo"Hello $name";
//}
//sayHello();
//echo $name;
function sayBye(&$name){
    $name='wario';
    echo "Bye $name";
}
sayBye($name);
echo $name;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <div>
    


</div> -->

    
</body>
</html>
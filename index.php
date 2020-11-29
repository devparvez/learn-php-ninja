<?php
//Loop starts here
//$ninja = ['shaon','parvez','aman'];
//for($i = 0; $i < count($ninja); $i++){
   // echo $ninja[$i]. '<br>';
//}
//foreach($ninja as $ninj){
   // echo $ninj. '<br>';
//}
$products = [
    ['name' => 'Ata' , 'price' => 10],
    ['name' => 'Rice' , 'price' => 3],
    ['name' => 'Banana' , 'price' => 20],
    ['name' => 'Grapes' , 'price' => 100],
    ['name' => 'Kismis' , 'price' => 2],
   
];
foreach($products as $product){
    if($product['name']==='Kismis'){
    break;
    }
    if($product['price'] > 15){
        continue;
    }
    echo $product['name'].' ';

}
//foreach($products as $product){
//    if($product['price'] > 30 || $product['price'] < 10){
//        echo $product['name']. '<br>';
 //   }

//}
//foreach($products as $product){
    //echo $product['name'].' - '.$product['price'];
    //echo '<br>';
//}
//$i=0;
//while($i < count($products)){
  //  echo $products[$i]['name'];
  //  echo '<br>';
   // $i++;
//}

//Boolean starts here

//echo true;
//echo false;
//echo 5 < 10;
//echo 5 > 10;
//echo 5 == 10;
//echo 10 == 10;
//echo 5 != 10;
//echo 5 <= 5;
//echo 5 >= 5;

//strings

//echo 'shaun' < 'yoshi'; 
//echo 'shaun' > 'yoshi';
//echo 'shaun' > 'Shaun';
//echo 'mario' == 'mario';
//echo 'mario' == 'Mario';

//loose vs strict equal comperison

//echo 5=='5';//loose comperison//
//echo 5 === '5';//strict comperison//
//echo 5 === 5;//strict comperison//
//echo 5 == 5;//loose comperison//
//echo 1 == true;//loose comperison//
//echo "" == false;//loose comperison//
//echo 1 === true;//strict comperison//

//conditional statements

// $price=20;
// if($price<10){
//     echo 'the condition is met';
// }elseif($price< 30){
//     echo 'the else if condition met';
// }else{
//     echo 'the condition is not met';
// }
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
    <ul>
        <?php foreach($products as $product){?>
            <?php if($product['price'] > 15) {?>
                <li><?php echo $product['name'];?></li>

            <?php }?>
        <?php }?>
    
    </ul>


</div> -->

    
</body>
</html>
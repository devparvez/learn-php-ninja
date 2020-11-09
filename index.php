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
    ['name' => 'Ata' , 'price' => '20'],
    ['name' => 'Rice' , 'price' => '30'],
    ['name' => 'Banana' , 'price' => '50'],
    ['name' => 'Grapes' , 'price' => '100'],
    ['name' => 'Kismis' , 'price' => '120'],
   
];
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


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>products</h1>
<ul>
<?php foreach($products as $product){?>
    <h3><?php echo $product['name']?></h3>
    <p>$<?php echo $product['price']?></p>
<?php } ?>




</ul>
    
</body>
</html>
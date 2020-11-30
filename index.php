<?php
function sayHello($name = 'shaun',$time='mornig'){
    echo "good $time $name";
}
sayHello();
//sayHello('parvez')
function formatProduct($product){
    //echo "{$product['name']} costs £ {$product['price']} to buy <br>";
    return  "{$product['name']} costs £ {$product['price']} to buy <br>";
}
$formatted=formatProduct(['name'=>'goldstar','price'=>'20']);
echo $formatted;
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
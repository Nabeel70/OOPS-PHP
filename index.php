<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Oriented Programming</title>
</head>
<body>
    
<?php

//Here we have an example of Procedural Programming 

$brand = "Gucci";
$product = "Jacket";
$price = 1000;

function productInfo($brand, $product, $price){
    echo "The brand is $brand and the product is $product and price is $price";
    // echo "The brand is" . $brand ."and the product is" .$product;
}

return productInfo($brand, $product, $price);

?>
</body>
</html>
<?php 
require_once realpath("vendor/autoload.php");

use Scandiweb\Database;


$products = Database::getInstance()->query('SELECT SKU,name,price FROM products');

if(!$products->count())
{
    echo "No Product";
}else {
    foreach($products->results() as $product){
        echo $product->SKU, "<br>";
        echo $product->name, "<br>";
        echo $product->price, "<br>";
    }
}

$productInsert = Database::getInstance()->insert('products', array(
    'SKU' => '',
    'name' => '',
    'price' => '',
));
?>










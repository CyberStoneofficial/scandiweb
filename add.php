<?php
require_once realpath("vendor/autoload.php");
use Scandiweb\Database;
use Scandiweb\Input;
use Scandiweb\Validate;



$productInsert = Database::getInstance()->insert('products',  array(
    "SKU" => 'sku',
    "name" => 'name',
    "price" => 'price'
));

if(Input::exists()){
    $validate = new Validate();
    $validation = $validate->check($_POST, array(
        'sku' => array(
            'required' => true,
        ),
        'name' => array(
            'required' => true,
        ),
        'price' => array(
            'required' => true
        )
    ));
    if($validation->passed()){
        echo "passed";
    }else{
        print_r($validation->errors());
    }

}
?>

<form name="form" method="post" action="">
<header>
    <div class="main-container">
        <div id="productlist">
            <h1>Product List</h1>
        </div>
        <nav>
            <ul>
                <li><button type="submit" name="save" class="button">save</button></li>
            </ul>
        </nav>
    </div>
</header>
    <hr>
    <div class="main-container">
        <label for="SKU">SKU</label>
        <input type="text" name="SKU" value="" autocomplete="off"><br>
        <label for="name">NAME</label>
        <input type="text" name="name" value="" autocomplete="off"><br>
        <label for="price">PRICE</label>
        <input type="text" name="price" value="" autocomplete="off"><br>
        <div id="showSelected"></div>
        <label>Type Switcher</label>
<!--        <select name="select" class="form-control" id="select_all" onchange="show()">-->
<!--            <option>Type Switcher</option>-->
<!--            <option value="Size">Size</option>-->
<!--            <option value="HxWxL"> HxWxL </option>-->
<!--            <option value="Weight"> Weight </option>-->
<!--        </select>-->
    </div>
</form>





//require_once "templates/product_add.php";


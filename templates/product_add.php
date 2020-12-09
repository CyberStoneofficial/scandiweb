<?php require_once "partials/header.php"?>

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
        <label for="sku">SKU</label>
        <input type="text" name="sku" value="" autocomplete="off"><br>
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

<?php require_once "partials/footer.php"; ?>


    
        
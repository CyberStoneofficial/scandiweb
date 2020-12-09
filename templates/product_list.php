<?php require_once "partials/header.php";?>

<form method="post">
    <header>
        <div class="main-container">
            <div id="productlist">
                <h1>Product List</h1>
            </div>
                <nav>
                    <ul>
                        <li>
                            <select id="select_id" onchange="select_all()" class="select">
                                <option value="" selected disabled hidden>Mass Delete Action</option>
                                <option value="deselect_all">deselect</option>
                                <option value="select_all">Mass Delete Action</option>
                            </select>
                        </li>
                        <li><input type="submit" class="button"  name="delete" value="apply"/></li>
                    </ul>
                </nav>
        </div>
</header>
<hr>
<section id="boxes">
    <div class="box-container">
        <?php foreach($products->select() as $product): ?>
            <div class="box">
                <input type="checkbox" name="chk_id[]" id="check" value="<?php echo $product->id; ?>">
                <h3><?php echo $product->SKU; ?></h3>
                <h3><?php echo $product->name; ?></h3>
                <h3><?php echo $product->price; ?></h3>
            </div>
        <?php endforeach; ?>
    </div>
</section>
</form>
<?php require_once "partials/footer.php"?>
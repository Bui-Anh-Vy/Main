<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    

<div class="container">
    <div class="admin-product-form-container">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
    <h3>Add new product</h3>
    <input type="text" placeholder="enter product name" name="product_name" class="box">
    <input type="number" placeholder="enter product price" name="product_price" class="box">
    <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
    <input type="submit" class="btn" name="add_product" value="Add product">

</form>
    </div>
</div>
</body>
</html>
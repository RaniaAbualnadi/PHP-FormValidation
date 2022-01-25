<?php ?>
<form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
    <div class="modal-header">
        <h4 class="modal-title">Add Product</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    </div>
    <div class="modal-body">
        <div class="form-group">
            <label>Product Name</label>
            <input type="text" class="form-control" name="product_name" required>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="number" class="form-control" name="product_price" required>
        </div>
        <div class="form-group">
            <label>description</label>
            <input type="text" class="form-control" name="product_desc" required>
        </div>
        <div class="form-group">
            <label>has discount</label>
            <select class="form-control" name="has_discount" required>
                <option>0</option>
                <option>1</option>
            </select>
        </div>
        <div class="form-group">
            <label>stock</label>
            <input type="number" class="form-control" name="stock" required>
        </div>
        <div class="form-group">
            <label>Category Name</label>
            <select class="form-control" name="category_id" required>
                <option>0</option>
                <option>1</option>
            </select>
        </div>
        <div class="form-group">
            <label>Product Img </label>
            <input type="text" class="form-control" name="product_img" required>
        </div>

    </div>
    <div class="modal-footer">
        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
        <input type="submit" class="btn btn-success" value="Add" name="createProducts">
    </div>
    <?php

    if (isset($_POST['createProducts'])) {

        $ProductName = $_POST['product_name'];
        $Price = $_POST['product_price'];
        $description = $_POST['product_desc'];
        $discount = $_POST['has_discount'];
        $stock = $_POST['stock'];
        $categoryId = $_POST['category_id'];
        $product_img= $_POST['product_img'];
        //storing new user in database
        $sql = "INSERT INTO products (product_name,product_price,product_desc,has_discount,stock,category_id,product_img)
		VALUES ('$ProductName','$Price','$description','$discount','$stock','$categoryId','$product_img')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";
    }

    ?>
</form>
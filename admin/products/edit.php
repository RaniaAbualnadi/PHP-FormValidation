<form method="post" name="editForm" action="<?php $_SERVER["PHP_SELF"]; ?>">
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
            <label>Product Image </label>
            <input type="text" class="form-control" name="product_img" required>
        </div>
        <div class="form-group">
            <label>Category Name</label>
            <select class="form-control" name="category_id" required>
                <option>0</option>
                <option>1</option>
            </select>
        </div>

    </div>
    <div class="modal-footer">
        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
        <input type="submit" class="btn btn-info" value="Save" name="edit_submit">
    </div>

</form>


<?php
$servername = "localhost";
$username = "root";
$database = "store";
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if($_SERVER["REQUEST_METHOD"]=="GET"){
	$value= $_GET["id"];
	$sql =$conn->prepare("SELECT * FROM products WHERE id='$value'");
	$sql->execute();
	$data=$sql->fetch(PDO::FETCH_ASSOC);
	}
   
	if($_SERVER["REQUEST_METHOD"]=="POST"){
	   $value= $_GET["id"];
	   $product_name= $_POST['product_name'];
	   $product_price= $_POST['product_price'];
	   $product_desc= $_POST['product_desc'];
       $has_discount= $_POST['has_discount'];
       $stock= $_POST['stock'];
       $category_id= $_POST['category_id'];
       $product_img= $_POST['product_img'];
	   $sql =$conn->prepare("UPDATE products SET product_name='$product_name',product_price='$product_price',product_desc='$product_desc',has_discount='$has_discount',stock='$stock',category_id='$category_id',product_img='$product_img' WHERE id='$value'");
	   $sql->execute();
	 
	   header('http://localhost/PHP/formvalidation/admin/products/');
   
   }
?>
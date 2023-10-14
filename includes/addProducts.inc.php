<?php 
$serverName = "localhost: 3306";
$dBUsername = "root";
$dBPassword = "";
$dbName = "store";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dbName);

if (isset($_POST['submit'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];

    if ($product_name != '' || $product_image != '') {
        $sql = "INSERT INTO producttb (product_name, product_price, product_image) values ('$product_name', '$product_price', '$product_image');";
        echo "<br/><br/> <span> Data Inserted successfully...!!</span>";
    }
    else {

    }
}
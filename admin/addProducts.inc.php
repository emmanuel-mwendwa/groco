<?php 
$serverName = "localhost: 3306";
$dBUsername = "root";
$dBPassword = "";
$dbName = "store";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dbName);

if (isset($_POST['submit'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];#
    //$product_image = $_POST['product_image'];
    $product_image = $_FILES['product_image'];

    $product_imageName = $_FILES['product_image']['name'];
    $product_imageTmpName = $_FILES['product_image']['tmp_name'];
    $product_imageSize = $_FILES['product_image']['size'];
    $product_imageError = $_FILES['product_image']['error'];
    $product_imageType = $_FILES['product_image']['type'];

    $product_imageExt = explode('.', $product_imageName);
    $product_imageActualExt = strtolower(end($product_imageExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($product_imageActualExt, $allowed)) {
        if ($product_imageError === 0) {
            if ($product_imageSize < 10000000) {
                $product_imageNameNew = uniqid('', true).".".$product_imageActualExt;
                $product_imageDestination = '../image/products/'.$product_imageNameNew;
                move_uploaded_file($product_imageTmpName,$product_imageDestination);
                echo "File added successfully...";

                $sql = "INSERT INTO producttb(product_name, product_price, product_image) VALUES ('$product_name', '$product_price', '$product_imageDestination')";
                
                $result = mysqli_query($conn, $sql);
                }
            }
            else {
                echo "File size is too big...";
            }
        }
        else {
            echo "There was an error uploading the file...";
        }
    }
    else {
        echo "File type not allowed...!!!";
    }


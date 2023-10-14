<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groco</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/login.css" />

</head>

<body>

    <div class="container">
        <div class="title">Add Products</div>
        <form action="../includes/addProducts.inc.php" method="POST">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Product Name </span>
                    <input type="text" name="product_name" placeholder="Enter product name" required>
                </div>
            </div>

            <div class="user-details">
                <div class="input-box">
                    <span class="details">Product Price </span>
                    <input type="text" name="product_price" placeholder="Enter product price " required>
                </div>
            </div>

            <div class="user-details">
                <div class="input-box">
                    <span class="details">Image </span>
                    <input type="image" name="product_image" placeholder="Enter your email " src="" required>
                </div>
            </div>
            
            <div class="button">
                <input type="submit" name="submit" value="Insert">
            </div>
            <br>
            <br>
        </form>
    </div>
</body>

</html>
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
<?php 

    session_start();
    $profile = $_SESSION['profileId'];

    $conn = mysqli_connect("localhost", "root", "", "store");
    
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " .mysqli_connect_error();
        exit();
    }
    //echo $profileId = $_GET['profileId'];
    
    $sql = "SELECT customerName, customerUsername, customerEmail, customerNumber, customerPassword FROM customers WHERE customerUsername='$profile'";

    
    if ($result = mysqli_query($conn, $sql)) {
        while ($row = mysqli_fetch_assoc($result)) {

?>

    <div class="container">
        <div class="title">Profile</div>
        <form action="" method="POST">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name </span>
                    <?php echo $row['customerName']; ?>
                </div>
            </div>

            <div class="user-details">
                <div class="input-box">
                    <span class="details">Username </span>
                    <?php echo $row['customerUsername']; ?>
                </div>
            </div>

            <div class="user-details">
                <div class="input-box">
                    <span class="details">Email </span>
                    <?php echo $row['customerEmail']; ?>
                </div>
            </div>

            <div class="user-details">
                <div class="input-box">
                    <span class="details">Phone Number </span>
                    <?php echo $row['customerNumber']; ?>
                </div>
            </div>

            <div class="user-details">
                <div class="input-box">
                    <span class="details">Password </span>
                    <?php echo $row['customerPassword']; ?>
                </div>
            </div>

            <div class="button">
                <input type="submit" name="drop" value="Delete Account">
            </div>
            <br>
            <br>

        </form>
    </div>
    <?php
        }
    }
    if (isset($_POST['drop'])) {
        $sql = "DELETE FROM customers WHERE customerUsername='$profile'";

        if ($result = mysqli_query($conn, $sql)) {

            session_start();
            session_unset();
            session_destroy();
            
            header("location: ../php/index.php");
            exit();
        }

    }
    ?>
</body>

</html>
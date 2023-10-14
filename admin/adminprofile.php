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
    
    $sql = "SELECT adminName, adminUsername, adminEmail, adminNumber, adminPassword FROM admin WHERE adminUsername='$profile'";

    
    if ($result = mysqli_query($conn, $sql)) {
        while ($row = mysqli_fetch_assoc($result)) {

?>

    <div class="container">
        <div class="title">Profile</div>
        <form action="" method="POST">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name </span>
                    <?php echo $row['adminName']; ?>
                </div>
            </div>

            <div class="user-details">
                <div class="input-box">
                    <span class="details">Username </span>
                    <?php echo $row['adminUsername']; ?>
                </div>
            </div>

            <div class="user-details">
                <div class="input-box">
                    <span class="details">Email </span>
                    <?php echo $row['adminEmail']; ?>
                </div>
            </div>

            <div class="user-details">
                <div class="input-box">
                    <span class="details">Phone Number </span>
                    <?php echo $row['adminNumber']; ?>
                </div>
            </div>

            <div class="user-details">
                <div class="input-box">
                    <span class="details">Password </span>
                    <?php echo $row['adminPassword']; ?>
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
        $sql = "DELETE FROM admin WHERE adminUsername='$profile'";

        if ($result = mysqli_query($conn, $sql)) {

            session_start();
            session_unset();
            session_destroy();
            
            header("location: ../admin/adminindex.php");
            exit();
        }

    }
    ?>
</body>

</html>
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
        <div class="title">Log In</div>
        <form method="POST" action="../includes/adminlogin.inc.php" >

            <div class="user-details">
                <div class="input-box">
                    <span class="details">Email / Username </span>
                    <input type="text" placeholder="Enter your email/username " name="email" required>
                </div>
            </div>

            <div class="user-details">
                <div class="input-box">
                    <span class="details">Password </span>
                    <input type="password" name="password" placeholder="Enter your password" required>
                </div>
            </div>

            <div class="button">
                <input type="submit" name="submit" value="Login">
            </div>
            <br>
            <br>

            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields!</p>";
                } else if ($_GET["error"] == "wronglogin") {
                    echo "<p>Incorrect log in information. </p>";
                }
            }
            ?>
        </form>

    </div>

</body>

</html>
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
        <div class="title">Sign Up</div>
        <form action="../includes/adminsignup.inc.php" method="POST">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name </span>
                    <input type="text" name="name" placeholder="Enter your name" required>
                </div>
            </div>

            <div class="user-details">
                <div class="input-box">
                    <span class="details">Username </span>
                    <input type="text" name="username" placeholder="Enter your username " required>
                </div>
            </div>

            <div class="user-details">
                <div class="input-box">
                    <span class="details">Email </span>
                    <input type="email" name="email" placeholder="Enter your email " required>
                </div>
            </div>

            <div class="user-details">
                <div class="input-box">
                    <span class="details">Phone Number </span>
                    <input type="number" name="number" placeholder="Enter your number" required>
                </div>
            </div>

            <div class="user-details">
                <div class="input-box">
                    <span class="details">Password </span>
                    <input type="password" name="password" placeholder="Enter your password" required>
                </div>
            </div>

            <div class="user-details">
                <div class="input-box">
                    <span class="details">Confirm Password </span>
                    <input type="password" name="confirmpwd" placeholder="Confirm your password" required>
                </div>
            </div>

            <div class="button">
                <input type="submit" name="submit" value="Sign Up">
            </div>
            <br>
            <br>

            <!-- displaying error messages -->
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields!</p>";
                } else if ($_GET["error"] == "invalidusername") {
                    echo "<p>Choose a proper username. </p>";
                } else if ($_GET["error"] == "passwordsdontmatch") {
                    echo "<p>Passwords do not match. </p>";
                } else if ($_GET["error"] == "usernametaken") {
                    echo "<p>Username already exists. </p>";
                } else if ($_GET["error"] == "stmtfailed") {
                    echo "<p>Something went wrong, try again! </p>";
                } else if ($_GET["error"] == "none") {
                    echo "<p>You have successfully signed up. </p>";
                }
            }
            ?>
        </form>
    </div>
</body>

</html>
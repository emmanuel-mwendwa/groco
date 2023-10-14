<?php 

if (isset($_POST["submit"])) {
    
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $password = $_POST["password"];
    $confirmpwd = $_POST["confirmpwd"];

    require_once 'dbh.inc.php';
    require_once 'adminfunctions.inc.php';

    if (emptyInputSignup($name, $username, $email, $number, $password, $confirmpwd) !== false) {
        header("location: ../admin/adminsignup.php?error=emptyinput");
        exit();

    }

    if (invalidUsername($username) !== false) {
        header("location: ../admin/adminsignup.php?error=invalidusername");
        exit();
    }

    if (passwordMatch($password, $confirmpwd) !== false) {
        header("location: ../admin/adminsignup.php?error=passwordsdontmatch");
        exit();
    }

    if (usernameExists($conn, $username, $email) !== false) {
        header("location: ../admin/adminsignup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $username, $email, $number, $password);

}

else {
    header("location: ../php/adminsignup.php");
    exit();
}

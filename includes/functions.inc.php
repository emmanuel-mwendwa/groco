<?php

$result;

function emptyInputSignup($name, $username, $email, $number, $password, $confirmpwd) {
    if (empty($name) || empty($username) || empty($email) || empty($number) || empty($password) || empty($confirmpwd)) {
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;
}

function invalidUsername($username) {
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function passwordMatch($password, $confirmpwd) {
    if ($password !== $confirmpwd) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function usernameExists($conn, $username, $email) {
    $sql = "SELECT * FROM customers WHERE customerUsername = ? OR customerEmail = ?; ";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../php/signup.php?error=usernametaken");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultsData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultsData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $username, $email, $number, $password) {
    $sql = "INSERT INTO customers (customerName, customerUsername, customerEmail, customerNumber, customerPassword) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../php/signup.php?error=usernametaken");
        exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssds", $name, $username, $email, $number, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../php/login.php?error=none");
    exit();

}

function emptyInputLogin($email, $password) {
    if (empty($email) || empty($password)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $email, $password) {
    $emailexists = usernameExists($conn, $email, $email);

    if ($emailexists === false) {
        header("location: ../php/login.php?error=wronglogin");
        exit();
    }

    $pwdhashed = $emailexists["customerPassword"];
    $checkPwd = password_verify($password, $pwdhashed);

    if ($checkPwd === false) {
        header("location: ../php/login.php?error=wronglogin");
        exit();
    }
    else if ($checkPwd === true) {
        session_start();
        $_SESSION["customerId"] = $emailexists['customerId'];
        $_SESSION["customerUsername"] = $emailexists['customerUsername'];
        header("location: ../php/index.php");
        exit();
    }
}

?>
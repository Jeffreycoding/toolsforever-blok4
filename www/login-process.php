<?php

if (isset($_POST['submit'])) {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $emailForm = $_POST['email'];
            $passwordForm = $_POST['password'];
require 'database.php';

$sql = "SELECT * FROM users WHERE email = :email";
$stmt = $conn->prepare($sql);
$stmt->execute(
    [
        ':email' => $emailForm
    ]
);
$user = $stmt->fetch();


                //resultaat gevonden? Dan maken we een user-array $dbuser

                if ($user['password'] == $passwordForm) {

                    session_start();
                    $_SESSION['user_id']    = $user['id'];
                    $_SESSION['email']      = $user['email'];
                    $_SESSION['firstname']  = $user['firstname'];
                    $_SESSION['lastname']   = $user['lastname'];
                    $_SESSION['role']       = $user['role'];

                    // echo "You are logged in";
                    header("Location: dashboard.php");
                    exit;
                } else {
                    include 'header.php';
                    $_GET['message'] = 'wrongpassword';
                    include 'login-message.php';
                    include 'footer.php';
                    exit;
                }
            } else {
                include 'header.php';
                $_GET['message'] = 'usernotfound';
                include 'login-message.php';
                include 'footer.php';
                exit;
            }
        }
    }

include 'footer.php';
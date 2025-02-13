<?php



if ($_SERVER['REQUEST_METHOD'] != 'GET') {
    echo "You are not allowed to view this page";
    exit;
}

if (isset ($_GET['id'])){
    $id = $_GET['id'];
    require 'database.php';
    $sql = "DELETE FROM users WHERE id = $id";
    $result = mysqli_query($conn, $sql);
}
header("Location: users_index.php");
exit;
?>
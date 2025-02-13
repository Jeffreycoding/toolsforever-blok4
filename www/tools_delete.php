<?php



if ($_SERVER['REQUEST_METHOD'] != 'GET') {
    echo "You are not allowed to view this page";
    exit;
}

if (isset ($_GET['id'])){
    $id = $_GET['id'];
    require 'database.php';
    $sql = "DELETE FROM tools WHERE tool_id = $id";
    $result = mysqli_query($conn, $sql);
}
header("Location: tools_index.php");
exit;
?>
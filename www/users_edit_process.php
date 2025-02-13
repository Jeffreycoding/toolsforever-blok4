
<?php
require 'footer.php';
?>
<?php
if(!isset($_POST['id'])) { 
    echo 'geen id opgegeven';
    exit;
}

if(!isset($_POST['firstname'])) {
    echo 'geen voornaam opgegeven';
    exit;

}
if(!isset($_POST['lastname'])) {
    echo 'geen achternaam opgegeven';
    exit;
}

require 'database.php'; 

$user_firstname = $_POST['firstname'];
$user_lastname = $_POST['lastname'];
$user_email = $_POST['email'];
$user_address = $_POST['address'];
$user_city = $_POST['city'];
$user_id = $_POST['id'];

$sql = "UPDATE users SET firstname = '$user_firstname', 
lastname = '$user_lastname',
email = '$user_email',
address = '$user_address',
city = '$user_city'
WHERE id = $user_id";

mysqli_query($conn, $sql);


header("location: users_index.php");

?>
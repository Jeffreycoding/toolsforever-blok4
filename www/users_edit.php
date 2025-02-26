<?php
session_start();

$id = $_GET['id'];

if (!isset($_SESSION['user_id'])) {
    echo "You are not logged in, please login. ";
    echo "<a href='login.php'>Login here</a>";
    exit;
}

if ($_SESSION['role'] != 'administrator') {
    echo "You are not allowed to view this page, please login as admin";
    exit;
}

require_once 'database.php';

$sql = "UPDATE users SET name = :name, email = :email, password = :password WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->execute(['name' => $name, 'email' => $email, 'password' => $password, 'id' => $id]);

$sql = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

require 'header.php';
?>
<main>
    <h1>Bewerk Gebruiker</h1>
    <div class="container">
        <form action="users_edit_process.php" method="post">
            <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
            <div>
                <label for="firstname">Voornaam:</label>
                <input type="text" id="firstname" name="firstname" value="<?php echo $user['firstname'] ?>">
            </div>
            <div>
                <label for="lastname">Achternaam:</label>
                <input type="text" id="lastname" name="lastname" value="<?php echo $user['lastname'] ?>">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $user['email'] ?>">
            </div>
            <div>
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" value="<?php echo $user['address'] ?>">
            </div>
            <div>
                <label for="city">Stad:</label>
                <input type="text" id="city" name="city" value="<?php echo $user['city'] ?>">
            </div>
            <button type="submit" class="btn btn-success">bewerk</button>
        </form>
    </div>
</main>
<?php
require 'footer.php';
?>
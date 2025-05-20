<?php
$conn = new mysqli("localhost", "root", "", "ff_beta");
$email = $_POST['email'];
$pass = md5($_POST['password']);
$q = $conn->query("SELECT * FROM users WHERE email='$email' AND password='$pass'");
if ($q->num_rows > 0) {
    echo "Login berhasil!";
} else {
    echo "Login gagal.";
}
?>

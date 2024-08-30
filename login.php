<?php 

include 'db.php';
include 'session.php';

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'post') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($email && $password) {
        $query = "SELECT * FROM user where email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if ($password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user_id;
                $_SESSION['password'] = $user;
                header('Location : payment.php');
                exit();
            }
            $error = 'password salah';
        }
        $error = 'pengguna tidak ditemukan';
    }
    $error = "Email dan Password harus di isi";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

</style>
<body>
    <form method="post">
        <h2>Login</h2>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Login</button>
    </form>

</body>
</html>
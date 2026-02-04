<?php
session_start();
include '../config.php';
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $res = $conn->query("SELECT * FROM admin_users WHERE username='$username' AND password='$password'");
    if ($res->num_rows > 0) {
        $_SESSION['admin'] = $username;
        header("Location: dashboard.php");
    } else {
        $error = "Invalid login!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="height:100vh;">
<div class="card p-4 shadow" style="width:350px;">
  <h4 class="mb-3">Admin Login</h4>
  <?php if (!empty($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
  <form method="post">
    <input type="text" name="username" class="form-control mb-2" placeholder="Username" required>
    <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
    <button type="submit" name="login" class="btn btn-danger w-100">Login</button>
  </form>
</div>
</body>
</html>
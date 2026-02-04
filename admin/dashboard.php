<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location: login.php");
include '../config.php';
$res = $conn->query("SELECT * FROM products ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <div class="container">
    <span class="navbar-brand">Admin Panel</span>
    <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
  </div>
</nav>
<div class="container mt-4">
  <div class="row mb-3">
    <div class="col-md-6">
      <a href="add_product.php" class="btn btn-success">+ Add Product</a>
    </div>
    <div class="col-md-6 text-end">
      <a href="contact_logs.php" class="btn btn-info">
        <i class="fas fa-envelope"></i> View Contact Logs
      </a>
      <a href="test_session.php" class="btn btn-warning btn-sm ms-2">
        <i class="fas fa-bug"></i> Debug
      </a>
    </div>
  </div>
  <table class="table table-bordered">
    <tr>
      <th>ID</th><th>Image</th><th>Name</th><th>Price</th><th>Action</th>
    </tr>
    <?php while($row = $res->fetch_assoc()): ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><img src="../uploads/<?= $row['image'] ?>" width="80"></td>
        <td><?= $row['name'] ?></td>
        <td>₹<?= $row['price'] ?></td>
        <td>
          <a href="edit_product.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
          <a href="delete_product.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete this?')">Delete</a>
        </td>
      </tr>
    <?php endwhile; ?>
  </table>
</div>
</body>
</html>
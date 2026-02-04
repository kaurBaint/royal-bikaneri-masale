<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location: login.php");
include '../config.php';
$id = $_GET['id'];
$product = $conn->query("SELECT * FROM products WHERE id=$id")->fetch_assoc();
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $weight = $_POST['weight'];
    $description = $_POST['description'];
    $discount = $_POST['discount'];
    
    if (!empty($_FILES['image']['name'])) {
        $imgName = time() . "_" . $_FILES['image']['name'];
        $target = "../uploads/" . $imgName;
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
        $conn->query("UPDATE products SET name='$name', price='$price', weight='$weight', description='$description', discount='$discount', image='$imgName' WHERE id=$id");
    } else {
        $conn->query("UPDATE products SET name='$name', price='$price', weight='$weight', description='$description', discount='$discount' WHERE id=$id");
    }
    header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit Product - Royal Bikaneri Masale</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <style>
    body { background-color: #f8f9fa; }
    .form-control:focus { border-color: #d32f2f; box-shadow: 0 0 0 0.2rem rgba(211, 47, 47, 0.25); }
    .btn-warning { background-color: #ff6b35; border-color: #ff6b35; }
    .btn-warning:hover { background-color: #e55a2b; border-color: #e55a2b; }
  </style>
</head>
<body class="p-4">
  <h3>Edit Product</h3>
  <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label class="form-label">Product Name</label>
      <input type="text" name="name" class="form-control" value="<?= $product['name'] ?>" required placeholder="Enter product name">
    </div>
    
    <div class="mb-3">
      <label class="form-label">Price (₹)</label>
      <input type="number" name="price" class="form-control" value="<?= $product['price'] ?>" required placeholder="Enter price" step="0.01" min="0">
    </div>
    
    <div class="mb-3">
      <label class="form-label">Weight</label>
      <input type="text" name="weight" class="form-control" value="<?= $product['weight'] ?? '' ?>" placeholder="e.g., 500g, 1kg, 250ml">
    </div>
    
    <div class="mb-3">
      <label class="form-label">Description</label>
      <textarea name="description" class="form-control" rows="4" placeholder="Enter product description"><?= $product['description'] ?? '' ?></textarea>
    </div>
    
    <div class="mb-3">
      <label class="form-label">Discount (%)</label>
      <input type="number" name="discount" class="form-control" value="<?= $product['discount'] ?? 0 ?>" placeholder="Enter discount percentage" step="0.01" min="0" max="100">
    </div>
    
    <div class="mb-3">
      <label class="form-label">Product Image (leave blank if no change)</label>
      <input type="file" name="image" class="form-control" accept="image/*">
      <?php if (!empty($product['image'])): ?>
        <div class="mt-2">
          <img src="../uploads/<?= $product['image'] ?>" width="150" class="img-thumbnail">
          <small class="text-muted d-block">Current image</small>
        </div>
      <?php endif; ?>
    </div>
    
    <div class="d-flex gap-2">
      <button type="submit" name="update" class="btn btn-warning">
        <i class="fas fa-save"></i> Update Product
      </button>
      <a href="dashboard.php" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Back to Dashboard
      </a>
    </div>
  </form>
</body>
</html>
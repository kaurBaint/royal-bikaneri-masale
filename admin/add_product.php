<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location: login.php");
include '../config.php';
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $weight = $_POST['weight'];
    $description = $_POST['description'];
    $discount = $_POST['discount'];
    
    // Check if image was uploaded
    if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $imgName = time() . "_" . $_FILES['image']['name'];
        $target = "../uploads/" . $imgName;
        
        // Move uploaded file
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            // Insert into database
            $sql = "INSERT INTO products (name, price, weight, description, discount, image) VALUES ('$name','$price','$weight','$description','$discount','$imgName')";
            
            if ($conn->query($sql)) {
                echo "<script>alert('Product added successfully!'); window.location.href='dashboard.php';</script>";
            } else {
                echo "<script>alert('Database Error: " . $conn->error . "');</script>";
            }
        } else {
            echo "<script>alert('Failed to upload image!');</script>";
        }
    } else {
        echo "<script>alert('Image upload error: " . $_FILES['image']['error'] . "');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Product - Royal Bikaneri Masale</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <style>
    body { background-color: #f8f9fa; }
    .form-control:focus { border-color: #d32f2f; box-shadow: 0 0 0 0.2rem rgba(211, 47, 47, 0.25); }
    .btn-success { background-color: #d32f2f; border-color: #d32f2f; }
    .btn-success:hover { background-color: #b71c1c; border-color: #b71c1c; }
  </style>
</head>
<body class="p-4">
  <h3>Add Product</h3>
  <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label class="form-label">Product Name</label>
      <input type="text" name="name" class="form-control" required placeholder="Enter product name">
    </div>
    
    <div class="mb-3">
      <label class="form-label">Price (₹)</label>
      <input type="number" name="price" class="form-control" required placeholder="Enter price" step="0.01" min="0">
    </div>
    
    <div class="mb-3">
      <label class="form-label">Weight</label>
      <input type="text" name="weight" class="form-control" placeholder="e.g., 500g, 1kg, 250ml">
    </div>
    
    <div class="mb-3">
      <label class="form-label">Description</label>
      <textarea name="description" class="form-control" rows="4" placeholder="Enter product description"></textarea>
    </div>
    
    <div class="mb-3">
      <label class="form-label">Discount (%)</label>
      <input type="number" name="discount" class="form-control" placeholder="Enter discount percentage" step="0.01" min="0" max="100" value="0">
    </div>
    
    <div class="mb-3">
      <label class="form-label">Product Image</label>
      <input type="file" name="image" class="form-control" required accept="image/*">
    </div>
    
    <div class="d-flex gap-2">
      <button type="submit" name="save" class="btn btn-success">
        <i class="fas fa-save"></i> Save Product
      </button>
      <a href="dashboard.php" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Back to Dashboard
      </a>
    </div>
  </form>
</body>
</html>
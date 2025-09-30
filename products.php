<?php
$host = 'localhost';
$db   = 'bookstore';  
$user = 'book';     
$pass = '';       

try {
  $pdo = new PDO("mysql:host=localhost;dbname=your_database", "book", ""); // or use password
  echo "✅ Connected successfully";
} catch (PDOException $e) {
  echo "❌ Connection failed: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Books - Simple Bookstore</title>
  <link rel="stylesheet" href="css/styles.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
</head>
<body>

  <!-- Navigation -->
  <header class="site-header">
    <div class="nav-grid container">
      <div class="logo">📚 Simple Bookstore</div>
      <nav class="nav-links">
        <a href="index.php">Home</a>
        <a href="products.php" class="active">Books</a>
        <a href="contact.php">Contact</a>
      </nav>
    </div>
  </header>

  <!-- Products Section -->
  <section class="featured container" style="padding-top: 60px; padding-bottom: 60px;">
    <h2>All Books</h2>
    <div class="product-grid">
      <?php foreach ($books as $book): ?>
      <div class="product-card">
        <img src="images/<?php echo htmlspecialchars($book['image']); ?>" alt="<?php echo htmlspecialchars($book['title']); ?>" />
        <h3><?php echo htmlspecialchars($book['title']); ?></h3>
        <p>by <?php echo htmlspecialchars($book['author']); ?></p>
        <p class="price">₹<?php echo number_format($book['price'], 2); ?></p>
        <button>View Details</button>
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- Footer -->
  <footer class="site-footer">
    <div class="container">
      <p>&copy; 2025 Simple Bookstore. All rights reserved.</p>
    </div>
  </footer>

</body>
</html>

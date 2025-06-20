<?php

session_start();
$pageTitle = "Jersey Store - Premium Sports Jerseys & Accessories";

$featuredProducts = [
  [
    'name' => 'Premium Jersey',
    'description' => 'Official Jersey Retro',
    'price' => '94.99',
    'image' => 'image/L1.png',
    'link' => 'jersey.php'
  ],
  [
    'name' => 'Premium Jersey',
    'description' => 'Official Jersey Retro',
    'price' => '94.99',
    'image' => 'image/bayern1.png',
    'link' => 'jersey.php'
  ],
  [
    'name' => 'Premium Accessories',
    'description' => 'Official Team Accessories',
    'price' => '150.00',
    'image' => 'image/madrid1.png',
    'link' => 'jersey.php'
  ],
  [
    'name' => 'Premium Accessories',
    'description' => 'Official Team Accessories',
    'price' => '37.79',
    'image' => 'image/milan.png',
    'link' => 'accessories.php'
  ]
];

$testimonials = [
  [
    'quote' => 'The quality of the jersey is exceptional. The delivery is fast and the customer service is very good!',
    'author' => 'Iqbal Habibi',
    'rating' => 5
  ],
  [
    'quote' => 'I have ordered several times and have never been disappointed. The products are genuine at very affordable prices.',
    'author' => 'Rizki Alvian',
    'rating' => 5
  ],
  [
    'quote' => 'A very diverse selection of accessories. The delivery was a bit late, but the product is truly worth the wait',
    'author' => 'Hegel Pidela',
    'rating' => 4
  ]
];

$currentPage = basename($_SERVER['PHP_SELF']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
      <div class="container">
        <a class="navbar-brand fw-bold fs-4" href="index.php">Legacy Sportwear</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo ($currentPage == 'jersey.php') ? 'active' : ''; ?>" href="jersey.php">Jerseys</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo ($currentPage == 'accessories.php') ? 'active' : ''; ?>" href="accessories.php">Accessories</a>
            </li>
          </ul>
          <div class="d-flex align-items-center">
            <button class="btn btn-link text-dark me-3">
              <i class="bi bi-search"></i>
            </button>
            
<?php if (isset($_SESSION['username'])): ?>
  <div class="dropdown me-3">
<button class="btn btn-link text-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
  <i class="bi bi-person"></i>
</button>

    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="profil.php">Profil</a></li>
      <li><a class="dropdown-item" href="logout.php">Logout</a></li>
    </ul>
  </div>
<?php else: ?>
  <a href="login.php" class="btn btn-link text-dark me-3">
    <i class="bi bi-person"></i>
  </a>
<?php endif; ?>

            <a href="cart.php" class="btn btn-link text-dark position-relative">
              <i class="bi bi-cart fs-5"></i>
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                0
              </span>
            </a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section class="hero-section py-5">
      <div class="container py-5">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <h1 class="display-4 fw-bold mb-4">Premium Sports Jersey & Accessories</h1>
            <p class="lead mb-4">
              Get the latest jersey from your favorite team and players with premium quality and authentic design.
            </p>
            <div class="d-flex flex-column flex-sm-row gap-3">
              <a href="jersey.php" class="btn btn-light text-primary fw-bold px-4 py-3">Shop Jerseys</a>
              <a href="accessories.php" class="btn btn-outline-light fw-bold px-4 py-3">Shop Accessories</a>
            </div>
          </div>
          <div class="col-lg-6">
            <img src="image/w1.png" class="img-fluid rounded shadow">
          </div>
        </div>
      </div>
    </section>

    <section class="py-5">
      <div class="container py-4">
        <h2 class="text-center fw-bold mb-5">Special Products</h2>
        <div class="row g-4">
          <div class="col-md-6">
            <div class="position-relative overflow-hidden rounded shadow category-card">
              <img src="image/barca1.png" alt="Jerseys" class="w-100 category-img">
              <div class="position-absolute bottom-0 start-0 w-100 p-4 text-white category-overlay">
                <h3 class="fw-bold mb-2">Jerseys</h3>
                <p class="mb-3">Authentic jerseys from top leagues around the world</p>
                <a href="jersey.php" class="btn btn-light text-primary fw-bold">View Collection</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="position-relative overflow-hidden rounded shadow category-card">
              <img src="image/juv.jpeg" alt="Accessories" class="w-100 category-img">
              <div class="position-absolute bottom-0 start-0 w-100 p-4 text-white category-overlay">
                <h3 class="fw-bold mb-2">Accessories</h3>
                <p class="mb-3">Complete your look with our premium sports accessories</p>
                <a href="accessories.php" class="btn btn-light text-primary fw-bold">View Collection</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5 featured-products">
      <div class="container py-4">
        <h2 class="text-center fw-bold mb-5">Featured Products</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
          <?php foreach ($featuredProducts as $product): ?>
            <div class="col">
              <div class="card h-100 shadow-sm product-card">
                <a href="<?php echo htmlspecialchars($product['link']); ?>" class="text-decoration-none">
                  <img src="<?php echo htmlspecialchars($product['image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($product['name']); ?>">
                  <div class="card-body">
                    <h5 class="card-title fw-semibold text-dark"><?php echo htmlspecialchars($product['name']); ?></h5>
                    <p class="card-text text-muted"><?php echo htmlspecialchars($product['description']); ?></p>
                    <div class="d-flex justify-content-between align-items-center">
                      <span class="fw-bold text-primary fs-5">$<?php echo htmlspecialchars($product['price']); ?></span>
                      <button class="btn btn-primary rounded-circle">
                        <i class="bi bi-cart"></i>
                      </button>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="py-5">
      <div class="container py-4">
        <h2 class="text-center fw-bold mb-5">Reviews and Ratings</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <?php foreach ($testimonials as $testimonial): ?>
            <div class="col">
              <div class="card h-100 shadow-sm p-4 testimonial-card">
                <div class="mb-3">
                  <?php for ($i = 1; $i <= 5; $i++): ?>
                    <i class="bi <?php echo ($i <= $testimonial['rating']) ? 'bi-star-fill' : 'bi-star'; ?>"></i>
                  <?php endfor; ?>
                </div>
                <p class="card-text text-muted mb-4">"<?php echo htmlspecialchars($testimonial['quote']); ?>"</p>
                <p class="fw-semibold mb-0"><?php echo htmlspecialchars($testimonial['author']); ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  </main>

  <footer class="pt-5 pb-3">
    <div class="container">
      <div class="row g-4 mb-4">
        <div class="col-lg-3 col-md-6">
          <h3 class="fs-4 fw-bold mb-3">Legacy Sportwear</h3>
          <p class="text-muted">Your one-stop shop for authentic sports jerseys and accessories.</p>
        </div>
        <div class="col-lg-3 col-md-6">
          <h4 class="fs-5 fw-semibold mb-3">Shop</h4>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="jersey.php">Jerseys</a></li>
            <li class="mb-2"><a href="accessories.php">Accessories</a></li>
            <li class="mb-2"><a href="jersey.php">New Arrivals</a></li>
            <li class="mb-2"><a href="jersey.php">Sale</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6">
          <h4 class="fs-5 fw-semibold mb-3">Help</h4>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="#">Contact Us</a></li>
            <li class="mb-2"><a href="#">Shipping</a></li>
            <li class="mb-2"><a href="#">Returns</a></li>
            <li class="mb-2"><a href="#">FAQ</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6">
          <h4 class="fs-5 fw-semibold mb-3">Newsletter</h4>
          <p class="text-muted mb-3">Subscribe to get special offers and updates.</p>
          <div class="input-group">
            <input type="email" class="form-control" placeholder="Your email">
            <button class="btn btn-primary" type="button">Subscribe</button>
          </div>
        </div>
      </div>
      <div class="border-top border-secondary pt-4 text-center text-muted">
        <p>&copy; <?php echo date("Y"); ?> Legacy Sportwear. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>
</body>
<?php

$pageTitle = "Jerseys - Jersey Store";

$jerseys = [
  [
    'id' => 1,
    'team' => 'FC Barcelona',
    'name' => 'Retro Jersey',
    'price' => '94.99',
    'image' => 'image/barca1.png',
    'gallery_images' => [
      'image/barca1.png',          
      'image/barca2.png',   
      'image/barca3.png', 
    ],
    'alt' => 'FC Barcelona Jersey',
    'sizes' => ['All Size'],
    'colors' => ['Red', 'White'],
    'description' => 'A high-quality retro jersey celebrating the heritage of FC Barcelona. Perfect for loyal fans.'
  ],
  [
    'id' => 2,
    'team' => 'Liverpol FC',
    'name' => 'Retro Jersey',
    'price' => '94.99',
    'image' => 'image/L1.png',
    'gallery_images' => [
      'image/L1.png',          
      'image/L2.png',   
      'Image/L3.png', 
    ],
    'alt' => 'Liverpol FC Jersey',
    'sizes' => ['All Size'],
    'colors' => ['Red', 'Black'],
    'description' => 'Show your support with this authentic retro jersey for Liverpol FC. Classic design and premium comfort.'
  ],
  [
    'id' => 3,
    'team' => 'Mancester United',
    'name' => 'Retro Jersey',
    'price' => '94.99',
    'image' => 'image/m1.png',
    'gallery_images' => [
      'image/m1.png',          
      'image/m2.png',   
      'image/m3.png', 
    ],
    'alt' => 'Mancester United Jersey',
    'sizes' => ['All Size'],
    'colors' => ['Blue', 'Garnet'],
    'description' => 'The iconic blue and garnet stripes of Mancester United in a classic retro style. Made with breathable fabric.'
  ],
  [
    'id' => 4,
    'team' => 'Bayern Munich',
    'name' => 'Retro Jersey',
    'price' => '94.99',
    'image' => 'image/bayern1.png',
    'gallery_images' => [
      'image/bayern1.png',          
      'image/bayern2.png',   
      'image/bayern3.png', 
    ],
    'alt' => 'Bayern Munich Jersey',
    'sizes' => ['All Size'],
    'colors' => ['Red', 'White'],
    'description' => 'The official retro jersey for the German champions, Bayern Munich. A must-have for any supporter.'
  ],
  [
    'id' => 5,
    'team' => 'Aston Villa',
    'name' => 'Retro Jersey',
    'price' => '89.99',
    'image' => 'image/a1.png',
    'gallery_images' => [
      'image/a1.png',          
      'image/a2.png',   
      'image/a3.png', 
    ],
    'alt' => 'Aston Villa Jersey',
    'sizes' => ['All Size'],
    'colors' => ['Claret', 'Blue'],
    'description' => 'A classic Aston Villa jersey featuring the traditional claret and blue colors.'
  ],
  [
    'id' => 6,
    'team' => 'Real Betis',
    'name' => 'Retro Jersey',
    'price' => '89.99',
    'image' => 'image/rb1.png',
    'gallery_images' => [
      'image/rb1.png',          
      'image/rb2.png',   
      'image/rb3.png', 
    ],
    'alt' => 'Real Betis Jersey',
    'sizes' => ['All Size'],
    'colors' => ['Green', 'White'],
    'description' => 'Support Real Betis with this stunning retro jersey featuring their iconic green and white stripes.'
  ],
  [
    'id' => 7,
    'team' => 'Persebaya Surabaya',
    'name' => 'Retro Jersey',
    'price' => '84.99',
    'image' => 'image/surabaya1.png',
    'gallery_images' => [
      'image/surabaya1.png',          
      'image/surabay2.png',   
      'image/surabaya3.png', 
    ],
    'alt' => 'Persebaya Surabaya Jersey',
    'sizes' => ['All Size'],
    'colors' => ['Green'],
    'description' => 'The official "Green Force" jersey for Persebaya Surabaya supporters. Show your local pride.'
  ],
  [
    'id' => 8,
    'team' => 'Persib Bandung',
    'name' => 'Retro Jersey',
    'price' => '84.99',
    'image' => 'image/bandung1.png',
    'gallery_images' => [
      'image/bandung1.png',          
      'image/bandung2.png',   
      'image/bandung3.png', 
    ],
    'alt' => 'Persib Bandung Jersey',
    'sizes' => ['All Size'],
    'colors' => ['Blue'],
    'description' => 'Wear the blue of the "Maung Bandung" with this official retro jersey for Persib Bandung.'
  ]
];

$currentPage = basename($_SERVER['PHP_SELF']);

$teams = array_unique(array_column($jerseys, 'team'));
sort($teams);

$allSizes = array_reduce(array_column($jerseys, 'sizes'), 'array_merge', []);
$sizes = array_unique($allSizes);
sort($sizes);

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
            <button class="btn btn-link text-dark me-3">
              <i class="bi bi-person"></i>
            </button>
            <button class="btn btn-link text-dark position-relative">
              <i class="bi bi-cart"></i>
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                0
              </span>
            </button>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <div class="container py-5">
      <div class="mb-4">
        <h1 class="fw-bold mb-2">Football Jerseys</h1>
        <p class="text-muted">Authentic jerseys from top teams around the world</p>
      </div>

      <div class="bg-light p-4 rounded mb-5">
        <div class="row g-3">
          <div class="col-md-3">
            <label class="form-label fw-medium">Team</label>
            <select class="form-select">
              <option value="">All Teams</option>
              <?php foreach ($teams as $team): ?>
                <option><?php echo htmlspecialchars($team); ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="col-md-3">
            <label class="form-label fw-medium">Size</label>
            <select class="form-select">
              <option value="">All Sizes</option>
              <?php foreach ($sizes as $size): ?>
                <option><?php echo htmlspecialchars($size); ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="col-md-3">
            <label class="form-label fw-medium">Price Range</label>
            <select class="form-select">
              <option value="">All Prices</option>
              <option>Under $50</option>
              <option>$50 - $100</option>
              <option>$100 - $150</option>
              <option>Over $150</option>
            </select>
          </div>
          <div class="col-md-3 d-flex align-items-end">
            <button class="btn btn-primary w-100">Apply Filters</button>
          </div>
        </div>
      </div>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
        <?php foreach ($jerseys as $jersey): ?>
          <div class="col">
            <div class="card h-100 shadow-sm product-card" data-bs-toggle="modal" data-bs-target="#jerseyModal" data-jersey-id="<?php echo $jersey['id']; ?>">
              <div class="position-relative">
                <img src="<?php echo htmlspecialchars($jersey['image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($jersey['alt']); ?>">
                <button class="btn btn-light position-absolute top-0 end-0 m-2 rounded-circle p-1 favorite-btn">
                  <i class="bi bi-heart"></i>
                </button>
              </div>
              <div class="card-body">
                <h5 class="card-title fw-semibold"><?php echo htmlspecialchars($jersey['team']); ?></h5>
                <p class="card-text text-muted"><?php echo htmlspecialchars($jersey['name']); ?></p>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="fw-bold text-primary fs-5">$<?php echo htmlspecialchars($jersey['price']); ?></span>
                  <button class="btn btn-primary rounded-circle">
                    <i class="bi bi-cart"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="modal fade" id="jerseyModal" tabindex="-1" aria-labelledby="jerseyModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header border-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6 mb-4 mb-md-0">
                <div class="row">
                  <div class="col-2">
                    <div id="modalThumbnailContainer" class="d-flex flex-column gap-2">
                    </div>
                  </div>
                  <div class="col-10">
                    <img id="modalMainImage" src="https://placehold.co/600x600/eee/ccc?text=Jersey" class="img-fluid rounded" alt="Jersey Preview">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <h2 id="modalTeam" class="fw-bold mb-1">Team Name</h2>
                <h3 id="modalName" class="text-muted mb-4">Jersey Name</h3>
                <p id="modalPrice" class="fs-4 fw-bold text-primary mb-4">$00.00</p>
                <p id="modalDescription" class="text-muted mb-4">Jersey description goes here.</p>

                <div class="mb-4">
                  <h4 class="fw-semibold mb-2">Size</h4>
                  <div id="modalSizeOptions" class="btn-group size-selector" role="group">
                  </div>
                </div>
                <!-- 
                <div class="mb-4">
                  <h4 class="fw-semibold mb-2">Color</h4>
                  <div id="modalColorOptions" class="btn-group color-selector" role="group">
                  </div>
                </div> -->

                <div class="d-flex gap-3 p-5">
                  <button class="btn btn-primary flex-grow-1 d-flex align-items-center justify-content-center gap-2">
                    <i class="bi bi-cart"></i> Add to Cart
                  </button>
                  <button class="btn btn-outline-secondary">
                    <i class="bi bi-heart"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
  <script>
    const jerseyData = <?php echo json_encode($jerseys); ?>
  </script>
  <script src="js/script.js"></script>
</body>

</html>
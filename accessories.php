<?php

$pageTitle = "Accessories";
$accessoryDescription = "A collection of stylish accessories that combine comfort and functionality.";

$accessories = [
  [
    'id' => 1,
    'name' => 'Wireless Earbuds',
    'category' => 'Juventus FC',
    'price' => '43.19',
    'image' => 'image/juv.jpeg',
    'gallery_images' => [
      'image/juv.jpeg',
      'image/jv.png',
      '',
    ],
    'colors' => ['Red', 'Black', 'White']
  ],
  [
    'id' => 2,
    'name' => 'Training Ball',
    'category' => 'Inter Milan',
    'price' => '37.79',
    'image' => 'image/milan.png',
    'gallery_images' => [
      'image/milan.png',
      'image/inter.png',
      '',
    ],
    'colors' => ['White', 'Orange', 'Yellow']
  ],
  [
    'id' => 3,
    'name' => 'Locker Room Piece',
    'category' => 'Real Madrid',
    'price' => '150.00',
    'image' => 'image/madrid1.png',
    'gallery_images' => [
      'image/madrid1.png',
      'image/madrid2.png',
      '',
    ],
    'colors' => ['White', 'Blue', 'Black']
  ],
  [
    'id' => 4,
    'name' => 'Breguet Queen of Naples',
    'category' => 'SSC Napoli',
    'price' => '214.99',
    'image' => 'image/n1.png',
    'gallery_images' => [
      'image/n1.png',
      'image/n2.png',
      '',
    ],
    'colors' => ['Black', 'Grey']
  ],
  [
    'id' => 5,
    'name' => 'Socks',
    'category' => 'Liverpol FC',
    'price' => '22.86',
    'image' => 'image/LFC.png',
    'gallery_images' => [
      'image/LFC.png',
      '',
      '',
    ],
    'colors' => ['Grey', 'Black']
  ],
  [
    'id' => 6,
    'name' => 'Bag',
    'category' => 'Persebaya Surabaya',
    'price' => '18.21',
    'image' => 'image/persebaya.png',
    'gallery_images' => [
      'image/persebaya.png',
      '',
      '',
    ],
    'colors' => ['Green', 'Black', 'White']
  ],
  [
    'id' => 7,
    'name' => 'Water Bottle',
    'category' => 'FC Barcelona',
    'price' => '16.19',
    'image' => 'image/botol.jpg',
    'gallery_images' => [
      'image/botol.jpg',
      'image/botol2.png',
      '',
    ],
    'colors' => ['Blue', 'White']
  ],
  [
    'id' => 8,
    'name' => 'Scarf',
    'category' => 'Mancester United',
    'price' => '15.62',
    'image' => 'image/scarves MU.jpg',
    'gallery_images' => [
      'image/scarves MU.jpg',
      '',
      '',
    ],
    'colors' => ['Transparent', 'Black']
  ]
];

$currentPage = basename($_SERVER['PHP_SELF']);

$categories = array_unique(array_column($accessories, 'category'));

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $pageTitle; ?> - Jersey Store</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <header class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
      <div class="container">
        <a class="navbar-brand fw-bold fs-4" href="index.php">Legacy Sportwear</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav">
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
              <span
                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
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
        <h1 class="fw-bold mb-2">Sports Accessories</h1>
        <p class="text-muted">
          Complete your sports gear with our premium accessories
        </p>
      </div>

      <div class="bg-light p-4 rounded mb-5">
        <div class="row g-3">
          <div class="col-md-3">
            <label class="form-label fw-medium">Category</label>
            <select class="form-select">
              <option value="">All Categories</option>
              <?php foreach ($categories as $category): ?>
                <option><?php echo htmlspecialchars($category); ?></option>
              <?php endforeach; ?>
              <option>Tas</option>
              <option>Peralatan</option>
            </select>
          </div>
          <div class="col-md-3">
            <label class="form-label fw-medium">Price Range</label>
            <select class="form-select">
              <option value="">All Prices</option>
              <option>Di bawah $20</option>
              <option>$20 - $30</option>
              <option>$30 - $50</option>
              <option>Di atas $50</option>
            </select>
          </div>
          <div class="col-md-3">
            <label class="form-label fw-medium">Sort By</label>
            <select class="form-select">
              <option>Featured</option>
              <option>Harga: Rendah ke Tinggi</option>
              <option>Harga: Tinggi ke Rendah</option>
              <option>Terbaru</option>
            </select>
          </div>
          <div class="col-md-3 d-flex align-items-end">
            <button class="btn btn-primary w-100">Apply Filters</button>
          </div>
        </div>
      </div>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
        <?php foreach ($accessories as $accessory): ?>
          <div class="col">
            <div
              class="card h-100 shadow-sm product-card"
              data-bs-toggle="modal"
              data-bs-target="#accessoryModal"
              data-accessory-id="<?php echo $accessory['id']; ?>">
              <div class="position-relative">
                <img
                  src="<?php echo htmlspecialchars($accessory['image']); ?>"
                  class="card-img-top"
                  alt="<?php echo htmlspecialchars($accessory['name']); ?>" />
                <button
                  class="btn btn-light position-absolute top-0 end-0 m-2 rounded-circle p-1 favorite-btn">
                  <i class="bi bi-heart"></i>
                </button>
              </div>
              <div class="card-body">
                <span class="badge bg-light text-dark mb-2"><?php echo htmlspecialchars($accessory['category']); ?></span>
                <h5 class="card-title fw-semibold"><?php echo htmlspecialchars($accessory['name']); ?></h5>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="fw-bold text-primary fs-5">$<?php echo htmlspecialchars($accessory['price']); ?></span>
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

    <div
      class="modal fade"
      id="accessoryModal"
      tabindex="-1"
      aria-labelledby="accessoryModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header border-0">
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6 mb-4 mb-md-0">
                <div class="row">
                  <div class="col-2">
                    <div id="accessoryModalThumbnailContainer" class="d-flex flex-column gap-2">
                    </div>
                  </div>
                  <div class="col-10">
                    <img id="accessoryModalMainImage" src="https://placehold.co/600x600/eee/ccc?text=Accessory" class="img-fluid rounded" alt="Accessory Preview">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <span
                  id="accessoryModalCategory"
                  class="badge bg-light text-dark mb-2">Kategori</span>
                <h2 id="accessoryModalName" class="fw-bold mb-4">
                  Nama Aksesori
                </h2>
                <p
                  id="accessoryModalPrice"
                  class="fs-4 fw-bold text-primary mb-4">
                  $00.00
                </p>
                <p id="accessoryModalDescription" class="text-muted mb-4">
                  <?php echo htmlspecialchars($accessoryDescription); ?>
                </p>

                <div class="mb-4">
                  <h4 class="fw-semibold mb-2">Warna</h4>
                  <div
                    id="accessoryColorOptions"
                    class="btn-group color-selector"
                    role="group"></div>
                </div>

                <div class="mb-4">
                  <h4 class="fw-semibold mb-2">Jumlah</h4>
                  <div class="input-group" style="width: 140px">
                    <button
                      class="btn btn-outline-secondary"
                      type="button"
                      id="decrementQuantity">
                      -
                    </button>
                    <input
                      type="number"
                      class="form-control text-center"
                      value="1"
                      min="1"
                      id="quantityInput" />
                    <button
                      class="btn btn-outline-secondary"
                      type="button"
                      id="incrementQuantity">
                      +
                    </button>
                  </div>
                </div>

                <div class="d-flex gap-3">
                  <button
                    class="btn btn-primary flex-grow-1 d-flex align-items-center justify-content-center gap-2">
                    <i class="bi bi-cart"></i> Tambah ke Keranjang
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
          <p class="text-muted">
            Your one-stop shop for authentic sports jerseys and accessories..
          </p>
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
          <p class="text-muted mb-3">
            Subscribe to get special offers and updates.
          </p>
          <div class="input-group">
            <input
              type="email"
              class="form-control"
              placeholder="Your Email" />
            <button class="btn btn-primary" type="button">
              Subscribe
            </button>
          </div>
        </div>
      </div>
      <div class="border-top border-secondary pt-4 text-center text-muted">
        <p>
          &copy;
          <?php echo date("Y"); ?>
          Legacy Sportwear. All rights reserved.
        </p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const accessoryData = <?php echo json_encode($accessories); ?>;
  </script>
  <script src="js/script.js"></script>
</body>

</html>
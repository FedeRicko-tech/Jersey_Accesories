<?php

$pageTitle = "Keranjang Belanja - JerseyStore";
$currentPage = basename($_SERVER['PHP_SELF']);

$sample_cart_items = [
  'J01' => [
    'name' => 'FC Barcelona',
    'price' => 94.99,
    'image' => 'image/barca1.png',
    'quantity' => 1
  ],
  'A04' => [
    'name' => 'Wireless Earbuds',
    'price' => 43.19,
    'image' => 'image/juv.jpeg',
    'quantity' => 1
  ]
];

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
            <button class="btn btn-link text-dark me-3"><i class="bi bi-search"></i></button>
            <button class="btn btn-link text-dark me-3"><i class="bi bi-person"></i></button>
            <a href="cart.php" class="btn btn-link text-dark position-relative">
              <i class="bi bi-cart fs-5"></i>
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                <?php echo count($sample_cart_items); ?>
              </span>
            </a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <div class="container py-5">
      <h1 class="fw-bold mb-4">Your Shopping Cart</h1>


      <div class="table-responsive">
        <table class="table align-middle">
          <thead>
            <tr>
              <th scope="col" colspan="2" class="ps-0">Product</th>
              <th scope="col">Price</th>
              <th scope="col" class="text-center">Amount</th>
              <th scope="col" class="text-end">Subtotal</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php
            $grand_total = 0;
            foreach ($sample_cart_items as $id => $item):
              $subtotal = $item['price'] * $item['quantity'];
              $grand_total += $subtotal;
            ?>
              <tr>
                <td style="width: 100px;" class="ps-0">
                  <img src="<?php echo htmlspecialchars($item['image']); ?>" class="img-fluid rounded" alt="<?php echo htmlspecialchars($item['name']); ?>">
                </td>
                <td><?php echo htmlspecialchars($item['name']); ?></td>
                <td>$<?php echo number_format($item['price'], 2); ?></td>
                <td class="text-center">
                  <input type="number" value="<?php echo $item['quantity']; ?>" min="1" class="form-control form-control-sm mx-auto" style="width: 70px;">
                </td>
                <td class="text-end">$<?php echo number_format($subtotal, 2); ?></td>
                <td class="text-end">
                  <a href="#" class="btn btn-sm btn-outline-danger" title="Hapus item">&times;</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <div class="row justify-content-end mt-4">
        <div class="col-md-5 col-lg-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title fw-bold d-flex justify-content-between">
                <span>Total Belanja</span>
                <span class="text-primary">$<?php echo number_format($grand_total, 2); ?></span>
              </h5>
              <div class="d-grid gap-2 mt-4">
                <a href="#" class="btn btn-primary">Lanjut ke Checkout</a>
                <a href="#" class="btn btn-outline-danger">Kosongkan Keranjang</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>

  <footer class="pt-5 pb-3">
    <div class="container">
      <div class="border-top border-secondary pt-4 text-center text-muted">
        <p>&copy; <?php echo date("Y"); ?> Legacy Sportwear. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>
</body>

=======
<?php

$pageTitle = "Keranjang Belanja - JerseyStore";
$currentPage = basename($_SERVER['PHP_SELF']);

$sample_cart_items = [
  'J01' => [
    'name' => 'FC Barcelona',
    'price' => 94.99,
    'image' => 'image/barca1.png',
    'quantity' => 1
  ],
  'A04' => [
    'name' => 'Wireless Earbuds',
    'price' => 43.19,
    'image' => 'image/juv.jpeg',
    'quantity' => 1
  ]
];

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
            <button class="btn btn-link text-dark me-3"><i class="bi bi-search"></i></button>
            <button class="btn btn-link text-dark me-3"><i class="bi bi-person"></i></button>
            <a href="cart.php" class="btn btn-link text-dark position-relative">
              <i class="bi bi-cart fs-5"></i>
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                <?php echo count($sample_cart_items); ?>
              </span>
            </a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <div class="container py-5">
      <h1 class="fw-bold mb-4">Your Shopping Cart</h1>


      <div class="table-responsive">
        <table class="table align-middle">
          <thead>
            <tr>
              <th scope="col" colspan="2" class="ps-0">Product</th>
              <th scope="col">Price</th>
              <th scope="col" class="text-center">Amount</th>
              <th scope="col" class="text-end">Subtotal</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php
            $grand_total = 0;
            foreach ($sample_cart_items as $id => $item):
              $subtotal = $item['price'] * $item['quantity'];
              $grand_total += $subtotal;
            ?>
              <tr>
                <td style="width: 100px;" class="ps-0">
                  <img src="<?php echo htmlspecialchars($item['image']); ?>" class="img-fluid rounded" alt="<?php echo htmlspecialchars($item['name']); ?>">
                </td>
                <td><?php echo htmlspecialchars($item['name']); ?></td>
                <td>$<?php echo number_format($item['price'], 2); ?></td>
                <td class="text-center">
                  <input type="number" value="<?php echo $item['quantity']; ?>" min="1" class="form-control form-control-sm mx-auto" style="width: 70px;">
                </td>
                <td class="text-end">$<?php echo number_format($subtotal, 2); ?></td>
                <td class="text-end">
                  <a href="#" class="btn btn-sm btn-outline-danger" title="Hapus item">&times;</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <div class="row justify-content-end mt-4">
        <div class="col-md-5 col-lg-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title fw-bold d-flex justify-content-between">
                <span>Total Belanja</span>
                <span class="text-primary">$<?php echo number_format($grand_total, 2); ?></span>
              </h5>
              <div class="d-grid gap-2 mt-4">
                <a href="#" class="btn btn-primary">Lanjut ke Checkout</a>
                <a href="#" class="btn btn-outline-danger">Kosongkan Keranjang</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>

  <footer class="pt-5 pb-3">
    <div class="container">
      <div class="border-top border-secondary pt-4 text-center text-muted">
        <p>&copy; <?php echo date("Y"); ?> Legacy Sportwear. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>
</body>

>>>>>>> 3f27238 (Initial commit)
</html>
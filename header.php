<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="css/header.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="icon" href="images/1.png" type="image/x-icon">


</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid my-class-with-padding">
        <div class="cotainer-fluid img-1">
        <a class="nav-brand" href="index.php"><img src="images/LogoBig.png" alt=""></a>
        </div>
        <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 links">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="tops.php">Tops</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="sale.php">Sale</a>
            </li>
          </ul>
          <div class="navbar-nav mb-2 mb-lg-0 cart">
              <div class="header-meta d-flex clearfix justify-content-end">
                <div class="user-login-info">
                    <a href="signup.php"><img src="images/Icons/user.png" alt="login"></a>
                </div>
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="images/Icons/Shoppingcart.png" alt="cart"> </a>
                </div>
              </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <div class="cart-bg-overlay"></div>

    <div class="right-side-cart-area">

        <!-- Cart Button -->
        <div class="cart-button">
            <a href="#" id="rightSideCart"><img src="images/Icons/Shoppingcart.png" alt=""></a>
        </div>

        <div class="cart-content d-flex">

            <!-- Cart List Area -->
            <div class="cart-list">
                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="images/model7.png" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge"></span>
                            <h6>Sweater</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: White</p>
                            <p class="price">70.00€</p>
                        </div>
                    </a>
                </div>

                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="images/model7.png" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                          <span class="badge"></span>
                            <h6>Sweater</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: White</p>
                            <p class="price">70.00€</p>
                        </div>
                    </a>
                </div>

                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="images/model7.png" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                          <span class="badge"></span>
                            <h6>Sweater</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: White</p>
                            <p class="price">70.00€</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Cart Summary -->
            <div class="cart-amount-summary">

                <h2>Summary</h2>
                <ul class="summary-table">
                    <li><span>subtotal:</span> <span>0.00€</span></li>
                    <li><span>delivery:</span> <span>Free</span></li>
                    <li><span>discount:</span> <span>%</span></li>
                    <li><span>total:</span> <span>0.00€</span></li>
                </ul>
                <div class="checkout-btn mt-100">
                    <a href="checkout.html" class="btn cecile-btn">check out</a>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/active.js"></script>

  <div class="container">
    <div class="row breadcrumbs">
      <div class="col-12 p-4">
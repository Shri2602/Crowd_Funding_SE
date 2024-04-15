

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CrowdFunding</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <title>Payment Form</title>
  <style>
    .payment-form {
      background-color: #f2f2f2;
      padding: 20px;
      border-radius: 10px;
      text-align: center;
    }

    input[type="text"],
    input[type="number"] {
      padding: 10px;
      font-size: 16px;
      margin-bottom: 20px;
      border-radius: 5px;
      border: 1px solid #ccc;
      width: 100%;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    input[type="submit"]:hover {
      background-color: #3e8e41;
    }
  </style>
</head>
<body>
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+91-9373271341</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <img src="admin/assets/img/logo.png" alt="Logo" width="100" height="100" style="margin-bottom: -50px;">
        <br>
        <br>
        
        <h1 class="text-light"><a href="index.html">CrowdFunding</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="after_login.php">Home</a></li>
          <li><a href="about2.html">About</a></li>
          <li><a href="contact2.html">Contact</a></li>
          <li><a href="campaign-list1.php">List of Campaign</a></li>
          <li><a href="campaign.php">Add Your Campaign</a></li>
          <li><a href="logout.php">Logout</a></li>
          <li><a href="#">/</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <br>
  <br>
  <div class="payment-form">
    <h2>Select Payment Option</h2>
    <br>
    <!-- <form action="https://www.paypal.com/cgi-bin/webscr" method="post"> -->
      <form action="create_payment.php" method="post"> 
      <input type="hidden" name="cmd" value="_xclick">
      <input type="hidden" name="business" value="you@yourbusiness.com">
      <input type="hidden" name="item_name" value="Payment">
      <input type="hidden" name="item_number" value="1">
      <input type="hidden" name="amount" value="10.00">
      <input type="hidden" name="currency_code" value="USD">
      <input type="submit" value="Pay Using Payment Gateway">
      <br>
      <br>
    </form>
    <form action="QR.php">
       <input type="submit" value="Pay By Scanning QR Code">
       <br>
      <br>
    </form>
    <form action="Bank.php">
      <input type="submit" value="Online Bank Transfer">
    </form>
       

    </form>
  </div>

</body>
</html>





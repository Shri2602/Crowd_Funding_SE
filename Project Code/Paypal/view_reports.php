<html>
<head>
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

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">crowdfunding@gmail.com</a></i>
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
          <li><a class="active" href="admin_dash.php">Home</a></li>
        
          <li><a href="campaign-list1.php">List of Campaign</a></li>
          <li><a href="logout.php">Logout</a></li>
          <li><a href="#">/</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <style>
    table.donations {
  border-collapse: collapse;
  width: 100%;
}

table.donations th, table.donations td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: left;
}

table.donations th {
  background-color: #4CAF50;
  color: white;
}

  </style>
</head>
<br>

<h2><center>Donation Details</center></h2>
<br>

<?php
// MySQL database credentials
$host = "localhost";
$username = "root";
$password = "";
$database = "login";

// Create database connection
$mysqli = new mysqli($host, $username, $password, $database);

// Check if the connection was successful
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Query the donations table to get the report data
$sql = "SELECT * FROM donations_proof";
$result = $mysqli->query($sql);

// Create a table to display the report
echo '<table class="donations">';
echo '<tr><th>ID</th><th>Name</th><th>Email</th><th>Campaign</th><th>Amount</th><th>Date</th><th>Donation Proof</th><th>Action</th</tr>';

// Loop through the query results and output each row as a table row
while ($row = $result->fetch_assoc()) {
    echo '<tr>';
    echo '<td>' . $row['id'] . '</td>';
    echo '<td>' . $row['name'] . '</td>';
    echo '<td>' . $row['email'] . '</td>';
    echo '<td>' . $row['campaign'] . '</td>';
    echo '<td>' . $row['amount'] . '</td>';
    echo '<td>' . $row['uploaded_at'] . '</td>';
     echo "<td>
                    <form action='view_proof.php' method='post'>
                        <input type='hidden' name='id' value='".$row["id"]."'>
                        <input type='submit' value='View Proof'>
                    </form>
                  </td>";
                   echo "<td>
                    <form action='delete_donation.php' method='post'>
                        <input type='hidden' name='delete_button' value='".$row["id"]."'>
                        <input type='submit' value='Delete Details'>
                    </form>
                  </td>";
    echo '</tr>';
}

echo '</table>';

// Close the database connection
$mysqli->close();
?>






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CrowdFunding</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!----CSS BootStrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">


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
          <li><a href="index.php">Home</a></li>
          <li><a href="about2.html">About</a></li>
          <li><a href="contact2.html">Contact</a></li>
          <li><a href="campaign-list1.php">List of Campaign</a></li>
          <li><a class="active" href="campaign.php">Add Your Campaign</a></li>
          <li><a href="logout.php">Logout</a></li>
          <li><a href="#">/</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <br>

  <h2 style="margin-top: 20px; text-align: center;">Add Your Campaign - (Become FundRaiser) </h2>
  
  <form action="process_campaign.php" method="post" class="row g-3" style="border: 2px solid black; margin-top: 20px; margin-left: 20px; margin-right: 20px; background-color: rgb(144, 214, 190);">
    <div class="col-md-6">
      <label for="text" class="form-label" style="font-weight: bold; font-family: sans-serif;">Campaign Name: </label>
      <input type="text" class="form-control" id="FullName" placeholder="Enter campaign name" name="campaign_name" required>
    </div>
    <!---- <div class="col-md-10">
      <label for="inputEmail4" class="form-label" style="font-weight: bold; font-family: sans-serif;"> Campaign Name :</label>
     <input type="text" name="campaign_name" placeholder="Enter campaign name">
    </div>---->
    <br> </br>
    <div class="col-md-6">
      <label for="inputCity" class="form-label" style="font-weight: bold; font-family: sans-serif;">City</label>
      <input type="text" class="form-control" name="City" required>
    </div>
    <div class="col-md-4">
      <label for="inputState" class="form-label" style="font-weight: bold; font-family: sans-serif;">State</label>
      <select name="States" class="form-select" required>
        <option value="Andhra Pradesh">Andhra Pradesh</option>
        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
        <option value="Assam">Assam</option>
        <option value="Bihar">Bihar</option>
        <option value="Chandigarh">Chandigarh</option>
        <option value="Chhattisgarh">Chhattisgarh</option>
        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
        <option value="Daman and Diu">Daman and Diu</option>
        <option value="Delhi">Delhi</option>
        <option value="Lakshadweep">Lakshadweep</option>
        <option value="Puducherry">Puducherry</option>
        <option value="Goa">Goa</option>
        <option value="Gujarat">Gujarat</option>
        <option value="Haryana">Haryana</option>
        <option value="Himachal Pradesh">Himachal Pradesh</option>
        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
        <option value="Jharkhand">Jharkhand</option>
        <option value="Karnataka">Karnataka</option>
        <option value="Kerala">Kerala</option>
        <option value="Madhya Pradesh">Madhya Pradesh</option>
        <option value="Maharashtra">Maharashtra</option>
        <option value="Manipur">Manipur</option>
        <option value="Meghalaya">Meghalaya</option>
        <option value="Mizoram">Mizoram</option>
        <option value="Nagaland">Nagaland</option>
        <option value="Odisha">Odisha</option>
        <option value="Punjab">Punjab</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Sikkim">Sikkim</option>
        <option value="Tamil Nadu">Tamil Nadu</option>
        <option value="Telangana">Telangana</option>
        <option value="Tripura">Tripura</option>
        <option value="Uttar Pradesh">Uttar Pradesh</option>
        <option value="Uttarakhand">Uttarakhand</option>
        <option value="West Bengal">West Bengal</option>
      </select>
    </div>
    <div class="col-md-2">
      <label for="inputZip" class="form-label" style="font-weight: bold; font-family: sans-serif;" >Zip</label>
      <input type="text" class="form-control" name="ZIP" required>
    </div>

    <div class="input-group mb-3">
      <label class="input-group-text" for="inputGroupFile01" style="font-weight: bold;" >Upload Campaign Picture (PNG Format Only) :</label>
      <input type="file" class="form-control" accept=".png" name="campaign_picture" required>
    </div>


      <div class="col-12">
          <label for="description" class="form-label" style="font-weight: bold; font-family: sans-serif;">Description</label>
          <textArea class="form-control" id="description1" placeholder="Problem you want To solve with Donations" name="campaign_description" required></textArea>
      </div>
    <!-------<div class="col-md-10">
      <label for="text" class="form-label" style="font-weight: bold; font-family: sans-serif;"></label>
       <input type="text" name="campaign_description" placeholder="Enter campaign description">
    </div>---->

    <div class="col-md-6">
      <label for="inputCity" class="form-label" style="font-weight: bold; font-family: sans-serif;">Goal : </label>
      <input type="text" class="form-control" name="campaign_goal" placeholder="Enter campaign goal amount" required>
       </div>
   <!------ <div class="col-12">
      <label for="inputAddress" class="form-label" style="font-weight: bold; font-family: sans-serif;"></label>
      <input type="text" name="campaign_goal" placeholder="Enter campaign goal amount">
    </div>----->
    <!-- <div class="col-12">
      <label for="inputAddress" class="form-label" style="font-weight: bold; font-family: sans-serif;"></label>
    <input type="file" name="campaign_picture">
  </div> -->
  <br> </br>
  <div class="input-group mb-3">
    <label class="input-group-text" for="inputGroupFile01" style="font-weight: bold;" >Upload Documents (PNG Format Only) </label>
    <input type="file" class="form-control" accept=".png" name="documents" required>
  </div>
  <br> </br>
    <div class="col-12">
      <label for="inputAddress2" class="form-label" style="font-weight: bold; font-family: sans-serif;"></label>
      <input type="submit" name="add_campaign" value="Add Campaign" required>
    </div>
   

  </form>

  <script>
    function myFunction(){
        alert("Your Request Is Submitted, We Will update you after Verification of Your campaign is Done.")
        window.location = 'index.php';
    }
  </script>

</body>
</html>

<?php 

echo "<br>";
echo "<br>";




include 'footer.html';

 ?>

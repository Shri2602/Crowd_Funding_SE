<?php
// Your database connection code goes here
// ...

if (isset($_POST['submit'])) {
  $donor_name = $_POST['donor_name'];
  $campaign = $_POST['campaign'];
  $donation_date = $_POST['donation_date'];
  $amount = $_POST['amount'];
  
  // Generate certificate HTML code
  $certificate_html = "<!DOCTYPE html>
  <html>
  <head>

    <title>Certificate of Donation</title>
    <style>
      /* Advanced CSS styles for the certificate */
                .certificate {
                    font-family: 'Arial';
                    text-align: center;
                    background-color: #f2f2f2;
                    padding: 20px;
                    border: 2px solid #ccc;
                }
                
                .title {
                    font-size: 24px;
                    font-weight: bold;
                    margin-bottom: 20px;
                }
                
                .donor-name {
                    font-size: 20px;
                    margin-bottom: 20px;
                }
            </style>
    </style>
  </head>
  <body>
    <div class='certificate'>
      <h1>Certificate of Donation</h1>
      <p>This certificate is presented to:</p>
      <h2>$donor_name</h2>
      <p>in recognition of their generous donation of:</p>
      <h3> Rs. $amount</h3>
      <p>to the $campaign campaign</p>
      <p>on $donation_date</p>
    </div>
  </body>
  </html>";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Generate Certificate of Donation</title>
  <style>
    /* Advanced CSS styles for the certificate */
                .certificate {
                    font-family: 'Arial';
                    text-align: center;
                    background-color: #f2f2f2;
                    padding: 20px;
                    border: 2px solid #ccc;
                }
                
                .title {
                    font-size: 24px;
                    font-weight: bold;
                    margin-bottom: 20px;
                }
                
                .donor-name {
                    font-size: 20px;
                    margin-bottom: 20px;
                }
  </style>
  <style>
    .donate-form {
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f5f5f5;
  border-radius: 5px;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="number"] {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: none;
  background-color: #eee;
}

button[type="submit"] {
  display: block;
  width: 100%;
  padding: 10px;
  background-color: #4CAF50;
  border: none;
  color: #fff;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
  background-color: #2E8B57;
}

  </style>
  
</head>
<body>
<div class="donate-form">
    <h1>Generate Certificate of Donation</h1>
    <form class="donate-form" method="post">
  <div class="form-group">
    <label for="name">Donator Name</label>
   <input type="text" id="donor_name" name="donor_name"><br>
  </div>
  <div class="form-group">
    <label for="campaign">Campaign</label>
    <?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the campaign names from the database
$sql = "SELECT name FROM campaigns";
$result = mysqli_query($conn, $sql);

// Create a dropdown list with the campaign names
echo "<select name='campaign' required>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
}
echo "</select>";

// Close the database connection
mysqli_close($conn);
?>	
  </div>
  <div class="form-group">
    <label for="email">Donation Date</label>
   <input type="date" id="donation_date" name="donation_date"><br>
  </div>
  <div class="form-group">
    <label for="phone">Amount</label>
    <input type="number" id="amount" name="amount"><br>
  </div>
  <button type="submit" name="submit">Generate Certificate</button>
</form>


  <?php
  // Output certificate HTML code if the form was submitted
  if (isset($certificate_html)) {
    echo $certificate_html;
  }
  ?>
</body>
</html>

<?php
if (isset($_POST['add_campaign'])) {
  $campaign_name = $_POST['campaign_name'];
  $campaign_description = $_POST['campaign_description'];
  $campaign_goal = $_POST['campaign_goal'];
  $picture = $_POST['campaign_picture'];
  $city = $_POST['City'];
  $state = $_POST['States'];
  $zip = $_POST['ZIP'];
  $document = $_POST['documents'];


  // Connect to the MySQL database
  $conn = mysqli_connect("localhost", "root", "", "login");

  // Insert the campaign data into the database
  $sql = "INSERT INTO campaigns (name, description, goal , picture , City , States , ZIP , Documents ) VALUES ('{$campaign_name}', '{$campaign_description}', '{$campaign_goal}' , '{$picture}' , '{$city}', '{$state}', '{$zip}','{$document}' )";
  $result = mysqli_query($conn, $sql);

  // Check if the campaign was successfully added to the database
  if ($result) {
    header("Location: campaign-list1.php?message=");
  } else {
    echo "Error adding campaign: " . mysqli_error($conn);
  }

  // Close the database connection
  mysqli_close($conn);
}
?>

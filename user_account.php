<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title>
    <link rel="stylesheet" href="assets/css/container.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/table.css">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<?php include 'includes/user_sidebar.php';?>
  <section class="home-section">
      <div class="container_form">
      <H1>Personal Information</H1>
      <form>
        
      <div class="row mb-4"style="padding:20px 0px">
      
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form6Example1" class="form-control" require/>
                <label class="form-label" for="form6Example1">Name</label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form6Example2" class="form-control" require/>
                <label class="form-label" for="form6Example2">Password</label>
              </div>
            </div>
          </div>
          
          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block mb-4 start-100">Update Account</button>
        </form>

      </div>
      </section>
      <script src="assets/js/sidebar2.js"></script>
</body>
</html>
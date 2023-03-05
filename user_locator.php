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

if(isset($_POST["save"])){
  $school = $_POST["school"];
  $location = $_POST["location"];
  $tree_id = $_POST["tree_id"];
  $tree_name = $_POST["tree_name"];
  $type = $_POST["type"];
  $status = $_POST["status"];
  $planted = $_POST["planted"];
  $longitude = $_POST["longitude"];
  $latitude = $_POST["latitude"];
  
    foreach($tree_id as $key => $value){
      $save = "INSERT INTO tree_locate VALUES('$school','$location','$tree_id[$key]', '$tree_name[$key]',  '$type[$key]','$status[$key]','$planted[$key]','$longitude[$key]', '$latitude[$key]')";

      $query = mysqli_query($conn, $save);

      echo
      "<script> alert('Registration Successful'); </script>";
      header("Location: user_locator.php");
    }
}
//Table Problem in adding rows, 
//only 1 of data is stored in the DB 

?>


<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>User Form</title>
      <link rel="stylesheet" href="assets/css/container.css">
      <link rel="stylesheet" href="assets/css/sidebar.css">    
      <link rel="stylesheet" href="assets/css/table.css">    
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
  <body>

  <?php include 'includes/user_sidebar.php';?>
  <section class="home-section">
      <div class="container_form">
   

          <H1>Tree Locator Form</H1>
          <form action="" method="post" autocomplete="off">

          <div class="container">
          <div class="row top-tab">
             <div class="col">
             <label class="bold" for="school">Name of School</label>
             <input type="text" id="school" name="school" class="form_control">
             </div>
             <div class="col">
             <label class="bold" for="">Location: </label>
             <br>
             <input type="radio" id="location" name="location" value="Inside">
                  <label for="location">Inside</label>
                  <input type="radio" id="location" name="location" value="Outside">
                  <label for="location">Outside</label><br>
             </div>
          </div>  
          
            <table class="_table">
              <thead>
                <tr>
                  <th class="no">No.</th>
                  <th>Tree</th>
                  <th>Type</th>
                  <th>Status</th>
                  <th>Planted during <br>the icon of <br>forrest (y/n)</th>
                  <th>Longitude</th>
                  <th>Latitude</th>
                  <th width="50px">
                    <div class="action_container">
                      <button class="success" onclick="create_tr('table_body')">
                        <i class="fa fa-plus"></i>
                      </button>
                    </div>
                  </th>
                </tr>
              </thead>
              <tbody id="table_body">
                <tr>
                  <td>
                    <input type="text" name="tree_id[]" id="tree_id" class="form_control no" >
                  </td>
                  <td>
                    <input type="text" name="tree_name[]" id="tree_name" class="form_control">
                  </td>
                  <td>
                    <input type="text" name="type[]" id="type" class="form_control">
                  </td>
                  <td>
                  <select class="form-select" aria-label="Default select example" name="status[]" id = "status" required>
                      <option selected>Status</option>
                          <option value="Alive">Alive</option>
                          <option value="Dead">Dead</option>
                      </select>  
                  </td>
                  <td class="radio">
                  <select class="form-select" aria-label="Default select example" name="planted[]" id = "planted" required>
                      <option selected>Y/N</option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                      </select>  
                  </td>
                  <td>
                    <input type="text" name="longitude[]" id="longitude" class="form_control" >
                  </td>
                  <td>
                    <input type="text" name="latitude[]" id="latitude" class="form_control">
                  </td>
                  <td>
                    <div class="action_container">
                      <button class="danger" onclick="remove_tr(this)">
                        <i class="fa fa-close"></i>
                      </button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mx-auto">
            <button type="submit" class="btn btn-primary btn-block mt-3 mb-4 float-right" name="save">Save Data</button>
            </div>
            </form>
</div>

<script src="assets/js/edit_table.js"></script>
      </div>
      </section>
      <script src="assets/js/sidebar.js"></script>
  </body>
  </html>
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
   

          <H1>Tree Inventory Form</H1>

<div class="container">
    <center>Tree Inventory Form</center>
  <table class="_table">
    <thead>
      <tr>
        <th class="no">No.</th>
        <th>Trees</th>
        <th>Type</th>
        <th>No.of Trees <br> Alive</th>
        <th>No.of Trees <br> Dead</th>
        <th>Remarks</th>
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
      <td >
          <input type="text" class="form_control no">
        </td>
        <td>
          <input type="text" class="form_control">
        </td>
        <td>
        <select class="form-select" aria-label="Default select example" name="type[]" id = "type[]" required>
            <option selected>Type</option>
                <option value="Native">Native</option>
                <option value="Fruit">Fruit</option>
                <option value="Foreign">Foreign</option>
            </select>  
        </td>
        <td>
        <input type="number"  class="form_control">    
        </td>
        <td>
          <input type="number" class="form_control" >
        </td>
        <td>
          <input type="text" class="form_control">
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
</div>

<script src="assets/js/edit_table.js"></script>
      </div>
      </section>
      <script src="assets/js/sidebar.js"></script>
  </body>
  </html>
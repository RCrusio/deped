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
   

          <H1>Tree Locator Report</H1>
          
          <div class="container">
          <div class="row top-tab">
          <?php 
                  $select = "SELECT * FROM tree_locate LIMIT 1";
                  $result = mysqli_query($conn, $select);
                  while($row = mysqli_fetch_array($result))
                  {
                ?>
             <div class="col">
             <label class="bold" for="school">Name of School: </label>
             <h3><span class="badge bg-success"><?php echo $row['school'];?></span></h3>
             </div>
             <div class="col">
             <label class="bold" for="">Location: </label>
             <br>
             <h3><span class="badge bg-success"><?php echo $row['location'];?></span></h3>
            <?php } ?>
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
                <?php 
                  $select = "SELECT * FROM tree_locate ORDER BY tree_id  ";
                  $result = mysqli_query($conn, $select);
                  while($row = mysqli_fetch_array($result))
                  {
                ?>
                  <td><?php echo $row['tree_id'];?></td>
                  <td><?php echo $row['tree_name'];?></td>
                  <td><?php echo $row['type'];?></td>
                  <td><?php echo $row['status'];?></td>
                  <td><?php echo $row['planted'];?></td>
                  <td><?php echo $row['longitude'];?></td>
                  <td><?php echo $row['latitude'];?></td>
                  <td>
                    <div class="action_container">
                      <button class="danger" onclick="remove_tr(this)">
                        <i class="fa fa-close"></i>
                      </button>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>

            </form>
</div>

<script src="assets/js/edit_table.js"></script>
      </div>
      </section>
      <script src="assets/js/sidebar.js"></script>
  </body>
  </html>
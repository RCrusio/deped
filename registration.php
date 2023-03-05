<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: login.php");
}


if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $schoolId = $_POST["schoolId"];
  $status = $_POST["status"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user VALUES('','$name', '$schoolId','$status','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
      header("Location: login.php");
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/registration.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<section class="vh-100 " style="margin: 2 0px 0px">
  <div class="container h-100 ">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-7">
        <div class="card text-black cont" style="border-radius: 25px; background:#e9ecef">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div>
              <a href="login.php"><i class='bx bx-left-arrow-alt arrow'></i></a>
              </div>
              <h1>Registration</h1>


            <form action="" method="post" autocomplete="off">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
              <label class="form-label" for="name">Name*</label>
              <input type="text" name="name" id="name" required class="form-control" />
              
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
            <label class="form-label"  for="schoolId">School ID*</label>
              <input type="number" name="schoolId" id="schoolId" required class="form-control" />
              
            </div>
          </div>
        </div>

        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
            <label class="form-label" for="status" >Status*</label>
            <select class="form-select" aria-label="Default select example" name="status" id = "status" required>
            <option selected>Select Status</option>
                <option value="Student">Student</option>
                <option value="Teacher">Teacher</option>
                <option value="Head">Head</option>
            </select>  
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
            <label class="form-label" for="email">Email*</label>
              <input type="email" name="email" id = "email" required class="form-control" />
              
            </div>
          </div>
        </div>

        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
            <label class="form-label" for="password">Password*</label>
              <input type="text" name="password" id = "password" required class="form-control" />
              
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
            <label class="form-label" for="confirmpassword">Confirm Password*</label>    
              <input type="text" name="confirmpassword" id = "confirmpassword" required class="form-control" />
              
            </div>
          </div>
        </div>
      
        <!-- Submit button -->
        <button type="button" class="btn btn-primary btn-block mb-4" 
        data-toggle="modal"  data-target="#exampleModal">Create Account</button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Are you sure with all of the information
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" class="btn btn-primary">Create Account</button>
              </div>
            </div>
          </div>
        </div>
      </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
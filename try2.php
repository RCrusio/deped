


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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      
<body>

          <H1>Tree Locator Form</H1>
          <form id="insert_form" action="" method="post">

          <div class="container">
          
          
            <table class="table table-bordered" id="table">
              <thead>
              <tr>
                  <th class="no">No.</th>
                  <th>Tree</th>
                  <th>Type</th>
                  <th>Status</th>
                  <th>Planted during <br>the icon of <br>forrest (y/n)</th>
                  <th>Longitude</th>
                  <th>Latitude</th>
                  <th width="50px">Add or Remove</th>
                </tr>
              </thead>
              <tbody id="table_body">
                <tr>
                <td><input type="text" name="tree_id" id="tree_id" class="form_control" ></td>
                <td>
                <input type="text" name="tree_name" id="tree_name" class="form_control">
                </td>
                <td>
                <input type="text" name="type" id="type" class="form_control">
                </td>
                <td>
                  <select class="form-select" aria-label="Default select example" name="status" id = "status" required>
                      <option selected>Status</option>
                          <option value="Alive">Alive</option>
                          <option value="Dead">Dead</option>
                      </select>  
                </td>
                <td>
                  <input type="radio" name="planted[]" id="planted[]" value="Yes" >
                  <label for="planted" >Yes</label>
                  <input type="radio" name="planted[]" id="planted[]" value="No">
                  <label for="planted">No</label><br>
                </td>
                <td>
                <input type="text" name="tree_name" id="tree_name" class="form_control">
                </td>
                <td>
                <input type="text" name="tree_name" id="tree_name" class="form_control">
                </td>
                <td>
                <input  type="button" class="btn success" name="add-row" id="add-row" value="<i class="fa fa-close"></i>">
                </td>
                </tr>
              </tbody>
            </table>
            <button type="submit" class="btn btn-primary btn-block mb-4" name="submit">Submit</button>
            </form>
</div>

      <script>
        $(document).ready(function(){
            var html='<tr><td><input type="text" name="tree_id" id="tree_id" class="form_control" ></td><td><input type="text" name="tree_name" id="tree_name" class="form_control"></td><td><input type="text" name="type" id="type" class="form_control"></td><td><select class="form-select" aria-label="Default select example" name="status" id = "status" required><option selected>Status</option><option value="Alive">Alive</option><option value="Dead">Dead</option></select></td><td><input type="radio" name="planted[]" id="planted[]" value="Yes" style="margin-right:10px"><label style="margin-right:11px" for="planted">Yes</label><input type="radio" name="planted[]" id="planted[]" value="No" style="margin-right:10px"><label for="planted" >No</label><br></td><td><input type="text" name="tree_name" id="tree_name" class="form_control"></td><td><input type="text" name="tree_name" id="tree_name" class="form_control"></td><td><input  type="button" class="btn danger" name="remove-row" id="remove-row" value="add"></td></tr>';
            
            max = 3
            x=1;
            $("#add-row").click(function(){
                if(x<=max){
                    $("#table").append(html);
                    x++;
                }
                
             });

             $("#table").on('click', '#remove-row', function(){
                $(this).closest('tr').remove();
                x--;
             });
        });

      </script>
      <script src="assets/js/sidebar.js"></script>
  </body>
  </html>
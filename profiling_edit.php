<?php
include_once('security.php');
include_once('includes/header.php');
include_once('includes/navbar.php');
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <section class="content">
      <div class="container-fluid">
        <div class="row">

        <div class="col-md-3">
           <br />
            <br />
             <br />
              <br />
               <br />
                <br />
            <div class="card card-primary card-outline">
            <?php   
                   
                   $id = $_GET['edit_btn'];
                   $query = "SELECT * FROM profiling_data WHERE id='$id'";

                   $result = mysqli_query($db, $query);

                   foreach ($result as $row) 
                   {
                ?>
         
              <div class="card-body box-profile">
                
                    <div class="text-center">
                      <a href="mainindex/main/img/<?php echo $row['file']; ?>" data-toggle="lightbox" data-title="<?= $row['firstname']; ?>">
                      <?php echo '<img src="mainindex/main/img/'.$row['file'].'" class="img-fluid mb-2"  width="80px;" alt="Image">'?>
                    </a>
                    </div>
                

                <h3 class="profile-username text-center"><?php echo $row['firstname']; ?> <?php echo $row['midname']; ?> <?php echo $row['lastname']; ?></h3>

                <p class="text-muted text-center">REGISTER</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <p><b>EMAIL: &nbsp &nbsp &nbsp</b><b><?php echo $row['email']; ?></b></p>
                  </li>
                  <li class="list-group-item">
                    <p><b>CONTACT NO: &nbsp &nbsp &nbsp</b><b><?php echo $row['contact_number']; ?></b></p>
                  </li>
                  <li class="list-group-item">
                    <p><b>GENDER: &nbsp &nbsp &nbsp</b><b><?php echo $row['gender']; ?></b></p>
                  </li>
                  <li class="list-group-item">
                    <p><b>OCCUPATION: &nbsp &nbsp &nbsp</b><b><?php echo $row['occupation']; ?></b></p>
                  </li>
                  <li class="list-group-item">
                    <p><b>BIRTHDATE: &nbsp &nbsp &nbsp</b><b><?php echo $row['birthday']; ?></b></p>
                  </li>
                  <li class="list-group-item">
                    <p><b>CIVIL STATUS: &nbsp &nbsp &nbsp</b><b><?php echo $row['civil_status']; ?></b></p>
                  </li>
                  <li class="list-group-item">
                    <p><b>RELIGION: &nbsp &nbsp &nbsp</b><b><?php echo $row['religion']; ?></b></p>
                  </li>
                  <li class="list-group-item">
                    <p><b>ADDRESS: &nbsp &nbsp &nbsp</b><b><?php echo $row['address']; ?></b></p>
                  </li>
                  <li class="list-group-item">
                    <p><b>DATE: &nbsp &nbsp &nbsp</b><b><?php echo $row['date']; ?></b></p>
                  </li>
                </ul>
              <br />
                
              </div>
              <?php
          }
          
        ?>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <br />
            <br />
             <br />

              <br />
               <br />
                <br />
            <div class="card card-primary card-outline">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <div class="text-center">
                  <h3 class="profile-username text-center"><b>&nbsp &nbsp PROFILING EDIT</b></h3>
                  </div>
                </ul>
              </div>
              <br />
              <br />
              <br />
              <br />
              <br />
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                  <div class="tab-pane" id="settings">
                   <form action="barangay_code.php" method="POST" enctype="multipart/form-data">
                      <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                     <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">FIRSTNAME</label>
                        <div class="col-sm-10">
                          <input type="text" style="text-transform:uppercase" class="form-control" id="inputName" name="edit_firstname">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">MIDDLE NAME</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail" name="edit_middle_name" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">LASTNAME</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail" name="edit_lastname" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">EMAIL</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName2" name="edit_email" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">CONTACT NO.</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" name="edit_contact" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">GENDER</label>
                        <div class="col-sm-10">  
                            <input type="radio" value="Male" name="edit_gender" checked > Male
                            <input type="radio" value="Female" name="edit_gender"> Female 
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">OCCUPATION</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" name="edit_occupation" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">BIRTHDATE</label>
                        <div class="col-sm-10">
                        
                        <input type="date" id="bday" name="edit_birthdate">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">CIVIL STATUS</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" name="edit_civil_status" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">RELIGION</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" name="edit_religion" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">ADDRESS</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" name="edit_address" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">UPLOAD PROFILE</label>
                        <div class="col-sm-10">
                          <input type="file" class="custom-file-input" name="id_image" id="admin_image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <a class="btn btn-secondary" href="barangay_profiling.php"> BACK</a>
                          <button type="submit" name="update_btn" class="btn btn-primary">SAVE</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>

              </div>
            </div>

          </div>

        </div>

      </div>
    </section>

  </div>
  


<?php
include_once('includes/script.php');
include_once('includes/footer.php');
?>
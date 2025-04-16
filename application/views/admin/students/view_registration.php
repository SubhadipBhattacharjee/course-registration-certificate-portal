<?php
$this->load->view('admin/common/header');
?>


<!-- Content Wrapper. Contains page content -->
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
              <!--<li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>-->
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Registration Details</h3>
              </div>
              <!-- /.card-header -->

              <?php if($value){ ?>
              <!-- form start -->
              <form role="form" action="<?php  base_url('admin/branch-office/update-branch') ?>/<?php echo $value->id; ?>" method="POST" id="main-office" 
                enctype="multipart/form-data">

                <div class="card-body">
                  
                  
                  <div class="form-group">
                     <label for="author">1.Study Centre Name:-</label>
                     <input type="text" class="form-control" name="f_name" placeholder="Institue Name..." value="<?php echo $value->centre_name; ?>" readonly>
                  </div>

                  <div class="form-group">
                     <label for="author">2.Study Centre Code:-</label>
                     <input type="text" class="form-control" name="f_contact" placeholder="Institue Name..." value="<?php echo $value->code; ?>" readonly>
                  </div>

                  <div class="form-group">
                     <label for="author">3.Category-</label>
                     <input type="text" class="form-control" name="f_mail" placeholder="Institue Name..." value="<?php echo $value->trade; ?>" readonly>
                  </div>

                  <div class="form-group">
                     <label for="author">4.Course Title:-</label>
                     <input type="text" class="form-control" name="f_add" placeholder="Institue Name..." value="<?php echo $value->course; ?>" readonly>
                  </div>

                  <div class="form-group">
                     <label for="author">5.Course Duration:-</label>
                     <input type="number" class="form-control" name="adhar" placeholder="Institue Name..." value="<?php echo $value->duration; ?>" readonly>
                  </div>

                  

                  <div class="form-group">
                     <label for="author">6.Candidate Name :-</label>
                     <input type="text" class="form-control" name="pass" placeholder="Institue Name..." value="<?php echo $value->c_name; ?>" readonly>
                  </div>

                  <div class="form-group">
                     <label for="author">7.Photo :-</label>
                     <img src="<?php echo base_url(); ?><?php echo $value->photo; ?>">
                  </div>

                  <div class="form-group">
                     <label for="author">8.Candidate Father's Name :-</label>
                     <input type="text" class="form-control" name="pass" placeholder="Institue Name..." value="<?php echo $value->f_name; ?>" readonly>
                  </div>

                  <div class="form-group">
                     <label for="author">9.Address:-</label>
                     <input type="text" class="form-control" name="pass" placeholder="Institue Name..." value="<?php echo $value->address; ?>" readonly>
                  </div>

                  <div class="form-group">
                     <label for="author">10.Qualification :-</label>
                     <input type="text" class="form-control" name="pass" placeholder="Institue Name..." value="<?php echo $value->education; ?>" readonly>
                  </div>

                  <div class="form-group">
                     <label for="author">11.Date of Birth :-</label>
                     <input type="text" class="form-control" name="pass" placeholder="Institue Name..." value="<?php echo $value->dob; ?>" readonly>
                  </div>

                  <div class="form-group">
                     <label for="author">12.Nationality:-</label>
                     <input type="text" class="form-control" name="pass" placeholder="Institue Name..." value="<?php echo $value->nationality; ?>" readonly>
                  </div>

                  <div class="form-group">
                     <label for="author">12.Caste:-</label>
                     <input type="text" class="form-control" name="caste" placeholder="Institue Name..." value="<?php echo $value->caste; ?>" readonly>
                  </div>

                  <div class="form-group">
                     <label for="author">13.Religion :-</label>
                     <input type="text" class="form-control" name="pass" placeholder="Institue Name..." value="<?php echo $value->religion; ?>" readonly>
                  </div>

                  <?php $gen = ($value->gender=="1") ? "Male":"Female" ; ?>
                  <div class="form-group">
                     <label for="author">14.Gender :-</label>
                     <input type="text" class="form-control" name="pass" placeholder="Institue Name..." value="<?php echo $gen; ?>" readonly>
                  </div>

                  <div class="form-group">
                     <label for="author">15.Email :-</label>
                     <input type="text" class="form-control" name="pass" placeholder="Institue Name..." value="<?php echo $value->mail; ?>" readonly>
                  </div>

                  <div class="form-group">
                     <label for="author">16.Contact Number:-</label>
                     <input type="text" class="form-control" name="pass" placeholder="Institue Name..." value="<?php echo $value->contact; ?>" readonly>
                  </div>

                  <!-- <div class="form-group">
                     <label for="author">17.View Proof of DOB:-</label>
                     <a href="<?php echo base_url('admin/students/dob'); ?>/<?php echo $value->id; ?>" target="_blank">Click Here</a>
                  </div>

                  <div class="form-group">
                     <label for="author">18.View Educational Documents:-</label>
                     <a href="<?php echo base_url('admin/students/documents'); ?>/<?php echo $value->id; ?>" target="_blank">Click Here</a>
                  </div> -->

                  <div class="form-group">
                     <label for="author">17.View Proof of DOB:-</label>
                     <a href="<?php echo base_url(''); ?>/<?php echo $value->dob_proof; ?>" download>Click to Download</a>
                  </div>

                  <div class="form-group">
                     <label for="author">18.View Educational Documents:-</label>
                     <a href="<?php echo base_url(''); ?>/<?php echo $value->edu_proof; ?>" download>Click to Download</a>
                  </div>


                  
                  

                 
                  
                </div>
                <!-- /.card-body -->

                <!-- <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Update">
                </div> -->
              </form>
              <?php } ?>
            </div>

          </div>

        </div>
       <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php
$this->load->view('admin/common/footer');
?>


<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>


   <script>

            <?php if($this->session->flashdata('update-branch-address')){  ?> 
            Command: toastr["success"]("<i><?php echo $this->session->flashdata('update-branch-address'); ?></i>")
            <?php } ?>

            

             toastr.options = {

                 "closeButton": true,
                 "debug": false,
                 "newestOnTop": false,
                 "progressBar": false,
                 "positionClass": "toast-top-right",
                 "preventDuplicates": false,
                 "onclick": null,
                 "showDuration": "300",
                 "hideDuration": "1000",
                 "timeOut": "2000",
                 "extendedTimeOut": "1000",
                 "showEasing": "swing",
                 "hideEasing": "linear",
                 "showMethod": "fadeIn",
                 "hideMethod": "fadeOut"
             }

   </script>

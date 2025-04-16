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
                <h3 class="card-title" align="center">Student's Registration Form</h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form role="form" action="<?php echo base_url('admin/registered-students/save-records') ?>" method="POST" id="student-registration" 
                enctype="multipart/form-data">

                <div class="card-body">
                  
                <div class="form-group">
                     <label for="author">1.Study Centre Name:-</label>
                     <input type="text" class="form-control" name="centre_name" placeholder="Study Centre Name.. ">
                  </div>

                  <div class="form-group">
                     <label for="author">2.Study Centre Code:-</label>
                     <input type="text" class="form-control" name="code" placeholder="Study Centre Code..." >
                  </div>

                  <div class="form-group">
                    <label for="cars">3.Want Admission in :-</label><br>

                    <select name="category" id="cat" class="custom-select">
                      <option value="">Select Category</option>
                      <?php foreach($category as $cat){ ?>
                      <option value="<?php echo $cat->id; ?>"><?php echo $cat->name; ?></option>
                      <?php } ?>
                      </select>     
                    </select> 
                  </div>

                  <div class="form-group">
                    <label for="cars">4. Select Course Duration:-</label><br>

                    <select name="duration" class="custom-select" id="time">
                       <option value="">Select Course Duration</option>     
                    </select> 
                  </div>

                  <div class="form-group">
                    <label for="cars">5. Select Course:-</label><br>

                    <select name="course_name" id="course" class="custom-select">
                      <option value="">Select Course Title</option>  
                           
                    </select> 
                  </div>

                  <div class="form-group">
                     <label for="author">6.Candidate Name :-</label>
                     <input type="text" class="form-control" name="c_name" placeholder="Your Name...." >
                  </div>

                  <div class="form-group">
                     <label for="author">7.Photo :-</label>
                     <input type="file" class="" name="photo" accept="image/*">
                  </div>

                  <div class="form-group">
                     <label for="author">8.Candidate Father's Name :-</label>
                     <input type="text" class="form-control" name="f_name" placeholder="Your Father Name..." >
                  </div>

                  <div class="form-group">
                     <label for="author">9.Address:-</label>
                     <input type="text" class="form-control" name="address" placeholder="Enter your Adrress...." >
                  </div>

                  <div class="form-group">
                     <label for="author">10.Qualification :-</label>
                     <input type="text" class="form-control" name="education" placeholder="Qualification Details..." >
                  </div>

                  <div class="form-group">
                     <label for="author">11.Upload Educational Proof:-</label>
                     <input type="file" class="" name="edu_proof">
                  </div>

                  <div class="form-group">
                     <label for="author">12.Date of Birth :-</label>
                     <input type="date" class="form-control" name="dob" placeholder="Your Date of Birth..." >
                  </div>

                  <div class="form-group">
                     <label for="author">13.Upload DOB Proof:-</label>
                     <input type="file" class="" name="dob_proof">
                  </div>

                  <div class="form-group">
                     <label for="author">14.Nationality:-</label>
                     <input type="text" class="form-control" name="nationality" placeholder="Enter Nationality" >
                  </div>

                  <div class="form-group">
                    <label for="cars">15. Select Your Caste:-</label><br>

                    <select name="caste" id="" class="custom-select">
                    <option value="">Select Your Caste</option>
                      <option value="General">General</option>        
                      <option value="SC">SC</option>
                      <option value="ST">ST</option>        
                      <option value="OBC">OBC</option>     
                    </select> 
                  </div>

                  <div class="form-group">
                     <label for="author">16.Religion :-</label>
                     <input type="text" class="form-control" name="religion" placeholder="Enter Religion" >
                  </div>

                  
                  
                  <div class="form-group">
                    <label for="cars">17. Select Gender:-</label><br>

                    <select name="gender" id="" class="custom-select">
                    <option value="">Select Gender</option>
                      <option value="Male">Male</option>        
                      <option value="Female">Female</option>     
                    </select> 
                  </div>
                 

                  <div class="form-group">
                     <label for="author">18.Email :-</label>
                     <input type="email" class="form-control" name="mail" placeholder="Enter Email..." >
                  </div>

                  <div class="form-group">
                     <label for="author">19.Contact Number:-</label>
                     <input type="text" class="form-control" name="contact" placeholder="Enter Contact Number.." >
                  </div>
 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Submit">
                </div>
              </form>
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
        var up = document.getElementById('GFG_UP');
        var down = document.getElementById('code');
  
        function gfg() {
            var minm = 10000;
            var maxm = 99999;
            down.value = Math.floor(Math
            .random() * (maxm - minm + 1)) + minm;
        }
</script>

<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>


   <script>

            <?php if($this->session->flashdata('registration')){  ?> 
            Command: toastr["success"]("<i><?php echo $this->session->flashdata('registration'); ?></i>")
            <?php } ?>

            <?php if($this->session->flashdata('error')){  ?> 
            Command: toastr["error"]("<i><?php echo $this->session->flashdata('error'); ?></i>")
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
                 "timeOut": "2500",
                 "extendedTimeOut": "1000",
                 "showEasing": "swing",
                 "hideEasing": "linear",
                 "showMethod": "fadeIn",
                 "hideMethod": "fadeOut"
             }

   </script>

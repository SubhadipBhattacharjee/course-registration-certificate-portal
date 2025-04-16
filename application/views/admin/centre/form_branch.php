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
                <h3 class="card-title">Franchise Form</h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form role="form" action="<?php echo base_url('admin/branch-office/save-branch') ?>" method="POST" id="branch-office" 
                enctype="multipart/form-data">

                <div class="card-body">
                  
                             

                  
                  <div class="form-group">
                     <label for="author">1.Name of franchise Owner:-</label>
                     <input type="text" class="form-control" name="f_name" placeholder="Institue Name...">
                  </div>

                  <div class="form-group">
                     <label for="author">2.Contact Number (Franchise Owner):-</label>
                     <input type="text" class="form-control" name="f_contact" placeholder="Institue Name...">
                  </div>

                  <div class="form-group">
                     <label for="author">3.Mail (Franchise Owner):-</label>
                     <input type="text" class="form-control" name="f_mail" placeholder="Institue Name...">
                  </div>

                  <div class="form-group">
                     <label for="author">4.Address (Franchise Owner):-</label>
                     <input type="text" class="form-control" name="f_add" placeholder="Institue Name...">
                  </div>

                  <div class="form-group">
                     <label for="author">5.Enter Adhar Number (Franchise Owner):-</label>
                     <input type="text" class="form-control" name="adhar" placeholder="Institue Name..." pattern="\d*" maxlength="12">
                  </div>

                  <div class="form-group">
                     <label >6.Upload Adhar Card (in PDF) :-</label><br>
                       <input type="file" class="" name="file">
                  </div>
                  
                  <div class="form-group">
                     <label for="author">6.Generate Password for Franchise Login:-</label>&nbsp <input type="button" onclick="password();" value="Click Here"><br>

                     <input type="text" class="form-control" name="pass" placeholder="Franchise Password..." id="pass">

                  </div><br><br>


                    
                  <div class="form-group">
                     <label for="author">1.Name of franchise Office:-</label>
                     <input type="text" class="form-control" name="name" placeholder="Institue Name...">
                  </div>

                  <div class="form-group">
                     <label for="author">2.<b> Generate Franchise Code</b> :-</label>&nbsp <input type="button" onclick="f_code();" value="Click Here"><br>
                      
                     <input type="number" class="form-control" name="code" placeholder="Franchise Code..." id="code">
                      
                  </div>

                  <div class="form-group">
                     <label for="author">3.Address (Franchise office):-</label>
                     <input type="text" class="form-control" name="address" placeholder="Address of Institute...">
                  </div>

                  

                  <div class="form-group">
                     <label for="author">4.Contact Number(Franchise Office):-</label>
                     <input type="number" class="form-control" name="contact" placeholder="Enter Contact Number...">
                  </div>

                  <div class="form-group">
                     <label for="author">5.Email(Franchise Office):-</label>
                     <input type="email" class="form-control" name="mail" placeholder="Enter Email...">
                  </div>

                  

                   

                  <div class="form-group">
                    <label for="cars">6. Select Status:-</label><br>

                    <select name="status" id="" class="custom-select">
                      <option value="1">Active</option>        
                      <option value="0">Inactive</option>     
                    </select> 
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
       // var up = document.getElementById('GFG_UP');
        var code = document.getElementById('code');
        var pass = document.getElementById('pass');
  
        function f_code() {
            var minm = 100000;
            var maxm = 999999;
            code.value = Math.floor(Math
            .random() * (maxm - minm + 1)) + minm;
        }

        function password() {
            var minm = 100000;
            var maxm = 999999;
            pass.value = Math.floor(Math
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

            <?php if($this->session->flashdata('save-branch-address')){  ?> 
            Command: toastr["success"]("<i><?php echo $this->session->flashdata('save-branch-address'); ?></i>")
            <?php } ?>

            <?php if($this->session->flashdata('code')){  ?> 
            Command: toastr["error"]("<i><?php echo $this->session->flashdata('code'); ?></i>")
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

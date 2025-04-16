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
                <h3 class="card-title">Franchise Page Content</h3>
              </div>
              <!-- /.card-header -->

              <?php if($value){ ?>
              <!-- form start -->
              <form role="form" action="<?php  echo base_url('admin/franchise-page-content/update'); ?>/<?php echo $value->id; ?>" method="POST" id="footer" 
                enctype="multipart/form-data">

                <div class="card-body">
                  
                  <!-- <div class="form-group">
                     <label for="author">7.Name of the Institute:-</label>
                     <input type="text" class="form-control" name="name" placeholder="Institute name" value="<?php echo $value->name; ?>">
                  </div> -->

                  <div class="">
                    <label for="author">1."HOW TO GET AFFILIATION" Section:-</label>
                     
                       <div class="mb-3">
                         <textarea class="textarea" name="desc" rows="3" cols="160"><?php echo $value->content; ?></textarea> <!-- class="textarea" -->
                       </div>
                     
                  </div>

                  <!-- <div class="form-group">
                     <label for="author">1.General Contact Number:-</label>
                     <input type="number" class="form-control" name="g_contact" placeholder="Enter Contact Number..." value="<?php echo $value->g_contact; ?>">
                  </div>

                  <div class="form-group">
                     <label for="author">2.Student helpline No:-</label>
                     <input type="number" class="form-control" name="s_contact" placeholder="Enter Contact Number..." value="<?php echo $value->s_contact; ?>">
                  </div>

                  <div class="form-group">
                     <label for="author">3.Study centre or franchise Contact Number:-</label>
                     <input type="number" class="form-control" name="f_contact" placeholder="Enter Contact Number..." value="<?php echo $value->f_contact; ?>">
                  </div>
                  
                  <div class="form-group">
                     <label for="author">4.Office Email:-</label>
                     <input type="email" class="form-control" name="mail" placeholder="Enter Email..." value="<?php echo $value->mail; ?>">
                  </div>

                  <div class="form-group">
                     <label for="author">5.Address of Main Office:-</label>
                     <input type="text" class="form-control" name="address" placeholder="Address of Institute..." value="<?php echo $value->address; ?>">
                  </div>

                  <div class="form-group">
                     <label for="author">5.Address of Corporate Office:-</label>
                     <input type="text" class="form-control" name="corp_address" placeholder="Address of Institute..." value="<?php echo $value->corp_add; ?>">
                  </div>

                  <div class="form-group">
                     <label for="author">6.Social Media Link for Facebook:-</label>
                     <input type="text" class="form-control" name="fb" placeholder="this Pattern (https://www.abc.com)" value="<?php echo $value->fb; ?>">
                  </div>

                  <div class="form-group">
                     <label for="author">7.Social Media Link for Twitter:-</label>
                     <input type="text" class="form-control" name="twitter" placeholder="this Pattern (https://www.abc.com)" value="<?php echo $value->twitter; ?>">
                  </div>

                  <div class="form-group">
                     <label for="author">8.Social Media Link for Pinterest:-</label>
                     <input type="text" class="form-control" name="pinterest" placeholder="this Pattern (https://www.abc.com)" value="<?php echo $value->pinterest; ?>">
                  </div>

                  <div class="form-group">
                     <label for="author">9.Social Media Link for Instagram:-</label>
                     <input type="text" class="form-control" name="instagram" placeholder="this Pattern (https://www.abc.com)" value="<?php echo $value->instagram; ?>">
                  </div> -->

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Update">
                </div>
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

            <?php if($this->session->flashdata('update-details')){  ?> 
            Command: toastr["success"]("<i><?php echo $this->session->flashdata('update-details'); ?></i>")
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
                 "timeOut": "4500",
                 "extendedTimeOut": "1000",
                 "showEasing": "swing",
                 "hideEasing": "linear",
                 "showMethod": "fadeIn",
                 "hideMethod": "fadeOut"
             }

   </script>

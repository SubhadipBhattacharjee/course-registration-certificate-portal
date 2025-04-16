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
                <h3 class="card-title">Edit Table Content</h3>
              </div>
              <!-- /.card-header -->

              <?php if($value){ ?>
              <!-- form start -->
              <form role="form" action="<?php echo base_url('admin/franchise-table-content/update-table') ?>/<?php echo $value->id; ?>" method="POST" id="main-office" 
                enctype="multipart/form-data">

                <div class="card-body">
                  
                  

                  <div class="form-group">
                    <label for="cars">1. Select Status:-</label><br>

                    <select name="status" id="" class="custom-select">
                      <option value="centre"<?php if($value->section=='centre'){ echo "selected"; } ?>>Kits Provided to Authorized Training Centre</option>        
                      <option value="students"<?php if($value->section=='students'){ echo "selected"; } ?>>Kits Provided to registered Students</option> 
                      <option value="franchise"<?php if($value->section=='franchise'){ echo "selected"; } ?>>Requirment for getting The Franchise</option>    
                    </select> 
                  </div> 
                  
                  <div class="form-group">
                     <label for="author">2.Add Particulars:-</label>
                     <input type="text" class="form-control" name="name" placeholder="Institue Name..." value="<?php echo $value->particular; ?>">
                  </div>

                  <div class="form-group">
                     <label for="author">3.Add Details :-</label>
                     <input type="text" class="form-control" name="details" placeholder="Institue Name..." value="<?php echo $value->value; ?>">
                  </div>

                  

                  
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

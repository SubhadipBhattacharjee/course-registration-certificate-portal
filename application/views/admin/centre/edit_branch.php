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
                <h3 class="card-title">Edit Office Address</h3>
              </div>
              <!-- /.card-header -->

              <?php if($value){ ?>
              <!-- form start -->
              <form role="form" action="<?php echo base_url('admin/branch-office/update-branch') ?>/<?php echo $value->id; ?>" method="POST" id="main-office" 
                enctype="multipart/form-data">

                <div class="card-body">
                  
                  <!-- <div class="form-group">
                    <label for="cars">1. Choose Category:- &nbsp(Auto-Selected)</label><br>

                    <select name="category" id="category" class="custom-select">
                      <?php foreach($categories as $cat){ ?>
                      <option value="<?php echo $cat->id;?>" <?php if($cat->title!="Magazine"){echo "disabled";}?> >
                                            <?php echo $cat->title; ?></option>
                      <?php } ?>
                    </select>           

                  </div> -->

                  <div class="form-group">
                     <label for="author">1.Name of franchise Owner:-</label>
                     <input type="text" class="form-control" name="f_name" placeholder="Institue Name..." value="<?php echo $value->f_name; ?>">
                  </div>

                  <div class="form-group">
                     <label for="author">2.Contact Number (Franchise Owner):-</label>
                     <input type="text" class="form-control" name="f_contact" placeholder="Institue Name..." value="<?php echo $value->f_contact; ?>">
                  </div>

                  <div class="form-group">
                     <label for="author">3.Mail (Franchise Owner):-</label>
                     <input type="text" class="form-control" name="f_mail" placeholder="Institue Name..." value="<?php echo $value->f_mail; ?>">
                  </div>

                  <div class="form-group">
                     <label for="author">4.Address (Franchise Owner):-</label>
                     <input type="text" class="form-control" name="f_add" placeholder="Institue Name..." value="<?php echo $value->f_add; ?>">
                  </div>

                  <div class="form-group">
                     <label for="author">5.Enter Adhar Number (Franchise Owner):-</label>
                     <input type="number" class="form-control" name="adhar" placeholder="Institue Name..." value="<?php echo $value->adhar; ?>">
                  </div>

                  <div class="form-group">
                     <label >6.Upload Adhar Card (in PDF) :-</label><br>
                       <input type="file" class="" name="file">
                  </div>


                  <!-- <div class="form-group">
                     <label >6/A. View Uploaded Adhar Card :-</label>
                       <a href="<?php echo base_url('admin/centre/view_adhar') ?>/<?php echo $value->id;?>" target="_blank">Click Here</a>
                  </div> -->

                  <div class="form-group">
                     <label >6/A. Download Uploaded Adhar Card :-</label>
                       <a href="<?php echo base_url('') ?>/<?php echo $value->file;?>" download>Click to Download</a>
                  </div>
                  
                  
                  <div class="form-group">
                     <label for="author">7.Password for Franchise Login:-</label>
                     <input type="text" class="form-control" name="pass" placeholder="Institue Name..." value="<?php echo $value->pass; ?>" readonly>
                  </div><br><br>
                  
                  

                  

                  <div class="form-group">
                     <label for="author">1.Name of the Franchise Centre:-</label>
                     <input type="text" class="form-control" name="name" placeholder="Institue Name..." value="<?php echo $value->name; ?>">
                  </div>

                  <div class="form-group">
                     <label for="author">2.Franchise Code:-</label>
                     <input type="text" class="form-control" name="code" placeholder="Address of Institute..." value="<?php echo $value->code; ?>" readonly>
                  </div>

                  <div class="form-group">
                     <label for="author">3.Address of the Franchise Office:-</label>
                     <input type="text" class="form-control" name="address" placeholder="Address of Institute..." value="<?php echo $value->address; ?>">
                  </div>

                  

                  <div class="form-group">
                     <label for="author">4.Contact Number of Franchise Office:-</label>
                     <input type="number" class="form-control" name="contact" placeholder="Enter Contact Number..." value="<?php echo $value->contact; ?>">
                  </div>

                  <div class="form-group">
                     <label for="author">5.Franchise Email:-</label>
                     <input type="email" class="form-control" name="mail" placeholder="Enter Email..." value="<?php echo $value->mail; ?>">
                  </div>

                  <!-- <div class="form-group">
                     <label >6.Select Image :-</label><br>
                       <input type="file" class="" name="file">
                  </div> -->

                   

                  <div class="form-group">
                    <label for="cars">6. Select Status:-</label><br>

                    <select name="status" id="" class="custom-select">
                      <option value="1"<?php if($value->status=='1'){ echo "selected"; } ?>>Active</option>        
                      <option value="0"<?php if($value->status=='0'){ echo "selected"; } ?>>Inactive</option>     
                    </select> 
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

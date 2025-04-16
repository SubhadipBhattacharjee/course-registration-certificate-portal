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
                <h3 class="card-title">Course Details</h3>
              </div>
              <!-- /.card-header -->

              <!-- form start -->
              <form role="form" action="<?php echo base_url('admin/course/save-course'); ?>" method="POST" id="form" 
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
                     <label for="author">1.Name of the Course:-</label>
                     <input type="text" class="form-control" name="name" placeholder="Course Name...">
                  </div>

                  <div class="form-group">
                     <label for="author">1.Course Fees (in INR):-</label>
                     <input type="number" class="form-control" name="fees" placeholder="Course Fees...">
                  </div>

                  <div class="form-group">
                    <label for="cars">3. Select Category:- </label><br>

                    <select name="category" id="category" class="custom-select">
                      
                      <option value="">Select Category</option>
                      <?php foreach($category as $cat){ ?>
                      <option value="<?php echo $cat->id; ?>" ><?php echo $cat->name; ?></option>
                      <?php } ?>
                      
                    </select>           

                  </div>

                  <div class="form-group">
                     <label for="author">2.Course Code:-</label>
                     <input type="number" class="form-control" name="code" placeholder="Course Code...">
                  </div>

                  <div class="form-group">
                    <label for="cars">3. Select Duration:- </label><br>

                    <select name="duration" id="category" class="custom-select">

                      <option value="">Select Duration(in months)</option>
                      <option value="3" >3</option>
                      <option value="6" >6</option>
                      <option value="12" >12</option>
                      <option value="14" >14</option>
                      
                    </select>           

                  </div>

                  <div class="">
                    <label for="author">4.Course content:-</label>
                     
                       <div class="mb-3">
                         <textarea class="" name="desc" rows="3" cols="160"></textarea> <!-- class="textarea"--> 
                       </div>
                     
                  </div>

                    <!-- <div class="form-group">
                     <label for="author">3.Publishing date of the Post:-&nbsp(dd-mm-yyyy)</label><br>
                     <select name="date" class="">
                       <option value="">--Day--</option> 
                       <?php for($d=1;$d<=31;$d++){ ?>
                         <option value="<?php echo $d; ?>"><?php echo $d; ?></option> 
                       <?php }?>
                     </select>

                     <select name="month" class="">
                      <option value="">--Month--</option> 
                       <?php  $months=array('Jan','Feb','March','April','May','June','July','Aug','Sept','Oct','Nov','Dec');
                         foreach($months as $key=>$month){ ?>

                        <option value="<?php echo $month; ?>"><?php echo $month; ?></option> 

                       <?php }?>
                     </select>

                     <select name="year" class="">
                       <option value="">--Year--</option> 
                       <?php $year=date("Y"); for($y=2020;$y<=$year;$y++){?>
                        <option value="<?php echo $y; ?>"><?php echo $y; ?></option> 
                       <?php } ?>
                     </select>
                  </div> -->

                  <!-- <div class="form-group">
                     <label for="author">2.Branch Code:-</label>
                     <input type="text" class="form-control" name="code" placeholder="Address of Institute...">
                  </div>

                  <div class="form-group">
                     <label for="author">3.Address of the Branch:-</label>
                     <input type="text" class="form-control" name="address" placeholder="Address of Institute...">
                  </div> -->

                  <!-- <div class="">
                    <label for="author">3.Write down Short Description:-</label>
                     
                       <div class="mb-3">
                         <textarea class="" name="desc" rows="3" cols="160"></textarea> <!-- class="textarea" 
                       </div>
                     
                  </div> -->

                  <!-- <div class="form-group">
                     <label for="author">4.Contact Number:-</label>
                     <input type="number" class="form-control" name="contact" placeholder="Enter Contact Number...">
                  </div>

                  <div class="form-group">
                     <label for="author">5.Email:-</label>
                     <input type="email" class="form-control" name="mail" placeholder="Enter Email...">
                  </div> -->

                  <!-- <div class="form-group">
                     <label >6.Select Image :-</label><br>
                       <input type="file" class="" name="file">
                  </div> -->

                   

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
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>


   <script>

            <?php if($this->session->flashdata('save-course')){  ?> 
            Command: toastr["success"]("<i><?php echo $this->session->flashdata('save-course'); ?></i>")
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

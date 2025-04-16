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
                <h3 class="card-title">Edit About Us Page Content</h3>
              </div>
              <!-- /.card-header -->

              <?php if($value){ ?>
              <!-- form start -->
              <form role="form" action="<?php echo base_url('admin/about-us/update') ?>/<?php echo $value->id; ?>" method="POST" id="" 
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

                  <div class="">
                    <label for="author">1."Who We are" Section:-</label>
                     
                       <div class="mb-3">
                         <textarea class="textarea" name="who" rows="3" cols="160"><?php echo $value->who; ?></textarea>  
                       </div>
                  </div>

                  <div class="form-group">
                     <label >2.Select Image :-</label><br>
                       <input type="file" class="" name="file"> 
                       <b>Stored Image:-</b><img src="<?php echo base_url();?><?php echo $value->file;?>" width="100" height="100">
                  </div>

                  <div class="">
                    <label for="author">3."OUR MISSION" Section:-</label>
                     
                       <div class="mb-3">
                         <textarea class="textarea" name="mission" rows="3" cols="160"><?php echo $value->mission; ?></textarea>  
                       </div>
                  </div>

                  <div class="">
                    <label for="author">4."OUR VISION" Section:-</label>
                     
                       <div class="mb-3">
                         <textarea class="textarea" name="vision" rows="3" cols="160"><?php echo $value->vision; ?></textarea>  
                       </div>
                  </div>

                  <div class="">
                    <label for="author">5."QUALITY POLICY" Section:-</label>
                     
                       <div class="mb-3">
                         <textarea class="textarea" name="policy" rows="3" cols="160"><?php echo $value->policy; ?></textarea>  
                       </div>
                  </div>

                  <!-- <div class="">
                    <label for="author">3.Short Description About Computer Course:-</label>
                     
                       <div class="mb-3">
                         <textarea class="textarea" name="comp_desc" rows="3" cols="160"><?php echo $value->comp_desc; ?></textarea>  
                       </div>
                  </div>

                  <div class="">
                    <label for="author">4.Short Description About Vocational Course:-</label>
                     
                       <div class="mb-3">
                         <textarea class="textarea" name="v_desc" rows="3" cols="160"><?php echo $value->voc_desc; ?></textarea>  
                       </div>
                  </div> -->

                  <!-- <div class="form-group">
                     <label for="author">1.Name of the Course:-</label>
                     <input type="text" class="form-control" name="name" placeholder="Course Name..." value="<?php echo $value->name; ?>">
                  </div>

                  <div class="form-group">
                    <label for="cars">3. Select Category:- </label><br>

                    <select name="category" id="category" class="custom-select">

                      <option value="">Select Category</option>
                      <?php foreach($category as $cat){ ?>
                      <option value="<?php echo $cat->id; ?>"<?php if($cat->id==$value->p_id){echo "selected";}?> ><?php echo $cat->name; ?></option>
                      <?php } ?>
                      
                    </select>           

                  </div>

                  <div class="form-group">
                     <label for="author">2.Course Code:-</label>
                     <input type="text" class="form-control" name="code" placeholder="Course Code..." value="<?php echo $value->code; ?>">
                  </div>

                  <div class="form-group">
                    <label for="cars">3. Select Duration:- </label><br>

                    <select name="duration" id="category" class="custom-select">

                      <option value="">Select Duration (in months)</option>
                      <option value="3" <?php if($value->duration==3){echo "selected";}?> >3</option>
                      <option value="6" <?php if($value->duration==6){echo "selected";}?> >6</option>
                      <option value="12" <?php if($value->duration==12){echo "selected";}?>>12</option>
                      <option value="14" <?php if($value->duration==14){echo "selected";}?>>14</option>
                      
                    </select>           

                  </div>

                  <div class="">
                    <label for="author">4.Course content:-</label>
                     
                       <div class="mb-3">
                         <textarea class="" name="desc" rows="3" cols="160"><?php echo $value->content; ?></textarea>  class="textarea"
                       </div>
                     
                  </div> -->

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
                     <input type="text" class="form-control" name="code" placeholder="Address of Institute..." value="<?php echo $value->code; ?>">
                  </div>

                  <div class="form-group">
                     <label for="author">3.Address of the Office:-</label>
                     <input type="text" class="form-control" name="address" placeholder="Address of Institute..." value="<?php echo $value->address; ?>">
                  </div> -->

                  <!-- <div class="">
                    <label for="author">3.Write down Short Description:-</label>
                     
                       <div class="mb-3">
                         <textarea class="" name="desc" rows="3" cols="160"><?php echo $value->description; ?></textarea> <!-- class="textarea" 
                       </div>
                     
                  </div> -->

                  <!-- <div class="form-group">
                     <label for="author">4.Contact Number:-</label>
                     <input type="number" class="form-control" name="contact" placeholder="Enter Contact Number..." value="<?php echo $value->contact; ?>">
                  </div>

                  <div class="form-group">
                     <label for="author">5.Email:-</label>
                     <input type="email" class="form-control" name="mail" placeholder="Enter Email..." value="<?php echo $value->mail; ?>">
                  </div> -->

                  <!-- <div class="form-group">
                     <label >6.Select Image :-</label><br>
                       <input type="file" class="" name="file">
                  </div> -->

                   

                  <!-- <div class="form-group">
                    <label for="cars">6. Select Status:-</label><br>

                    <select name="status" id="" class="custom-select">
                      <option value="1"<?php if($value->status=='1'){ echo "selected"; } ?>>Active</option>        
                      <option value="0"<?php if($value->status=='0'){ echo "selected"; } ?>>Inactive</option>     
                    </select> 
                  </div>  -->

                  
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

            <?php if($this->session->flashdata('update-content')){  ?> 
            Command: toastr["success"]("<i><?php echo $this->session->flashdata('update-content'); ?></i>")
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

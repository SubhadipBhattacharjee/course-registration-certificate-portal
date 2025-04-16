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
              <li class="breadcrumb-item active">Simple Tables</li>-->
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>



   <!-- Main content -->
   <section class="content">
     <div class="container-fluid">
     
     <!-- Responsive Hover Table-START-->
      	<div class="row">
          <div class="col-12">
            <div class="card">

              <div class="card-header">
                <h3 class="">Franchise Page Content</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 100%">
 
                    <!-- <div class="input-group-append">
                      <a href="<?php echo base_url('admin/main-office/form'); ?>">
                       <input type="button" class="btn btn-success float-right" value="Add Post">
                      </a>
                    </div> -->

                  </div>
                 </div>
              <!--Card Tools END-->
              </div>
              <!-- /.card-header -->

              <div class="card-body table-responsive p-0" style="width: 100%">
                <table class="table table-head-fixed">
                  <thead>
                    <tr>
                      <th>Content</th>
                      <!-- <th>Student HelpLine No</th>  
                      <th>Address</th>
                      <th>Email</th> -->
                      <!-- <th>Date</th>
                      <th>Status</th> -->
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php if($value){
                         foreach($value as $val){ ?>
                    <tr>
                      <td><?php echo $val->content; ?></td>
                      <!-- <td><?php echo $val->s_contact; ?></td>
                      <td><?php echo $val->address; ?></td>
                      <td><?php echo $val->mail; ?></td> -->
                      <!-- <td><?php  ?> <?php  ?>&nbsp<?php  ?></td> 
                      <td><?php  ?>
                          <span class="badge badge-success">Active</span>
                          <?php ?>
                          <span class="badge badge-danger">Inactive</span>
                          <?php  ?>
                      </td> -->
                      <td>
                        <a href="<?php echo base_url('admin/franchise-page-content/edit')?>/<?php echo $val->id;?>">
                          <i class="fas fa-edit" style="font-size:20px;color:violate;"></i></a>
                        <!-- <a href="<?php  base_url('admin/magazine/delete_post')?>/<?php ?>"
                         onclick="return confirmation();">
                          <i class="fas fa-trash-alt" style="font-size:20px;color:red;"></i></a> -->
                      </td>
                    </tr>
                   <?php }} ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
       <!-- /.row -->
      <!-- Responsive Hover Table-END-->


      	 
     </div><!-- /.container-fluid -->
   </section>
    <!-- /.content -->
 </div>


<?php
$this->load->view('admin/common/footer');
?>

    <script>


           function confirmation()
           {
               var r=confirm("Are you sure?")
                if (r==true)
                {   
                  return true;
                  //alert("pressed OK!")
                 }
                else
                {
                 // alert("pressed Cancel!");
                   return false;
                }
           }

              
    </script>

     <script>

            <?php if($this->session->flashdata('delete-fashion')){  ?> 
            Command: toastr["error"]("<i><?php echo $this->session->flashdata('delete-fashion'); ?></i>")
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

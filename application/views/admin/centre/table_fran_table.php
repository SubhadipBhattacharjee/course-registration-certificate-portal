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
                <h3 class="">Requirment of Franchise & Other Details</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 100%">
 
                    <div class="input-group-append">
                      <a href="<?php echo base_url('admin/franchise-table-content/table'); ?>">
                       <input type="button" class="btn btn-success float-right" value="Add">
                      </a>
                    </div>

                  </div>
                 </div>
              <!--Card Tools END-->
              </div>
              <!-- /.card-header -->

              <div class="card-body table-responsive p-0" style="width: 100%">
                <table class="table table-head-fixed">
                  <thead>
                    <tr>
                      <th>SL No</th>
                      <th>Category</th>
                      <th>Particulars</th>  
                      <th>Deatils</th>
                      <!-- <th>Contact</th>
                      <th>Status</th>  -->
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php if($value){
                         foreach($value as $key=>$val){ ?>
                    <tr>
                      <td><?php echo $key+1; ?></td>

                      <?php if($val->section=="students"){ ?>
                      <td><?php echo "Study Material for Students"; ?></td>
                      <?php }elseif($val->section=="franchise"){ ?>
                      <td><?php echo "Requirment for Franchise"; ?></td>
                      <?php }elseif($val->section=="centre"){ ?>
                      <td><?php echo "Kits provided to Training Centre"; ?></td>
                      <?php } ?>

                      <td><?php echo $val->particular; ?></td>
                      <td><?php echo $val->value; ?></td>
                      <!-- <td><?php echo $val->contact; ?></td>
                      <td><?php if($val->status=='1'){ ?>
                          <span class="badge badge-success">Active</span>
                          <?php }elseif($val->status=='0'){ ?>
                          <span class="badge badge-danger">Inactive</span>
                          <?php } ?>
                      </td> -->
                      <td>
                        <a href="<?php  echo base_url('admin/franchise-table-content/edit-table')?>/<?php echo $val->id;?>">
                          <i class="fas fa-edit" style="font-size:20px;color:violate;"></i></a>
                        <a href="<?php  echo base_url('admin/franchise-table-content/delete-table')?>/<?php echo $val->id; ?>"
                           onclick="return confirmation();">
                          <i class="fas fa-trash-alt" style="font-size:20px;color:red;"></i></a>
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

            <?php if($this->session->flashdata('delete-branch')){  ?> 
            Command: toastr["error"]("<i><?php echo $this->session->flashdata('delete-branch'); ?></i>")
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

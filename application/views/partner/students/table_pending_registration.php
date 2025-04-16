<?php
$this->load->view('partner/common/header');
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
                <h3 class="">Pending Registration</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 100%">
 
                    <!-- <div class="input-group-append">
                      <a href="<?php echo base_url('partner/enrolled-students/form'); ?>">
                       <input type="button" class="btn btn-success float-right" value="Registration">
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
                      <th>SL No</th>
                      <th>Name</th>
                      <th>Enrollment</th>
                      
                      <th>Centre</th> 
                      <th>Course</th>
                      <th>Fees</th>
                      <th>Status</th>
                      <th>Payment</th>
                      <th>View</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php if($value){
                         foreach($value as $key=>$val){ ?>
                    <tr>
                      <td><?php echo $key+1; ?></td>
                      
                      <td><?php echo $val->c_name; ?></td>
                      <td><?php echo $val->enrollment_num; ?></td>
                      
                      
                      <td><?php echo $val->centre_name; ?></td>
                      <td><?php echo $val->course; ?></td>
                      <td>&#8377;<?php echo $val->fee; ?></td>
                      <td>
                          <?php if($val->status=='1'){ ?>
                            <span class="badge badge-success">Approved</span>
                          <?php }elseif($val->status=='0'){ ?>
                            <a href=""><span class="badge badge-danger">Pending</span></a>
                          <?php } ?>   
                      </td>
                      <td>
                          <?php if($val->pay_status=='1'){ ?>
                            <span class="badge badge-success">Paid</span>
                          <?php }elseif($val->pay_status=='0'){ ?>
                            <a href=""><span class="badge badge-danger">Due</span></i></a>
                          <?php } ?>   
                      </td>
                      <td>
                        <a href="<?php  echo base_url('partner/enrolled-students/view-records')?>/<?php echo $val->id;?>">
                          <i class="fas fa-eye" style="font-size:20px;color:violate;"></i></a>
                        <!-- <a href="<?php  echo base_url('admin/branch-office/delete-branch/')?>/<?php echo $val->id; ?>"
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
$this->load->view('partner/common/footer');
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

<?php
$this->load->view('partner/common/header');
?>


   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

             <?php echo "Welcome ".strtok(($this->session->userdata('f_name')), " "); ?>
              <!--<li class="breadcrumb-item">Home</li>
              <li class="breadcrumb-item active">Dashboard v1</li>-->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <!-- <h3>150</h3> -->
                <h4><?php echo $rows->name; ?></h4>
                 Centre Code :- &nbsp<?php echo $rows->code; ?><br>
                 Address :- &nbsp<?php echo $rows->address; ?><br>
              </div>
              <div class="icon">
                <i class="ion ion-institute"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>


          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $count->number; ?></h3>

                <h4>Pending Registration</h4>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?php echo base_url('partner/enrolled-students/pending');?>" class="small-box-footer">Go <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $approve->number; ?></h3>

                <h4>Approved Registration</h4>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo base_url('partner/enrolled-students/approved');?>" class="small-box-footer">Go <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <!-- <div class="col-lg-4 col-6">
            
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->

          <!-- ./col -->
          

          <!-- ./col -->
        </div>

      </div>
    </section>

     
  </div>
   <!-- /.content-wrapper -->



 <?php
 $this->load->view('partner/common/footer');
 ?>

 <script>

            <?php if($this->session->flashdata('success-login')){  ?> 
            Command: toastr["success"]("<i><?php echo $this->session->flashdata('success-login'); ?></i>")
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



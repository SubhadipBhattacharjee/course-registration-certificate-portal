<!--    /* ********||FOOTER SECTION START||******** *-->
<footer class="foot-sec bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="text-box">
                    <a href="index.html"><img src="<?php echo base_url();?>project/html/assets/images/footer-logo.png" title="logo" alt="..."></a>
                    <ul class="foot-item">
                        <?php foreach($details as $detail){ ?>
                        <li class="item-content"><a href="#" class="btn-action"><i class="fal fa-phone-alt"></i>
                                Call  Now: <?php echo $detail->g_contact; ?></a></li>
                        <li class="item-content"><a href="#" class="btn-action">
                                Student helpline No: <?php echo $detail->s_contact; ?></a></li>
                        <li class="item-content"><a href="#" class="btn-action">
                                Study centre or franchise: <?php echo $detail->f_contact; ?></a></li>
                        <li class="item-content"><a href="#" class="btn-action"><i
                                    class="fal fa-envelope"></i><?php echo $detail->mail; ?></a></li>
                        <li class="item-content"><a href="#" class="btn-action"><i
                                    class="fal fa-map-marker-alt"></i><?php echo $detail->address; ?></a></li>
                        <?php } ?>        
                    </ul>
                </div>
                <div class="icon-box">
                    <ul class="item-icon">
                      <?php foreach($details as $detail){ ?>
                        <li class="item-bar"><a href="<?php echo $detail->fb; ?>" class="icon-btn" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="item-bar"><a href="<?php echo $detail->twitter; ?>" class="icon-btn" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li class="item-bar"><a href="<?php echo $detail->instagram; ?>" class="icon-btn" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li class="item-bar"><a href="<?php echo $detail->pinterest; ?>" class="icon-btn" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                      <?php } ?>      
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="menu-box">
                    <h5 class="item-title">Courses</h5>
                    <ul class="menu-item">
                        <li class="item-nav"><a href="<?php echo base_url('offered-courses');?>" class="btn-nav">Computer Courses</a>
                        </li>
                        <li class="item-nav"><a href="<?php echo base_url('offered-courses');?>" class="btn-nav">Vocation Courses</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="menu-box">
                    <h5 class="item-title">Infomation</h5>
                    <ul class="menu-item">
                        <li class="item-nav"><a href="<?php echo base_url('student-registration');?>" class="btn-nav">Student Registration</a></li>
                        <li class="item-nav"><a href="<?php echo base_url('students/view-result');?>" class="btn-nav">View Result</a></li>
                        <li class="item-nav"><a href="<?php echo base_url('studens/view-profile');?>" class="btn-nav">View Profile</a></li>
                        <li class="item-nav"><a href="<?php echo base_url('image-gallery');?>" class="btn-nav">Gallery</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="menu-box">
                    <h5 class="item-title">Useful links</h5>
                    <ul class="menu-item">
                        <li class="item-nav"><a href="<?php echo base_url('about-us');?>" class="btn-nav">About Us</a></li>
                        <li class="item-nav"><a href="<?php echo base_url('contact-us');?>" class="btn-nav">Contact Us</a></li>
                        <li class="item-nav"><a href="<?php echo base_url('training-centre');?>" class="btn-nav">Study Centre</a></li>
                        <li class="item-nav"><a href="<?php echo base_url('franchise');?>" class="btn-nav">Franchise</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</footer>
<!--    /* ********||  FOOTER SECTION END||******** *-->
<!--    /* ********||  COPY RIGHT SECTION START||******** *-->
<section class="copy-right bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-box">
                    <h6>© Copyright APJ Computer Education Center 2022 • All rights reserved</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<!--    /* ********||  COPY RIGHT SECTION END||******** *-->




<!-- ********|| JAVASCRIPTS STARTS ||******** -->
<script type="text/javascript" src="<?php echo base_url();?>project/html/assets/lib/jQuery/jquery-3.3.1.js"></script>

<!-- jQuery Validation-->
<script type="text/javascript" src="<?php echo base_url('');?>/project/admin/plugins/jquery-validation/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('');?>/project/admin/dist/js/custom_validation.js"></script>
<script type="text/javascript">var baseurl= "<?php echo base_url(); ?>" ;</script>


<script defer="defer" type="text/javascript" src="<?php echo base_url();?>project/html/assets/lib/bootstrap4/popper.min.js"></script>
<script defer="defer" type="text/javascript" src="<?php echo base_url();?>project/html/assets/lib/bootstrap4/bootstrap.js"></script>

<script defer="defer" type="text/javascript" src="<?php echo base_url();?>project/html/assets/lib/owl-carousel/owl.carousel.min.js"></script>
<script defer="defer" type="text/javascript" src="<?php echo base_url();?>project/html/assets/lib/fancybox/jquery.fancybox.min.js"></script>
<script defer="defer" type="text/javascript" src="<?php echo base_url();?>project/html/assets/js/script.js"></script>
<!-- Jquery toaster-->
<script src="<?php echo base_url();?>project/admin/plugins/toastr/toastr.min.js" type="text/javascript"></script>

<script>

            <?php if($this->session->flashdata('registration')){  ?> 
            Command: toastr["success"]("<i><?php echo $this->session->flashdata('registration'); ?></i>")
            <?php } ?>

            <?php if($this->session->flashdata('error')){  ?> 
            Command: toastr["error"]("<i><?php echo $this->session->flashdata('error'); ?></i>")
            <?php } ?>

            <?php if($this->session->flashdata('error-password')){  ?> 
            Command: toastr["error"]("<i><?php echo $this->session->flashdata('error-password'); ?></i>")
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

<!-- ********|| JAVASCRIPTS ENDS ||******** -->
<!-- ********|| ONPAGE JAVASCRIPTS STARTS ||******** -->
<script defer="defer" type="text/javascript">
    $(document).ready(function () {

    });
</script>

<!-- ********|| ONPAGE JAVASCRIPTS ENDS ||******** -->
</body>

</html>
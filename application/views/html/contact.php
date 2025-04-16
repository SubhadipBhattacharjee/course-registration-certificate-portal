<section class="inner-page-banner-sec" style="background-image: url(<?php echo base_url();?>project/html/assets/images/banner-1.jpg);">
    <div class="banner-text">
        <div class="heading">
           Contact Us <span class="bold-text"></span>
        </div>

    </div>
</section>



<section class="all-page">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="<?php echo base_url(''); ?>">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                  </nav>
            </div>
        </div>
    </div>
</section>

    <!-- ********|| Contact start||*******-->
    <section class="sec-contact ">
        <div class="container">
           <div class="row justify-content-between">

                <div class="col-lg-6">
                   <div class="contact-title">Contact Us</div>
                     <div class="btn-btn-success" id="alert"></div>
                    <div class="contact-inner">
                       
                       <div class="account-content">
                          
                               <div class="form-content">
                                  
                                   <form id="contact-form" action="">
                                      
                                        <div class="form-group">
                                            <div class="control-label required">Full Name</div>
                                            <input type="text" class="form-control" placeholder="Full Name *" name="name" id="contact-name">
                                        </div>
                                           
                                         <div class="form-group">
                                           <div class="control-label required">E-mail</div>
                                           <input type="email" class="form-control" placeholder="E-mail address *" name="mail" id="contact-mail">
                                        </div>
                                        <div class="form-group">
                                           <div class="control-label required">Contact Number</div>
                                           <input type="tel" class="form-control" placeholder="Contact Number *" name="phone" id="contact-num">
                                        </div>
                                        <div class="form-group">
                                           <div class="control-label required">Message</div>
                                           <textarea class="form-control" name="msg" id="contact-msg" placeholder="Write a message*" rows="5"></textarea>
                                        </div>

                                        <input type="submit" class="btn-form-submit" value="Submit">

                                   </form>
                               </div>
                           </div>
                    </div>   
                </div>

                <?php foreach($details as $detail){ ?>
                <div class="col-lg-5">
                  <div class="contact-title">Head Office</div>
                  
                   <div class="contact-address">
                       <ul class="footer-link-list">
                           <li><div  class="contact-list">
                               <div class="footer-icon"><i class="fas fa-map-marker-alt"></i></div>
                               <div class="footer-inner">
                                <div class="footer-link-title">Our Address</div>
                                   <div class="footer-link-content"><?php echo $detail->address;?></div>
                               </div>
                           </div>
                           </li>
                           <li>
                            <div class="contact-list">
                            <div class="footer-icon"><i class="fas fa-envelope"></i></div>
                            <div class="footer-inner">
                                <div class="footer-link-title">E-mail</div>
                                <a href="mailto:mgyceindia@gmail.com" class="footer-link-content"><?php echo $detail->mail; ?></a>
                            </div>
                        </div>
                        </li>
                           <li>
                               <div  class="contact-list">
                               <div class="footer-icon"><i class="fas fa-phone-alt"></i></div>
                               <div class="footer-inner">
                                <div class="footer-link-title">Call</div>
                                   <a href="tel:7872836400" class="footer-link-content"><?php echo $detail->g_contact; ?></a>
                               </div>
                           </div>
                           </li>
                           <li>
                               <div  class="contact-list">
                               <div class="footer-icon"><i class="fas fa-phone-alt"></i></div>
                               <div class="footer-inner">
                                <div class="footer-link-title">Student helpline NO:</div>
                                   <a href="tel:8927581756" class="footer-link-content"><?php echo $detail->s_contact; ?></a>
                               </div>
                           </div>
                           </li>
                           <li>
                               <div  class="contact-list">
                               <div class="footer-icon"><i class="fas fa-phone-alt"></i></div>
                               <div class="footer-inner">
                                <div class="footer-link-title">Contract for new study centre or franchise:</div>
                                   <a href="tel:+917872835900" class="footer-link-content"><?php echo $detail->f_contact; ?></a>
                               </div>
                           </div>
                           </li>
                           
                          
                       </ul>
                   </div>
                   <div class="contact-title">Corporate Office</div>
                   <div class="contact-address">
                    <ul class="footer-link-list">
                        <li><div  class="contact-list">
                            <div class="footer-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="footer-inner">
                             <div class="footer-link-title">Our Address</div>
                                <div class="footer-link-content"><?php echo $detail->corp_add; ?></div>
                            </div>
                        </div>
                        </li>
                        
                        
                       
                    </ul>
                   </div>

                   <div class="social-link">
                       <div class="title">Follow Us:</div>
                    <ul class="list-inline mt-2">
                        <li class="list-inline-item"><a class="linkedin" href="<?php echo $detail->fb; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        
                        <li class="list-inline-item"><a class="instagram" href="<?php echo $detail->instagram; ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a class="twitter" href="<?php echo $detail->twitter; ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                   </div>
                </div>

                <?php } ?>



           </div> 
        </div> 
     </section>
<!-- ********|| Contact End||*******-->
    <!-- ********|| Map start||*******-->
    <section class="map-section">
        
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3570.819524085416!2d89.52439031435615!3d26.493755184379467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e2573e988d4d11%3A0xf9055a623288cf64!2sDhakeshwari%20mistanna%20vandar!5e0!3m2!1sen!2sin!4v1646939135266!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
               
    </section>
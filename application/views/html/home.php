
<!-- ********|| BANNER START ||******** -->
<section class="banner-sec">
        <div id="banner-slider" class="owl-carousel">

          <?php foreach($banners as $banner){ ?>
            <div class="item">
                <div class="banner-box">
					<div class="banner-img">
                    <img src="<?php echo base_url();?><?php echo $banner->file; ?>" alt="">
					</div>
                    <div class="banner-text">
                        <div class="banner-title">
                            <?php echo $banner->name; ?>
                          </div>
                        <div class="banner-action"><a href="<?php echo base_url('contact-us'); ?>" class="banner-btn">Contact Us</a></div>
                    </div>
                </div>
            </div>
           <?php } ?>

            <!-- <div class="item">
                <div class="banner-box">
					<div class="banner-img">
                    <img src="<?php echo base_url();?>project/html/assets/images/banner-2.jpg" alt="">
					</div>
                    <div class="banner-text">
                        <div class="banner-title">
                            New Courses
                          </div>
                        <div class="banner-action"><a href="#" class="banner-btn">Contact Us</a></div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="banner-box">
					<div class="banner-img">
                    <img src="<?php echo base_url();?>project/html/assets/images/banner-3.jpg" alt="">
					</div>
                    <div class="banner-text">
                    <div class="banner-title">
						Welcome Students
                          </div>
                        <div class="banner-action"><a href="#" class="banner-btn">Contact Us</a></div>
                    </div>
                </div>
            </div> -->
				
				
                  
            </div>
    </section>

<!-- ********|| BANNER ENDS ||******** -->



<!-- ********|| Introduction START ||******** -->

<section class="intro-section">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <div class="heading">

                    <div class="sub-text">Welcome to</div>

                    <div class="title">APJ Abdul Kalam Youth Computer Education</div>

                </div>

                <div class="des">

                    <?php if($content){ foreach($content as $con){ ?>
                       <p><?php echo $con->gen_desc; ?></p>
                    <?php }} ?>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ********|| Introduction ENDS ||******** -->



<!-- ********|| CATEGORY SECTION START ||******** -->

<section class="category-sec">

    <div class="container">

        <div class="row">

            <div class="col-lg-12 mb-4">

                <div class="title-box">

                    <h3 class="title">OUR courses</h3>

                </div>

            </div>

        </div>

        <div class="row">

         <?php if($details){ foreach($details as $detail){ ?>
            <div class="col-md-6">

                <div class="item">

                    <div class="item-wrap">

                       

                        <div class="item-content">
                            <div class="item-title"><?php echo $detail->name; ?></div>

                            
                              <div class="item-text">
                                <?php echo $detail->description; ?>
                              </div>
                            

                            <div class="item-action"><a href="<?php echo base_url('offered-courses'); ?>" class="btn-action">view more</a></div>

                        </div>

                    </div>

                </div>

            </div>
        <?php }} ?>   

            <!-- <div class="col-md-6">

                <div class="item">

                    <div class="item-wrap">

                      

                        <div class="item-content">

                            <div class="item-title">Vocational Courses</div>

                            <?php if($content){ foreach($content as $con){ ?>
                            <div class="item-text">

                              <?php echo $con->voc_desc; ?>

                            </div>
                            <?php }} ?>

                            <div class="item-action"><a href="<?php echo base_url('offered-courses'); ?>" class="btn-action">view more</a></div>

                        </div>

                    </div>

                </div>

            </div> -->




        </div>

    </div>

</section>

<!-- ********|| CATEGORY SECTION ENDS ||******** -->



<section class="special-section">

    <div class="container">

        <div class="row">

            <div class="col-md-7">

                <div class="special-content">

                    <h2 class="heading">

                        Chairman Message

                    </h2>

                    <div class="des">

                      <div class="sub-text">Dear Student’s</div>  

                      <?php if($content){ foreach($content as $con){ ?>
                        <p><?php echo $con->chairman_desc; ?></p>
                      <?php }} ?>
                    </div>

                    <div class="sub-text"></div>

                </div>

            </div>

            <div class="col-md-5">

               

                <div class="news-content">
                    <div class="title">News &amp; Update</div>

                        <marquee direction="up" class="news-crawler">

                           <?php if($news){ foreach($news as $new){ ?>
                             <div class="item item-new"><?php echo $new->news; ?></div>
                           <?php }} ?>

                        </marquee>

                    </div>
                </div>

            </div>

    </div>

</section>



<!--    /* ********|| SPONSAR PART START||******** *-->

<section class="spon-sec">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div id="sponser-slider" class="owl-carousel">

                <?php foreach($icons as $icon){ ?>
                    <div class="item">

                        <div class="img-box">

                            <img class="img-fluid" src="<?php echo base_url();?><?php echo $icon->file; ?>">

                        </div>

                    </div>
                <?php } ?>


                    <!-- <div class="item">

                        <div class="img-box">

                            <img class="img-fluid" src="<?php echo base_url();?>project/html/assets/images/spon-2.jpg">

                        </div>

                    </div>


                    <div class="item">

                        <div class="img-box">

                            <img class="img-fluid" src="<?php echo base_url();?>project/html/assets/images/spon-3.jpg">

                        </div>

                    </div>


                    <div class="item">

                        <div class="img-box">

                            <img class="img-fluid" src="<?php echo base_url();?>project/html/assets/images/spon-4.jpg">

                        </div>

                    </div>


                    <div class="item">

                        <div class="img-box">

                            <img class="img-fluid" src="<?php echo base_url();?>project/html/assets/images/spon-5.jpg">

                        </div>

                    </div>


                    <div class="item">

                        <div class="img-box">

                            <img class="img-fluid" src="<?php echo base_url();?>project/html/assets/images/spon-6.jpg">

                        </div>

                    </div>


                    <div class="item">

                        <div class="img-box">

                            <img class="img-fluid" src="<?php echo base_url();?>project/html/assets/images/spon-7.jpg">

                        </div>

                    </div> -->



                </div>

            </div>

        </div>

    </div>

</section>








<!--    /* ********|| SPONSAR PART END||******** *-->
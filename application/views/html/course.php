<section class="inner-page-banner-sec" style="background-image: url(<?php echo base_url();?>project/html/assets/images/banner-1.jpg);">
    <div class="banner-text">
        <div class="heading">
           Courses <span class="bold-text"></span>
        </div>

    </div>
</section>



<section class="all-page">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Courses</li>
                    </ol>
                  </nav>
            </div>
        </div>
    </div>
</section>

    <!-- ********|| Detailed Features start||*******-->

<?php foreach($cats as $cat){ ?>  
<section class="detailed-accordion">
    <div class="container">

        <div class="features-title">
            <div class="title-box">
                <h3 class="title"><?php echo $cat->name; ?></h3>
            </div>
        </div>

        <div class="row my-2">
            <div class="col-md-12">

                <div class="accordion">

                 <?php foreach($trades as $trade){ ?>
                    <div class="accordion-item ">

                       
                    <?php if($cat->id==$trade->id){?>
                        <div class="accordion-title js-accordion-title">  
                            <div class="accordion-text">
                                <h3><?php echo $trade->time; ?>&nbsp Months</h3>
                            </div>
                        </div>
                        
                     

                        <div class="accordion-content">
                            
                           <?php foreach($courses as $course){  
                               if($trade->time==$course->duration && $cat->id==$course->p_id){ ?>

                            <div class="accor-des">
                                <div class="item">
                                    <div class="label">COURSE CODE</div>
                                    <div class="data"><?php echo $course->code; ?></div>
                                </div>
                                <div class="item">
                                    <div class="label">COURSE NAME</div>
                                    <div class="data"><?php echo $course->name; ?></div>
                                </div>
                                <div class="item">
                                    <div class="label">DURATION</div>
                                    <div class="data"><?php echo $course->duration; ?>&nbsp Months</div>
                                </div>
                                <div class="item">
                                    <div class="label">CONTENT</div>
                                    <div class="data"><?php echo $course->content; ?></div>
                                </div>
                            </div>

                          <?php }} ?>

                            <!-- <div class="accor-des">
                                <div class="item">
                                    <div class="label">COURSE CODE</div>
                                    <div class="data">MGYCE.M.A.C60</div>
                                </div>
                                <div class="item">
                                    <div class="label">COURSE NAME</div>
                                    <div class="data">MAKEUP ARTIST COURSE</div>
                                </div>
                                <div class="item">
                                    <div class="label">DURATION</div>
                                    <div class="data">3MONTHS</div>
                                </div>
                                <div class="item">
                                    <div class="label">CONTENT</div>
                                    <div class="data">HD MAKEUP,NON HD MAKEUP,PARTY MAKEUP,DIFFERENT TYPES OF EYEMAKEUP(HAND ON PRACTICE),KNOWLEDGE ABOUT DIFFERENT TYPES OF SKIN,BRUSH KNOWLEDGE AND THEIR USES,DIFFERENT WAYS OF MAKEUP PROCESS,PRODUCT KNOWKEDGE AND THEIR USES, COLOUR THEORY,DEMONSTRATION (HD,NON HD),BENGALI AND NON BENGALI BRIDE GROOMONG, DIFFERENT HAIR STYLES,SAREE AND LAHENG DRAPING,SELF GROOMING.</div>
                                </div>
                            </div>

                            <div class="accor-des">
                                <div class="item">
                                    <div class="label">COURSE CODE</div>
                                    <div class="data">MGYCE.M.A.C60</div>
                                </div>
                                <div class="item">
                                    <div class="label">COURSE NAME</div>
                                    <div class="data">MAKEUP ARTIST COURSE</div>
                                </div>
                                <div class="item">
                                    <div class="label">DURATION</div>
                                    <div class="data">3MONTHS</div>
                                </div>
                                <div class="item">
                                    <div class="label">CONTENT</div>
                                    <div class="data">HD MAKEUP,NON HD MAKEUP,PARTY MAKEUP,DIFFERENT TYPES OF EYEMAKEUP(HAND ON PRACTICE),KNOWLEDGE ABOUT DIFFERENT TYPES OF SKIN,BRUSH KNOWLEDGE AND THEIR USES,DIFFERENT WAYS OF MAKEUP PROCESS,PRODUCT KNOWKEDGE AND THEIR USES, COLOUR THEORY,DEMONSTRATION (HD,NON HD),BENGALI AND NON BENGALI BRIDE GROOMONG, DIFFERENT HAIR STYLES,SAREE AND LAHENG DRAPING,SELF GROOMING.</div>
                                </div>
                            </div> -->

                        </div>
                    <?php } ?>    
                    </div>
                 <?php } ?> 
                    

                    <!-- <div class="accordion-item ">
                        <div class="accordion-title js-accordion-title">
                            
                            <div class="accordion-text">
                                <h3><?php echo $course->duration;?></h3>
                            </div>
                        </div>
                        <div class="accordion-content">
                            <div class="accor-des">
                                <div class="item">
                                    <div class="label">COURSE CODE</div>
                                    <div class="data">MGYCE.M.A.C60</div>
                                </div>
                                <div class="item">
                                    <div class="label">COURSE NAME</div>
                                    <div class="data">MAKEUP ARTIST COURSE</div>
                                </div>
                                <div class="item">
                                    <div class="label">DURATION</div>
                                    <div class="data">6 MONTHS</div>
                                </div>
                                <div class="item">
                                    <div class="label">CONTENT</div>
                                    <div class="data">HD MAKEUP,NON HD MAKEUP,PARTY MAKEUP,DIFFERENT TYPES OF EYEMAKEUP(HAND ON PRACTICE),KNOWLEDGE ABOUT DIFFERENT TYPES OF SKIN,BRUSH KNOWLEDGE AND THEIR USES,DIFFERENT WAYS OF MAKEUP PROCESS,PRODUCT KNOWKEDGE AND THEIR USES, COLOUR THEORY,DEMONSTRATION (HD,NON HD),BENGALI AND NON BENGALI BRIDE GROOMONG, DIFFERENT HAIR STYLES,SAREE AND LAHENG DRAPING,SELF GROOMING.</div>
                                </div>
                            </div>

                            <div class="accor-des">
                                <div class="item">
                                    <div class="label">COURSE CODE</div>
                                    <div class="data">MGYCE.M.A.C60</div>
                                </div>
                                <div class="item">
                                    <div class="label">COURSE NAME</div>
                                    <div class="data">MAKEUP ARTIST COURSE</div>
                                </div>
                                <div class="item">
                                    <div class="label">DURATION</div>
                                    <div class="data">6 MONTHS</div>
                                </div>
                                <div class="item">
                                    <div class="label">CONTENT</div>
                                    <div class="data">HD MAKEUP,NON HD MAKEUP,PARTY MAKEUP,DIFFERENT TYPES OF EYEMAKEUP(HAND ON PRACTICE),KNOWLEDGE ABOUT DIFFERENT TYPES OF SKIN,BRUSH KNOWLEDGE AND THEIR USES,DIFFERENT WAYS OF MAKEUP PROCESS,PRODUCT KNOWKEDGE AND THEIR USES, COLOUR THEORY,DEMONSTRATION (HD,NON HD),BENGALI AND NON BENGALI BRIDE GROOMONG, DIFFERENT HAIR STYLES,SAREE AND LAHENG DRAPING,SELF GROOMING.</div>
                                </div>



                            </div>
                            
                        </div>
                    </div>
                    

                    <div class="accordion-item ">
                        <div class="accordion-title js-accordion-title">
                            <div class="accordion-text">
                                <h3>12 Months Courses</h3>
                            </div>
                        </div>

                        <div class="accordion-content">

                            <div class="accor-des">
                                <div class="item">
                                    <div class="label">COURSE CODE</div>
                                    <div class="data">MGYCE.M.A.C60</div>
                                </div>
                                <div class="item">
                                    <div class="label">COURSE NAME</div>
                                    <div class="data">MAKEUP ARTIST COURSE</div>
                                </div>
                                <div class="item">
                                    <div class="label">DURATION</div>
                                    <div class="data">12 MONTHS</div>
                                </div>
                                <div class="item">
                                    <div class="label">CONTENT</div>
                                    <div class="data">HD MAKEUP,NON HD MAKEUP,PARTY MAKEUP,DIFFERENT TYPES OF EYEMAKEUP(HAND ON PRACTICE),KNOWLEDGE ABOUT DIFFERENT TYPES OF SKIN,BRUSH KNOWLEDGE AND THEIR USES,DIFFERENT WAYS OF MAKEUP PROCESS,PRODUCT KNOWKEDGE AND THEIR USES, COLOUR THEORY,DEMONSTRATION (HD,NON HD),BENGALI AND NON BENGALI BRIDE GROOMONG, DIFFERENT HAIR STYLES,SAREE AND LAHENG DRAPING,SELF GROOMING.</div>
                                </div>
                            </div>

                            <div class="accor-des">
                                <div class="item">
                                    <div class="label">COURSE CODE</div>
                                    <div class="data">MGYCE.M.A.C60</div>
                                </div>
                                <div class="item">
                                    <div class="label">COURSE NAME</div>
                                    <div class="data">MAKEUP ARTIST COURSE</div>
                                </div>
                                <div class="item">
                                    <div class="label">DURATION</div>
                                    <div class="data">12 MONTHS</div>
                                </div>
                                <div class="item">
                                    <div class="label">CONTENT</div>
                                    <div class="data">HD MAKEUP,NON HD MAKEUP,PARTY MAKEUP,DIFFERENT TYPES OF EYEMAKEUP(HAND ON PRACTICE),KNOWLEDGE ABOUT DIFFERENT TYPES OF SKIN,BRUSH KNOWLEDGE AND THEIR USES,DIFFERENT WAYS OF MAKEUP PROCESS,PRODUCT KNOWKEDGE AND THEIR USES, COLOUR THEORY,DEMONSTRATION (HD,NON HD),BENGALI AND NON BENGALI BRIDE GROOMONG, DIFFERENT HAIR STYLES,SAREE AND LAHENG DRAPING,SELF GROOMING.</div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                    

                    <div class="accordion-item ">
                        <div class="accordion-title js-accordion-title">
                            
                            <div class="accordion-text">
                                <h3>14 Months Courses</h3>
                            </div>
                        </div>
                        <div class="accordion-content">
                            <div class="accor-des">
                                <div class="item">
                                    <div class="label">COURSE CODE</div>
                                    <div class="data">MGYCE.M.A.C60</div>
                                </div>
                                <div class="item">
                                    <div class="label">COURSE NAME</div>
                                    <div class="data">MAKEUP ARTIST COURSE</div>
                                </div>
                                <div class="item">
                                    <div class="label">DURATION</div>
                                    <div class="data">14 MONTHS</div>
                                </div>
                                <div class="item">
                                    <div class="label">CONTENT</div>
                                    <div class="data">HD MAKEUP,NON HD MAKEUP,PARTY MAKEUP,DIFFERENT TYPES OF EYEMAKEUP(HAND ON PRACTICE),KNOWLEDGE ABOUT DIFFERENT TYPES OF SKIN,BRUSH KNOWLEDGE AND THEIR USES,DIFFERENT WAYS OF MAKEUP PROCESS,PRODUCT KNOWKEDGE AND THEIR USES, COLOUR THEORY,DEMONSTRATION (HD,NON HD),BENGALI AND NON BENGALI BRIDE GROOMONG, DIFFERENT HAIR STYLES,SAREE AND LAHENG DRAPING,SELF GROOMING.</div>
                                </div>



                            </div>
                            <div class="accor-des">
                                <div class="item">
                                    <div class="label">COURSE CODE</div>
                                    <div class="data">MGYCE.M.A.C60</div>
                                </div>
                                <div class="item">
                                    <div class="label">COURSE NAME</div>
                                    <div class="data">MAKEUP ARTIST COURSE</div>
                                </div>
                                <div class="item">
                                    <div class="label">DURATION</div>
                                    <div class="data">14 MONTHS</div>
                                </div>
                                <div class="item">
                                    <div class="label">CONTENT</div>
                                    <div class="data">HD MAKEUP,NON HD MAKEUP,PARTY MAKEUP,DIFFERENT TYPES OF EYEMAKEUP(HAND ON PRACTICE),KNOWLEDGE ABOUT DIFFERENT TYPES OF SKIN,BRUSH KNOWLEDGE AND THEIR USES,DIFFERENT WAYS OF MAKEUP PROCESS,PRODUCT KNOWKEDGE AND THEIR USES, COLOUR THEORY,DEMONSTRATION (HD,NON HD),BENGALI AND NON BENGALI BRIDE GROOMONG, DIFFERENT HAIR STYLES,SAREE AND LAHENG DRAPING,SELF GROOMING.</div>
                                </div>



                            </div>
                            
                        </div>
                    </div>

                     -->
                    
                </div>

                <!---->
            </div>
            
        </div>
    </div>
</section>

<?php } ?>




<!-- ********|| Detailed Features End||*******-->
    <!-- ********|| Detailed Features start||*******-->

<!-- <section class="detailed-accordion">
    <div class="container">
        <div class="features-title">
            <div class="title-box">
                <h3 class="title">Vocational Courses</h3>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md-12">
                <div class="accordion">
                    <div class="accordion-item ">
                        <div class="accordion-title js-accordion-title">
                            
                            <div class="accordion-text">
                                <h3>3 Months Courses</h3>
                            </div>
                        </div>
                        <div class="accordion-content">
                            <div class="accor-des">
                                <div class="item">
                                    <div class="label">COURSE CODE</div>
                                    <div class="data">MGYCE.M.A.C60</div>
                                </div>
                                <div class="item">
                                    <div class="label">COURSE NAME</div>
                                    <div class="data">MAKEUP ARTIST COURSE</div>
                                </div>
                                <div class="item">
                                    <div class="label">DURATION</div>
                                    <div class="data">3MONTHS</div>
                                </div>
                                <div class="item">
                                    <div class="label">CONTENT</div>
                                    <div class="data">HD MAKEUP,NON HD MAKEUP,PARTY MAKEUP,DIFFERENT TYPES OF EYEMAKEUP(HAND ON PRACTICE),KNOWLEDGE ABOUT DIFFERENT TYPES OF SKIN,BRUSH KNOWLEDGE AND THEIR USES,DIFFERENT WAYS OF MAKEUP PROCESS,PRODUCT KNOWKEDGE AND THEIR USES, COLOUR THEORY,DEMONSTRATION (HD,NON HD),BENGALI AND NON BENGALI BRIDE GROOMONG, DIFFERENT HAIR STYLES,SAREE AND LAHENG DRAPING,SELF GROOMING.</div>
                                </div>



                            </div>
                            <div class="accor-des">
                                <div class="item">
                                    <div class="label">COURSE CODE</div>
                                    <div class="data">MGYCE.M.A.C60</div>
                                </div>
                                <div class="item">
                                    <div class="label">COURSE NAME</div>
                                    <div class="data">MAKEUP ARTIST COURSE</div>
                                </div>
                                <div class="item">
                                    <div class="label">DURATION</div>
                                    <div class="data">3MONTHS</div>
                                </div>
                                <div class="item">
                                    <div class="label">CONTENT</div>
                                    <div class="data">HD MAKEUP,NON HD MAKEUP,PARTY MAKEUP,DIFFERENT TYPES OF EYEMAKEUP(HAND ON PRACTICE),KNOWLEDGE ABOUT DIFFERENT TYPES OF SKIN,BRUSH KNOWLEDGE AND THEIR USES,DIFFERENT WAYS OF MAKEUP PROCESS,PRODUCT KNOWKEDGE AND THEIR USES, COLOUR THEORY,DEMONSTRATION (HD,NON HD),BENGALI AND NON BENGALI BRIDE GROOMONG, DIFFERENT HAIR STYLES,SAREE AND LAHENG DRAPING,SELF GROOMING.</div>
                                </div>



                            </div>
                            <div class="accor-des">
                                <div class="item">
                                    <div class="label">COURSE CODE</div>
                                    <div class="data">MGYCE.M.A.C60</div>
                                </div>
                                <div class="item">
                                    <div class="label">COURSE NAME</div>
                                    <div class="data">MAKEUP ARTIST COURSE</div>
                                </div>
                                <div class="item">
                                    <div class="label">DURATION</div>
                                    <div class="data">3MONTHS</div>
                                </div>
                                <div class="item">
                                    <div class="label">CONTENT</div>
                                    <div class="data">HD MAKEUP,NON HD MAKEUP,PARTY MAKEUP,DIFFERENT TYPES OF EYEMAKEUP(HAND ON PRACTICE),KNOWLEDGE ABOUT DIFFERENT TYPES OF SKIN,BRUSH KNOWLEDGE AND THEIR USES,DIFFERENT WAYS OF MAKEUP PROCESS,PRODUCT KNOWKEDGE AND THEIR USES, COLOUR THEORY,DEMONSTRATION (HD,NON HD),BENGALI AND NON BENGALI BRIDE GROOMONG, DIFFERENT HAIR STYLES,SAREE AND LAHENG DRAPING,SELF GROOMING.</div>
                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ">
                        <div class="accordion-title js-accordion-title">
                            
                            <div class="accordion-text">
                                <h3>6 Months Courses</h3>
                            </div>
                        </div>
                        <div class="accordion-content">
                            <div class="accor-des">
                                <div class="item">
                                    <div class="label">COURSE CODE</div>
                                    <div class="data">MGYCE.M.A.C60</div>
                                </div>
                                <div class="item">
                                    <div class="label">COURSE NAME</div>
                                    <div class="data">MAKEUP ARTIST COURSE</div>
                                </div>
                                <div class="item">
                                    <div class="label">DURATION</div>
                                    <div class="data">6 MONTHS</div>
                                </div>
                                <div class="item">
                                    <div class="label">CONTENT</div>
                                    <div class="data">HD MAKEUP,NON HD MAKEUP,PARTY MAKEUP,DIFFERENT TYPES OF EYEMAKEUP(HAND ON PRACTICE),KNOWLEDGE ABOUT DIFFERENT TYPES OF SKIN,BRUSH KNOWLEDGE AND THEIR USES,DIFFERENT WAYS OF MAKEUP PROCESS,PRODUCT KNOWKEDGE AND THEIR USES, COLOUR THEORY,DEMONSTRATION (HD,NON HD),BENGALI AND NON BENGALI BRIDE GROOMONG, DIFFERENT HAIR STYLES,SAREE AND LAHENG DRAPING,SELF GROOMING.</div>
                                </div>



                            </div>
                            <div class="accor-des">
                                <div class="item">
                                    <div class="label">COURSE CODE</div>
                                    <div class="data">MGYCE.M.A.C60</div>
                                </div>
                                <div class="item">
                                    <div class="label">COURSE NAME</div>
                                    <div class="data">MAKEUP ARTIST COURSE</div>
                                </div>
                                <div class="item">
                                    <div class="label">DURATION</div>
                                    <div class="data">6 MONTHS</div>
                                </div>
                                <div class="item">
                                    <div class="label">CONTENT</div>
                                    <div class="data">HD MAKEUP,NON HD MAKEUP,PARTY MAKEUP,DIFFERENT TYPES OF EYEMAKEUP(HAND ON PRACTICE),KNOWLEDGE ABOUT DIFFERENT TYPES OF SKIN,BRUSH KNOWLEDGE AND THEIR USES,DIFFERENT WAYS OF MAKEUP PROCESS,PRODUCT KNOWKEDGE AND THEIR USES, COLOUR THEORY,DEMONSTRATION (HD,NON HD),BENGALI AND NON BENGALI BRIDE GROOMONG, DIFFERENT HAIR STYLES,SAREE AND LAHENG DRAPING,SELF GROOMING.</div>
                                </div>



                            </div>
                            
                        </div>
                    </div>
                    <div class="accordion-item ">
                        <div class="accordion-title js-accordion-title">
                            
                            <div class="accordion-text">
                                <h3>12 Months Courses</h3>
                            </div>
                        </div>
                        <div class="accordion-content">
                            <div class="accor-des">
                                <div class="item">
                                    <div class="label">COURSE CODE</div>
                                    <div class="data">MGYCE.M.A.C60</div>
                                </div>
                                <div class="item">
                                    <div class="label">COURSE NAME</div>
                                    <div class="data">MAKEUP ARTIST COURSE</div>
                                </div>
                                <div class="item">
                                    <div class="label">DURATION</div>
                                    <div class="data">12 MONTHS</div>
                                </div>
                                <div class="item">
                                    <div class="label">CONTENT</div>
                                    <div class="data">HD MAKEUP,NON HD MAKEUP,PARTY MAKEUP,DIFFERENT TYPES OF EYEMAKEUP(HAND ON PRACTICE),KNOWLEDGE ABOUT DIFFERENT TYPES OF SKIN,BRUSH KNOWLEDGE AND THEIR USES,DIFFERENT WAYS OF MAKEUP PROCESS,PRODUCT KNOWKEDGE AND THEIR USES, COLOUR THEORY,DEMONSTRATION (HD,NON HD),BENGALI AND NON BENGALI BRIDE GROOMONG, DIFFERENT HAIR STYLES,SAREE AND LAHENG DRAPING,SELF GROOMING.</div>
                                </div>



                            </div>
                            <div class="accor-des">
                                <div class="item">
                                    <div class="label">COURSE CODE</div>
                                    <div class="data">MGYCE.M.A.C60</div>
                                </div>
                                <div class="item">
                                    <div class="label">COURSE NAME</div>
                                    <div class="data">MAKEUP ARTIST COURSE</div>
                                </div>
                                <div class="item">
                                    <div class="label">DURATION</div>
                                    <div class="data">12 MONTHS</div>
                                </div>
                                <div class="item">
                                    <div class="label">CONTENT</div>
                                    <div class="data">HD MAKEUP,NON HD MAKEUP,PARTY MAKEUP,DIFFERENT TYPES OF EYEMAKEUP(HAND ON PRACTICE),KNOWLEDGE ABOUT DIFFERENT TYPES OF SKIN,BRUSH KNOWLEDGE AND THEIR USES,DIFFERENT WAYS OF MAKEUP PROCESS,PRODUCT KNOWKEDGE AND THEIR USES, COLOUR THEORY,DEMONSTRATION (HD,NON HD),BENGALI AND NON BENGALI BRIDE GROOMONG, DIFFERENT HAIR STYLES,SAREE AND LAHENG DRAPING,SELF GROOMING.</div>
                                </div>



                            </div>
                        
                        </div>
                    </div>
                    <div class="accordion-item ">
                        <div class="accordion-title js-accordion-title">
                            
                            <div class="accordion-text">
                                <h3>14 Months Courses</h3>
                            </div>
                        </div>
                        <div class="accordion-content">
                            <div class="accor-des">
                                <div class="item">
                                    <div class="label">COURSE CODE</div>
                                    <div class="data">MGYCE.M.A.C60</div>
                                </div>
                                <div class="item">
                                    <div class="label">COURSE NAME</div>
                                    <div class="data">MAKEUP ARTIST COURSE</div>
                                </div>
                                <div class="item">
                                    <div class="label">DURATION</div>
                                    <div class="data">14 MONTHS</div>
                                </div>
                                <div class="item">
                                    <div class="label">CONTENT</div>
                                    <div class="data">HD MAKEUP,NON HD MAKEUP,PARTY MAKEUP,DIFFERENT TYPES OF EYEMAKEUP(HAND ON PRACTICE),KNOWLEDGE ABOUT DIFFERENT TYPES OF SKIN,BRUSH KNOWLEDGE AND THEIR USES,DIFFERENT WAYS OF MAKEUP PROCESS,PRODUCT KNOWKEDGE AND THEIR USES, COLOUR THEORY,DEMONSTRATION (HD,NON HD),BENGALI AND NON BENGALI BRIDE GROOMONG, DIFFERENT HAIR STYLES,SAREE AND LAHENG DRAPING,SELF GROOMING.</div>
                                </div>



                            </div>
                            <div class="accor-des">
                                <div class="item">
                                    <div class="label">COURSE CODE</div>
                                    <div class="data">MGYCE.M.A.C60</div>
                                </div>
                                <div class="item">
                                    <div class="label">COURSE NAME</div>
                                    <div class="data">MAKEUP ARTIST COURSE</div>
                                </div>
                                <div class="item">
                                    <div class="label">DURATION</div>
                                    <div class="data">14 MONTHS</div>
                                </div>
                                <div class="item">
                                    <div class="label">CONTENT</div>
                                    <div class="data">HD MAKEUP,NON HD MAKEUP,PARTY MAKEUP,DIFFERENT TYPES OF EYEMAKEUP(HAND ON PRACTICE),KNOWLEDGE ABOUT DIFFERENT TYPES OF SKIN,BRUSH KNOWLEDGE AND THEIR USES,DIFFERENT WAYS OF MAKEUP PROCESS,PRODUCT KNOWKEDGE AND THEIR USES, COLOUR THEORY,DEMONSTRATION (HD,NON HD),BENGALI AND NON BENGALI BRIDE GROOMONG, DIFFERENT HAIR STYLES,SAREE AND LAHENG DRAPING,SELF GROOMING.</div>
                                </div>



                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</section> -->



<!-- ********|| Detailed Features End||*******-->
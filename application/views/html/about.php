<section class="inner-page-banner-sec" style="background-image: url(<?php echo base_url();?>project/html/assets/images/banner-1.jpg);">
    <div class="banner-text">
        <div class="heading">
           About Us <span class="bold-text"></span>
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
                      <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                  </nav>
            </div>
        </div>
    </div>
</section>

<!-- ********|| Contact start||*******-->

<section class="about-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-box">
                    <h3 class="title">WHO WE ARE</h3>
                </div>
                <!-- <div class="sub-des">
                    <p>
                        MAHATMA GANDHI YOUTH COMPUTER EDUCATION is a certified Educational Institute. It aims to provide end-t-end learning and process solution that leads to employability enhancement of its students by imparting them knowledge, skills and on –the job training which a class is apart and in tune with the current industry requirement. MAHATMA GANDHI YOUTH COMPUTER EDUCATION was set up with a view to create qualified professionals to meet the requirement of modern and quality conscious industries by providing quality education. We believe that education is the foundation for a healthy and vibrant society.
                    </p>
                </div> -->
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-7">
                <div class="des">

                    <p> <?php foreach($contents as $con){ echo $con->who;} ?>     </p>
                </div>
              
            </div>
            <div class="col-md-5">
               <?php foreach($contents as $con){ ?>
                <div class="about-sec-img">
                    <img class="img-fluid" src="<?php echo base_url();?><?php echo $con->file; ?>">
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- ********|| Contact End||*******-->
<!-- ********|| Mission start||*******-->
<section class="mission-sec ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-box">
                    <h3 class="title">OUR MISSION</h3>
                </div>
                <div class="sub-des">
                    <p>
                     <?php foreach($contents as $con){ echo $con->mission;} ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <!-- <div class="col-md-5">
                 <div class="mission-sec-img">
                    <img class="img-fluid" src="<?php echo base_url();?>project/html/assets/images/banner-1.jpg">
                </div> 
            </div> -->

            <!-- <div class="col-md-12">
                <div class="des">
                    <ul class="item-list">	
                        <li class="item-bar">
                            <div class="about-icon abt-icon">
                                <i class="fal fa-check"></i>
                            </div>
                            <div class="list-content">
                                <div class="list-text abt-list">Honesty is our best policy.</div>
                            </div>
                            </li>
                            <li class="item-bar">
                                <div class="about-icon abt-icon">
                                    <i class="fal fa-check"></i>
                                </div>
                                <div class="list-content">
                                    <div class="list-text abt-list">Doing the right thing the first time and every time.</div>
                                </div>
                                </li>
                                <li class="item-bar">
                                    <div class="about-icon abt-icon">
                                        <i class="fal fa-check"></i>
                                    </div>
                                    <div class="list-content">
                                        <div class="list-text abt-list">To generate new knowledge by engaging in cutting edge research.</div>
                                    </div>
                                    </li>
                                    <li class="item-bar">
                                        <div class="about-icon abt-icon">
                                            <i class="fal fa-check"></i>
                                        </div>
                                        <div class="list-content">
                                            <div class="list-text abt-list">Transform the society through excellence in education. Computer cultural and Technical Community empowerment, affordable Healthcare and sustained Environmental Protection.</div>
                                        </div>
                                    </li>
                                    <li class="item-bar">
                                        <div class="about-icon abt-icon">
                                            <i class="fal fa-check"></i>
                                        </div>
                                        <div class="list-content">
                                            <div class="list-text abt-list">The mission of the institution is to be an institution of recognition and improve quality of life of the social fabric by nurturing talent.</div>
                                        </div>
                                    </li>
                    </ul>
                   
                </div>
              
            </div> -->
           
        </div>
    </div>
</section>

<!-- ********|| Mission End||*******-->
<!-- ********||Vission start||*******-->
<section class="vission-sec ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-box">
                    <h3 class="title">OUR VISSION</h3>
                </div>
                <div class="sub-des">
                    <p>
                      <?php foreach($contents as $con){ echo $con->vision;} ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <!-- <div class="col-md-12">
                <div class="des">
                    <ul class="item-list">	
                        <li class="item-bar">
                            <div class="about-icon abt-icon">
                                <i class="fal fa-check"></i>
                            </div>
                            <div class="list-content">
                                <div class="list-text abt-list">Our vision is to impart holistic education to the student teachers for the academic excellence and inculcating National human values in them through academic co-curricular and socially meaningful activities.</div>
                            </div>
                            </li>
                            <li class="item-bar">
                                <div class="about-icon abt-icon">
                                    <i class="fal fa-check"></i>
                                </div>
                                <div class="list-content">
                                    <div class="list-text abt-list">The vision of the promoting body (the Trust) is to important quality education with high standards par excellence in education, to provide an excellent infrastructure in a serene and conductive atmosphere that would motivate the students in the pursuit of knowledge in Engineering and Technology</div>
                                </div>
                                </li>
                                <li class="item-bar">
                                    <div class="about-icon abt-icon">
                                        <i class="fal fa-check"></i>
                                    </div>
                                    <div class="list-content">
                                        <div class="list-text abt-list">To be the global leadership in human development, excellence in education and healthcare.</div>
                                    </div>
                                    </li>
                                    <li class="item-bar">
                                        <div class="about-icon abt-icon">
                                            <i class="fal fa-check"></i>
                                        </div>
                                        <div class="list-content">
                                            <div class="list-text abt-list">Transform the society through excellence in education. Computer cultural and Technical Community empowerment, affordable Healthcare and sustained Environmental Protection.</div>
                                        </div>
                                    </li>
                                    <li class="item-bar">
                                        <div class="about-icon abt-icon">
                                            <i class="fal fa-check"></i>
                                        </div>
                                        <div class="list-content">
                                            <div class="list-text abt-list">TheVission of the institution is to be an institution of recognition and improve quality of life of the social fabric by nurturing talent.</div>
                                        </div>
                                    </li>
                    </ul>
                   
                </div>
              
            </div> -->

            <!-- <div class="col-md-5">
                <div class="vission-sec-img">
                    <img class="img-fluid" src="<?php echo base_url();?>project/html/assets/images/banner-3.jpg">
                </div>
            </div> -->
           
           
        </div>
    </div>
</section>

<!-- ********|| Vission End||*******-->
<!-- ********||Quality start||*******-->
<section class="quality-sec ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-box">
                    <h3 class="title">QUALITY POLICY</h3>
                </div>
                <div class="sub-des">
                    <p>
                      <?php foreach($contents as $con){ echo $con->policy;} ?>
                    </p>
                </div>
            </div>
        </div>
       
    </div>
</section>

<!-- ********|| Quality End||*******-->
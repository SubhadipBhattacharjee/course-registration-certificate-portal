<section class="inner-page-banner-sec" style="background-image: url(<?php echo base_url();?>project/html/assets/images/banner-1.jpg);">
    <div class="banner-text">
        <div class="heading">
            Study Centers <span class="bold-text"></span>
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
                        <li class="breadcrumb-item active" aria-current="page">Study centers</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>


<section class="head-office">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-box">
                    <h3 class="title">Our Head Office</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-between mt-3">
            <div class="col-md-6">

                <div class="des">
                    <?php foreach($centre as $cen){ ?>
                    <p><?php echo $cen->description; ?></p>
                    <?php } ?>
                </div>

                <div class="main-center">

                  <?php foreach($centre as $cen){ ?>
                    <div class="item">
                        <div class="icon"><i class="fad fa-map-marker-alt fa-swap-opacity"></i></div>
                        <div class="item-box">
                            <div class="item-title">Address</div>
                            <div class="data"><?php echo $cen->address; ?></div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon"><i class="fad fa-envelope fa-swap-opacity"></i></div>
                        <div class="item-box">
                            <div class="item-title">Email</div>
                            <div class="data"><?php echo $cen->mail; ?></div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon"><i class="fad fa-phone-alt fa-swap-opacity"></i></div>
                        <div class="item-box">
                            <div class="item-title">Contact</div>
                            <div class="data"><?php echo $cen->g_contact; ?></div>
                        </div>
                    </div>
                  <?php } ?>

                </div>
            </div>
            <div class="col-md-5">
                <div class="head-office-img">
                    <img class="img-fluid" src="<?php echo base_url();?>project/html/assets/images/banner-3.jpg">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="center-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-box">
                    <h3 class="title">ASSOCIATED INSTITUTE</h3>
                </div>
            </div>
        </div>
        <div class="center-images">
            <div class="center-list">


            <?php foreach($branch as $bra){ ?>
                <div class="center-item">
                    <div class="item">
                        <div class="item-box institute">

                            <div class="data"><?php echo $bra->name; ?></div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon"><i class="fad fa-fw fa-id-badge fa-swap-opacity"></i></div>
                        <div class="item-box ">
                            <div class="item-title">Centre Code</div>
                            <div class="data"><?php echo $bra->code; ?></div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon"><i class="fad fa-map-marker-alt fa-swap-opacity"></i></div>
                        <div class="item-box">

                            <div class="data"><?php echo $bra->address; ?></div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon"><i class="fad fa-phone-alt fa-swap-opacity"></i></div>
                        <div class="item-box">

                            <div class="data"><?php echo $bra->contact; ?></div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon"><i class="fad fa-envelope fa-swap-opacity"></i></div>
                        <div class="item-box">
                            <!-- <div class="item-title">Email</div> -->
                            <div class="data"><?php echo $bra->mail; ?></div>
                        </div>
                    </div>

                </div>
              <?php } ?>

                <!-- <div class="center-item">

                    <div class="item">
                        <div class="item-box institute">

                            <div class="data">SALKUMARHAT,Mahatma Gandhi Youth Computer Education</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon"><i class="fad fa-fw fa-id-badge fa-swap-opacity"></i></div>
                        <div class="item-box ">
                            <div class="item-title">Center Code</div>
                            <div class="data">#12589</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon"><i class="fad fa-map-marker-alt fa-swap-opacity"></i></div>
                        <div class="item-box">

                            <div class="data">B.F ROAD, BHANGAPOOL
                                ALIPURDUAR
                                PIN: 736121</div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon"><i class="fad fa-phone-alt fa-swap-opacity"></i></div>
                        <div class="item-box">

                            <div class="data">7872836400</div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon"><i class="fad fa-envelope fa-swap-opacity"></i></div>
                        <div class="item-box">
                            <div class="item-title">Email</div> 
                            <div class="data">mgyceindia@gmail.com</div>
                        </div>
                    </div>


                </div>


                <div class="center-item">

                    <div class="item">
                        <div class="item-box institute">

                            <div class="data">DIMA , Mahatma Gandhi Youth Computer Education</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon"><i class="fad fa-fw fa-id-badge fa-swap-opacity"></i></div>
                        <div class="item-box ">
                            <div class="item-title">Center Code</div>
                            <div class="data">#12589</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon"><i class="fad fa-map-marker-alt fa-swap-opacity"></i></div>
                        <div class="item-box">

                            <div class="data">B.F ROAD, BHANGAPOOL
                                ALIPURDUAR
                                PIN: 736121</div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon"><i class="fad fa-phone-alt fa-swap-opacity"></i></div>
                        <div class="item-box">

                            <div class="data">7872836400</div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon"><i class="fad fa-envelope fa-swap-opacity"></i></div>
                        <div class="item-box">
                             <div class="item-title">Email</div> 
                            <div class="data">mgyceindia@gmail.com</div>
                        </div>
                    </div>


                </div>


                <div class="center-item">

                    <div class="item">
                        <div class="item-box institute">

                            <div class="data">ALIPURDUAR DISTRICT ZONAL OFFICE</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon"><i class="fad fa-fw fa-id-badge fa-swap-opacity"></i></div>
                        <div class="item-box ">
                            <div class="item-title">Center Code</div>
                            <div class="data">#12589</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon"><i class="fad fa-map-marker-alt fa-swap-opacity"></i></div>
                        <div class="item-box">

                            <div class="data">B.F ROAD, BHANGAPOOL
                                ALIPURDUAR
                                PIN: 736121</div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon"><i class="fad fa-phone-alt fa-swap-opacity"></i></div>
                        <div class="item-box">

                            <div class="data">7872836400</div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon"><i class="fad fa-envelope fa-swap-opacity"></i></div>
                        <div class="item-box">
                             <div class="item-title">Email</div> 
                            <div class="data">mgyceindia@gmail.com</div>
                        </div>
                    </div>


                </div>

                <div class="center-item">

                    <div class="item">
                        <div class="item-box institute">

                            <div class="data">ALIPURDUAR DISTRICT ZONAL OFFICE</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon"><i class="fad fa-fw fa-id-badge fa-swap-opacity"></i></div>
                        <div class="item-box ">
                            <div class="item-title">Center Code</div>
                            <div class="data">#12589</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon"><i class="fad fa-map-marker-alt fa-swap-opacity"></i></div>
                        <div class="item-box">

                            <div class="data">B.F ROAD, BHANGAPOOL
                                ALIPURDUAR
                                PIN: 736121</div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon"><i class="fad fa-phone-alt fa-swap-opacity"></i></div>
                        <div class="item-box">

                            <div class="data">7872836400</div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="icon"><i class="fad fa-envelope fa-swap-opacity"></i></div>
                        <div class="item-box">
                            <div class="item-title">Email</div>
                            <div class="data">mgyceindia@gmail.com</div>
                        </div>
                    </div> -->


                </div>
                
            </div>
        </div>
    </div>
</section>



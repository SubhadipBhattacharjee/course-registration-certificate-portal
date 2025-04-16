<section class="inner-page-banner-sec" style="background-image: url(<?php echo base_url();?>project/html/assets/images/banner-1.jpg);">
    <div class="banner-text">
        <div class="heading">
          Gallery <span class="bold-text"></span>
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
                      <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                    </ol>
                  </nav>
            </div>
        </div>
    </div>
</section>

    

<section class="gallery-section">
    <div class="container">
        
        <div class="row">
            <div class="col-md-12">
                <div class="title-box">
                    <h3 class="title">Our Gallery</h3>
                </div>
            </div>
        </div>

        <div class="gallery-images">
            <div class="gallery-list">


                <?php foreach($images as $img){ ?>
                    <div class="gallery-item">
                        <a href="<?php echo base_url();?><?php echo $img->file; ?>" class="gallery-img d-block" data-fancybox="image">
                            <img src="<?php echo base_url();?><?php echo $img->file; ?>">
                        </a>
                    </div>
                <?php } ?>    
                  
            </div>
        </div>

    </div>
</section>



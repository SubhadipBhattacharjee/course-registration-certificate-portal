<section class="inner-page-banner-sec" style="background-image: url(<?php echo base_url();?>project/html/assets/images/banner-1.jpg);">
    <div class="banner-text">
        <div class="heading">
           Franchise <span class="bold-text"></span>
        </div>
    </div>
</section>



<section class="all-page">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page"> Franchise</li>
                    </ol>
                  </nav>
            </div>
        </div>
    </div>
</section>

<!-- ********|| Franchise start||*******-->

<section class="franchise-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-box">
                    <h3 class="title">HOW TO GET AFFILIATION</h3>
                </div>
                <div class="sub-des">
                    <p>
                        <?php foreach($contents as $cont){ echo $cont->content; } ?>
                    </p>
                </div>
                <div class="sub-descriptions">
                    <!-- <div class="description-content">
                        <div class="sub-title">How big is franchising, as an industry?</div>
                        <div class="des-content">
                            <p>
                                According to a report put out by the IFA (International Franchise Association), franchising is huge. As of 2005;
                                 There were 909,253 franchised business establishments in the United States.
                                  Franchised businesses provided more than 11 million jobs, or 8.1 percent of the national private-sector workforce.
                                    Franchised businesses supplied an annual payroll of $278.6 billion, or 5.3 percent of all private-sector payrolls in the United States.
                                           Franchised businesses produce goods and services worth $880.9 billion per year, or 4.4 percent of private- sector output in the United States.
                            </p>
                        </div>
                    </div> -->
                    <!-- <div class="description-content">
                        <div class="sub-title">Differences between a Franchise Opportunity and a Business Opportunity</div>
                        <div class="des-content">
                            <p>
                                According to a report put out by the IFA (International Franchise Association), franchising is huge. As of 2005;
                                There were 909,253 franchised business establishments in the United States.
                                Franchised businesses provided more than 11 million jobs, or 8.1 percent of the national private-sector workforce.
                                  Franchised businesses supplied an annual payroll of $278.6 billion, or 5.3 percent of all private-sector payrolls in the United States.
                                 Franchised businesses produce goods and services worth $880.9 billion per year, or 4.4 percent of private- sector output in the United States.
                            </p>
                        </div>
                    </div> -->
                    <!-- <div class="description-content">
                        <div class="sub-title">How you get the Franchisee</div>
                        <div class="des-content">
                            <p>
                                You may apply for MGYCE franchisee by downloading application form from our Website or from MGYCE centres. Fill the form as directed in application Form with all respective prescribed documents. Send the application form with required documents along with Demand Draft (DD) to MGYCE H.O. Verification Department will conduct verification process of your documents and inspect your space referred for Franchisee center (Verification Process takes 3 to 5 working days). If get you approval from MGYCE governed Jury / Verification department, MGYCE will send Sample Kit and ATC Authorization Letter.
                            </p>
                        </div>
                    </div> -->
                   

                </div>
            </div>
        </div>
      
    </div>
</section>
<!-- ********|| Franchise End||*******-->
<!-- ********|| Gifts start||*******-->
<section class="facility-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="title">KITS RECEIVABLES BY MGYCE AUTHORIZED TRAINING CENTRE (ATC)</div>
                <div class="facility-list-table">
                    
                    
                    <div class="item item-header">
                        <div class="name"> Particulars</div>
                        <div class="quantity">Quantity</div>
                    </div>
                    

                    <?php foreach($rows as $row){ 
                        if($row->section=="centre"){ ?>
                     <div class="item">
                        <div class="name"><?php echo $row->particular; ?></div>
                        <div class="quantity"><?php echo $row->value; ?></div>
                    </div>
                    <?php }} ?>

                   <!-- <div class="item">
                        <div class="name"> Faculty Training</div>
                        <div class="quantity">Free of cost</div>
                    </div>
                    <div class="item">
                        <div class="name">  Advertisement of your Center Name with Centre Director Image  on website</div>
                        <div class="quantity">Free of cost</div>
                    </div>
                    <div class="item">
                        <div class="name"> Student Brochure</div>
                        <div class="quantity">200 Pcs</div>
                    </div> -->

                </div>
            </div>
            <div class="col-md-6">
                <div class="title"> The Materials provided to the MGYCE Students Free of Cost:</div>
                <div class="free-facility-list-table">
                    
                   
                    <div class="item item-header">
                        <div class="name">  Folder</div>
                        <div class="quantity">Free of cost</div>
                    </div>

                    <?php foreach($rows as $row){ 
                        if($row->section=="students"){ ?>
                    <div class="item">
                        <div class="name"><?php echo $row->particular; ?></div>
                        <div class="quantity"><?php echo $row->value; ?></div>
                    </div>
                    <?php }} ?>

                    <!-- <div class="item">
                        <div class="name"> Faculty Training</div>
                        <div class="quantity">Free of cost</div>
                    </div>
                    <div class="item">
                        <div class="name">  Advertisement of your Center Name with Centre Director Image  on website</div>
                        <div class="quantity">Free of cost</div>
                    </div>
                    <div class="item">
                        <div class="name"> Student Brochure</div>
                        <div class="quantity">200 Pcs</div>
                    </div> -->

                </div>
                <div class="others-facility-list-table">
                    
                    <div class="item item-header">
                        <div class="sl-no">Sl. No.</div>
                        <div class="name">  Minimum Requirement</div>
                        <div class="quantity">Quantity</div>
                    </div>

                    <?php foreach($franch as $key=>$row){ 
                        if($row->section=="franchise"){ ?>
                    <div class="item">
                        <div class="sl-no"><?php echo $key+1 ; ?></div>
                        <div class="name"><?php echo $row->particular; ?></div>
                        <div class="quantity"><?php echo $row->value; ?></div>
                    </div>
                    <?php }} ?>

                    <!-- <div class="item">
                        <div class="sl-no"> 2</div>
                        <div class="name">  Knowledge of Technology Required</div>
                        <div class="quantity"> Faculty – Thorough knowledge of subjects, disciplined, Student’s problem solving capacity & disciplined.</div>
                    </div>
                    <div class="item">
                        <div class="sl-no"> 3</div>
                        <div class="name"> Any Income Barrier</div>
                        <div class="quantity"> NO</div>
                    </div>
                    <div class="item">
                        <div class="sl-no"> 4</div>
                        <div class="name"> Student Brochure</div>
                        <div class="quantity">200 Pcs</div>
                    </div> -->

                </div>
            </div>

        </div>
    </div>
</section>


<!-- ********|| Gifts End||*******-->
<!-- ********||Franchise Contact start||*******-->
<section class="franchise-contact ">
    <div class="container">
       <div class="row justify-content-between">
           <div class="col-lg-6">

               <div class="contact-title">Contact Us</div>
                  <div class="btn-btn-success" id="alert"></div>
               <div class="contact-inner">
                   
                   <div class="account-content">
                      
                           <div class="form-content">
                               <form id="contact-form" action="" >
                                  
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
           <div class="col-lg-5">
               <div class="franchise-img">
                   <img src="<?php echo base_url();?>project/html/assets/images/franchise.png">
               </div>
      
           </div>
       </div> 
    </div> 
 </section>

<!-- ********|| Franchise Contact End||*******-->
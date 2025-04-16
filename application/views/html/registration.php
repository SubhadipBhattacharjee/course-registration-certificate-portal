<section class="inner-page-banner-sec" style="background-image: url(<?php echo base_url();?>project/html/assets/images/banner-1.jpg);">
    <div class="banner-text">
        <div class="heading">
            Student Registration <span class="bold-text"></span>
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
                        <li class="breadcrumb-item active" aria-current="page">Registration</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>


<section class="registration">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-box">
                    <h3 class="title">Registration</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-content">
                    <form method="post" action="<?php echo base_url('student-registration/save'); ?>" id="student-registration" enctype="multipart/form-data">
                        <div class="row">
                            <div class=" col-md-6">

                                
                              
                             
                              <div class="form-group">
                                <div class="control-label required">Study Centre Name</div>
                                <input type="text" class="form-control" placeholder="Centre Name *" name="centre_name">
                              </div>

                              <div class="form-group ">
                                    <div class="control-label required">Study Centre Code </div>
                                    <input type="text" class="form-control" placeholder=" Centre Code *" name="code">
                                </div>
                             
                            <div class="form-group">
                                <div class="control-label required">Want Admission in:</div>
                                  <select class="form-select" aria-label="Default select example" name="category" id="cat">
                                    <option value="">Select Category</option>
                                    <?php foreach($category as $cat){ ?>
                                    <option value="<?php echo $cat->id; ?>"><?php echo $cat->name; ?></option>
                                    <?php } ?>
                                  </select>
                            </div>
                            
                            <div class="form-group">
                                <div class="control-label required">Course Duration</div>
                                  <select class="form-select" aria-label="Default select example" name="duration" id="time">
                                    <option value="">Select Course Duration</option>
                                    <!-- <option value="1">3 Months</option>
                                    <option value="2">4 Months</option>
                                    <option value="3">6 Months</option> -->
                                  </select>
                            </div>
                            <div class="form-group">
                                <div class="control-label required">Name of the Course</div>
                                  <select class="form-select" aria-label="Default select example" name="course_name" id="course">
                                    <option value="">Select Course Name</option>
                                    <!-- <option value="1">Course Name</option>
                                    <option value="2">Course Name</option>
                                    <option value="3">Course Name</option> -->
                                  </select>
                            </div>
                            <div class="form-group">
                                <div class="control-label required">Name</div>
                                <input type="name" class="form-control" placeholder="Full Name *" name="c_name">
                            </div>
                            <div class="form-group">
                                <div class="control-label required">Father's Name</div>
                                <input type="name" class="form-control" placeholder="Father's Name *" name="f_name">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="control-label required">Date of Birth</div>
                                    <input type="date" class="form-control" placeholder="Full Name *" name="dob">
                                </div>
                                <div class="form-group col-md-6 photo-type">
                                    <div class="control-label required">Upload Date of birth Proof</div>
                                    <input type="file" class="form-control" placeholder="Father's Name *" name="dob_proof">
                                    <!-- <div class="required-text" id="dob">*(file size must be between 150 and 200KB)</div> -->
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="control-label required">Nationality</div>
                                <input type="name" class="form-control" placeholder="Your Nationality *" name="nationality">
                            </div>
                            <div class="form-group">
                                <div class="control-label required">Category</div>
                                <select class="form-select" aria-label="Default select example" name="caste">
                                    <option value="">Select Your Caste</option>
                                    <option value="GENERAL">GENERAL</option>
                                    <option value="SC">SC</option>
                                    <option value="ST">ST</option>
                                    <option value="OBC">OBC</option>
                                  </select>
                            </div>

                            <div class="form-group">
                                <div class="control-label required">Religion</div>
                                <input type="name" class="form-control" placeholder="Your Religion *" name="religion">
                            </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-group ">
                                    <div class="control-label required">Gender </div>
                                    <select class="form-select" aria-label="Default select example" name="gender">
                                        <option value="">Select One</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                              
                             
                              <div class="form-group">
                                <div class="control-label required">Qualification</div>
                                <textarea type="text" class="form-control" placeholder="Your Qualification *" rows="5" name="education"></textarea>
                            </div>
                              <div class="form-group photo-type">
                                <div class="control-label required">Proof of Qualification</div>
                                <input type="file" class="form-control" placeholder="Your Qualification *" name="edu_proof">
                                <!-- <div class="required-text">* file size must be between 150 and 200KB</div> -->
                            </div>
                            <div class="form-group">
                                <div class="control-label required">Full Address</div>
                                <textarea type="address" class="form-control" placeholder="Full Address *" rows="5" name="address"></textarea>
                            </div>
                              <div class="form-group">
                                <div class="control-label required">E-mail</div>
                                <input type="email" class="form-control" placeholder="E-mail address *" name="mail">
                            </div>
                            <div class="form-group">
                                <div class="control-label required">Contact Number</div>
                                <input type="tel" class="form-control" placeholder="Contact Number *" name="contact">
                            </div>
                            <div class="form-group photo-type">
                                <div class="control-label required">Photo Upload</div>
                                <input type="file" class="form-control" placeholder="Photo Upload *" name="photo" accept="image/*" >
                                <!-- <div class="required-text">* max file size 50kb</div> -->
                            </div>
                            <div class="custom-checkbox">
                                <input type="checkbox" class="custom-checkbox-input" value="" name="check">
                                <div class="custom-checkbox-label">I hereby declare that all the above statements are true and correct the best of my knowledge and belief. I shall obey all the rules and regulations of the organization.</div>
                            </div>

                            <button  class="btn-action">Submit</button>

                            </div>

                            
                           
                        </div>
                      
                       
                     
                        
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</section>







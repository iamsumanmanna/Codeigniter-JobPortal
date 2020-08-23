<?php include_once('header.php'); ?>
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="slider_text">
                            <h5 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s" >4536+ Jobs listed</h5>
                            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">Find your Dream Job</h3>
                            <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">We provide online instant cash loans with quick approval that suit your term length</p>
                                   
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    
    <!-- catagory_area -->
    <div class="catagory_area">
        <div class="container">
            <div class="row cat_search">
                <div class="col-lg-3 col-md-4">
                    <div class="single_input">
                        <input type="text" name="kw" placeholder="Search keyword">
                    </div>
                </div>
                 <div class="col-lg-3 col-md-4">
                    <div class="single_input">
                        <select class="wide" name="location" onchange="this.form.submit()">
                            <option data-display="Location">Location</option>
                            <option value="dhaka">Dhaka</option>
                            <option value="rajshahi">Rajshahi</option>
                            <option value="khulna4">Khulna</option>
                            <option value="haldia">Haldia</option>
                          </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="single_input">
                        <select class="wide"  name="category" onchange="this.form.submit()">
                            <option data-display="Category">Category</option>
                            <option value="marketing">Marketing</option>
                            <option value="software and Web">Software and Web</option>
                            <option value="teaching and Education">Teaching and Education</option>
                            <option value="administration">Administration</option>
                            <option value="web Devlopment">Web Devlopment</option>
                          </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="job_btn">
                        <a href="<?php echo site_url('Browse_job');?>" class="boxed-btn3">Find Job</a> 
                    </div>
                </div>
           
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="popular_search d-flex align-items-center">
                        <span>Popular Search:</span>
                        <ul>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Software and Web</a></li>
                            <li><a href="#">Teaching and Education</a></li>
                            <li><a href="#">Administration</a></li>
                            <li><a href="#">Web Devlopment</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <!--/ catagory_area -->

    <!-- popular_catagory_area_start  -->
    <div class="popular_catagory_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title mb-40">
                        <h3 class="text-center">Popolar Categories</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach($catlist->result() as $row) :?>

                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory">
                        <a href="#"><h4 class="" style="height: 50px;"><?php echo $row->category;?></h4></a>
                        <p> <span><?php echo $row->total;?></span> Available position</p>
                    </div>
                </div>
                <?php   endforeach ; ?>
                

    <!-- job_listing_area_start  -->

    
    <div class="job_listing_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section_title">
                        <h3>Job Listing</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="brouse_job text-right">
                        <a href="#" class="boxed-btn4">Browse More Job</a>
                    </div>
                </div>
            </div>
            <div class="job_lists">
                <div class="row">
                    <?php foreach($joblist->result() as $row) :?>
                    <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="<?php echo base_url();?>img/svg_icon/1.svg" alt="">
                                </div>
                                <div class="jobs_conetent">
                                    <a href="job_details.html"><h4><?php echo $row->post;?></h4></a>
                                    <div class="links_locat d-flex align-items-center">
                                        <div class="location">
                                            <p> <i class="fa fa-map-marker"></i><?php echo $row->company_addr;?></p>
                                        </div>
                                        <div class="location">
                                            <p> <i class="fa fa-clock-o"></i><?php echo $row->type;?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="jobs_right">
                                <div class="apply_now">
                                    <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>
                                    <a href="<?php echo site_url('Apply_job/index');?>" class="boxed-btn3">Apply Now</a>
                                </div>
                                <div class="date">
                                    <p>Date line:<?php echo date('F j,Y',strtotime( $row->deadline));?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                     <?php   endforeach ; ?>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- job_listing_area_end  -->

    <!-- featured_candidates_area_start  -->
    <div class="featured_candidates_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-40">
                        <h3>Featured Candidates</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="candidate_active owl-carousel">
                        <?php foreach($candlist->result() as $row) :?>
                        <div class="single_candidates text-center">
                            <div class="thumb">
                                <img src="<?php echo base_url();?>img/candiateds/<?php echo $row->id.'.png';?>" alt="">
                            </div>
                            <a href="#"><h4><?php echo $row->name;?></h4></a>
                            <p><?php echo $row->current_post;?></p>
                        </div>
                        <?php   endforeach ; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                    
    <!-- featured_candidates_area_end  -->

    <div class="top_companies_area">
        <div class="container">
            <div class="row align-items-center mb-40">

                <div class="col-lg-6 col-md-6">
                    <div class="section_title">
                        <h3>Top Companies</h3>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="brouse_job text-right">
                        <a href="#" class="boxed-btn4">Browse More Job</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach($top_company->result() as $row) :?>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    
                    <div class="single_company">
                        <div class="thumb">
                            <img src="<?php echo base_url();?>img/svg_icon/5.svg" alt="">
                        </div>
                        <a href="<?php site_url('Job_portal');?>"><h3><?php echo $row->company_name;?></h3></a>
                        <p><span>50</span>Avaliable Post</p> 
                       
                    </div>
                    
                </div>
                 <?php   endforeach ; ?>
            </div>
        </div>
    </div>
 </div>


    <!-- job_searcing_wrap  -->
    <div class="job_searcing_wrap overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1 col-md-6">

                    <div class="searching_text">
                        <h3>Looking for a Job?</h3>
                        <p>We provide online instant cash loans with quick approval </p>
                        <a href="#" class="boxed-btn3">Browse Job</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-6">
                    <div class="searching_text">
                        <h3>Looking for a Expert?</h3>
                        <p>We provide online instant cash loans with quick approval </p>
                        <a href="#" class="boxed-btn3">Post a Job</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="jobSeekersAndCandidatesContainer pb-lg" style="margin-top: 40px;"></div>
    <div class="container p-md text-center">
        <h2 class="h3-marketing sm-center strong blue-500">Access a huge, diverse set of job seekers with every posting.</h2>
        <h3 class="sm-center strong mt-0">Over 60M job seekers on Glassdoor, plus up to 50 job sites
            <sub>1</sub>
        </h3>
        <div class="d-flex justify-content-center">
            <div class="jobSitesImg lazy pb-lg d-none d-sm-block lazy-loaded">
                 <img src="<?php echo base_url();?>img/jobSites.jpg" alt="" >
            </div>
        </div>
    </div>
    

               
    
    
    
        
                        
    <!-- /testimonial_area  -->
<?php include_once('footer.php'); ?>
   
</body>

</html>
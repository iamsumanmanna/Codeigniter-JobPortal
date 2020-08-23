
<?php  include_once('header.php'); ?>

<!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Candidate List</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- featured_candidates_area_start  -->
    <div class="featured_candidates_area candidate_page_padding">
        <div class="container">
            <div class="row">
                <?php foreach($candlist->result() as $row) :?>
                <div class="col-md-6 col-lg-3">
                    
                    <div class="single_candidates text-center">
                        <div class="thumb">
                            <img src="<?php echo base_url();?>img/candiateds/<?php echo $row->id.'.png';?>" alt="">
                        </div>
                        <a href="#"><h4><?php echo $row->name;?></h4></a>
                        <p><?php echo $row->current_post;?></p>
                    </div>
                </div>
                <?php   endforeach ; ?>
                
                </div>
            </div>
        </div>
    </div>
    <!-- featured_candidates_area_end  -->
    <?php include_once('footer.php'); ?>
  </body>

</html>
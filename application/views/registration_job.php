<?php include('header.php');?>
 <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Apply for job</h2>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" action="<?php echo site_url().'Apply_job/apply';?>">
                        <div class="form-row">
                            <div class="name">Full name</div>
                            <div class="value">
                                <input class="form-control" type="text" name="fullName" value="<?php echo set_value('fullName');?>">
                                <?php echo form_error('fullName');?>
                            </div>
                             
                        </div>
                        <div class="form-row">
                            <div class="name">Email address</div>
                            <div class="value">
                                    <input class="form-control" type="email" name="email" value="<?php echo set_value('email');?>">
                                     <?php echo form_error('email');?>
                               
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Phone Number</div>
                            <div class="value">
                                
                                    <input class="form-control" type="number" name="phonenumber" value="<?php echo set_value('phonenumber');?>">
                                     <?php echo form_error('phonenumber');?>
                                
                            </div>
                        </div>
                        <div class="form-row">
                        	<div class="name">Total Experience</div>
                                <div class="value">                       	
                                	<select class="wide" name="totalExper">
                                	<option value="<?php echo set_value('totalExper');?>">Total Experience</option>
                                    <option value="5year">5year</option>
                                    <option value="4year">4year</option>
                                    <option value="3year">3year</option>
                                    <option value="2year">2year</option>
                                    <option value="1year">1year</option>
                                    <option value="Fresher">Fresher</option>
                                  	</select>
                                     <?php echo form_error('totalExper');?>                        
                                 </div>
                    	    </div> 
                        <div class="form-row">
                            <div class="name">Message</div>
                            <div class="value">
                                
                                    <textarea class="form-control" name="message" placeholder="Message sent to the employer" value="<?php echo set_value('message');?>"></textarea>
                                    <?php echo form_error('message');?>
                                
                            </div>
                        </div>
                        <div class="form-row">
                          <div class="name">Upload CV</div>
                            <div class="value">
                                <div class="">
                                    <input class="form-control" type="file" id="file" name="cv">
                                </div>
                                <div class="label--desc">Upload your CV/Resume or any other relevant file. Max file size 50 MB</div>
                            </div>
                        </div>
                        <div class="card-footer">
                    		<button class="btn btn-danger" type="submit" name="submit">Send Application</button>
               			</div>
                    
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    


<?php include('footer.php');?>
</body>
</html>
<?php
$this->load->view('Admin/admin_header');
?>
<div class="mx-5 mt-5 text-center">
     <p class="bg-info text-white p-3" style="font-family: 'Permanent Marker', cursive;" >List Of Apply Job Request</p>
 </div>
<div class="mx-5 mt-5 text-center">
<table class="table table-striped table-dark">
  <thead>
    <tr class="text-center" style="font-family: 'Permanent Marker', cursive;">
      <th scope="col">Id</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email address</th> 
      <th scope="col">Phone Number</th> 
      <th scope="col">Total Experience</th> 
      <th scope="col">Message</th> 
      <th scope="col">Upload CV</th>      
  </thead>
  <tbody class="text-center" style="font-family: 'Cormorant Upright', serif;">
  	<?php  foreach ($this->Admin_login_model-> apply_job_admin() as $row) : ?>
  	 <tr>
  		<th><?php echo $row->id ;?></th>
  		<th><?php echo $row->fullName;?></th>
  		<th><?php echo $row->email;?></th>
  		<th><?php echo $row->phonenumber;?></th>
  		<th><?php echo $row->totalExper;?></th>
  		<th><?php echo $row->message;?></th>
  		<th><img src="<?php echo $row->cv;?>"></th>
  		
  		
  	</tr>
  <?php endforeach;?>  
  </tbody>
 </table>
</div>


<?php
$this->load->view('Admin/admin_footer');
?>
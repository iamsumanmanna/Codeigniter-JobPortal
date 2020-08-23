<?php
$this->load->view('Admin/admin_header');
?>
<div class="mx-5 mt-5 text-center">
     <p class="bg-info text-white p-3" style="font-family: 'Permanent Marker', cursive;" >List Of Candidate</p>
 </div>
<div class="mx-5 mt-5 text-center">
<table class="table table-striped table-dark">
  <thead>
    <tr class="text-center" style="font-family: 'Permanent Marker', cursive;">
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone No.</th>
      <th scope="col">Current Post</th>
      <th scope="col">Experience</th>
      <th scope="col">Education</th>
    </tr>
  </thead>
  <tbody class="text-center" style="font-family: 'Cormorant Upright', serif;">
  	<?php  foreach ($this->Admin_login_model->admin_candidate() as $row) : ?>
  	 <tr>
  		<th><?php echo $row->id ;?></th>
  		<th><?php echo $row->name;?></th>
  		<th><?php echo $row->email;?></th>
  		<th><?php echo $row->phone;?></th>
  		<th><?php echo $row->current_post;?></th>
  		<th><?php echo $row->experience;?></th>
  		<th><?php echo $row->education;?></th>
  	</tr>
  <?php endforeach;?>  
  </tbody>
</table>
</div>


<?php
$this->load->view('Admin/admin_footer');
?>
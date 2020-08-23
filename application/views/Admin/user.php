<?php
$this->load->view('Admin/admin_header');
?>
<div class="mx-5 mt-5 text-center">
     <p class="bg-info text-white p-3" >List Of User</p>
 </div>
<div class="mx-5 mt-5 text-center">
<table class="table table-striped table-dark">
  <thead>
    <tr class="text-center">
      <th scope="col">Id</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
    </tr>
  </thead>
  <tbody class="text-center">
  	<?php  foreach ($this->Admin_login_model->admin_user() as $row) : ?>
  	 <tr>
  		<th><?php echo $row->id ;?></th>
  		<th><?php echo $row->email;?></th>
  		<th><?php echo $row->password;?></th>
  		<th><?php echo $row->firstname;?></th>
  		<th><?php echo $row->lastname;?></th>
  	</tr>
  <?php endforeach;?>
  
    
  </tbody>
</table>
</div>



<?php
$this->load->view('Admin/admin_footer');
?>
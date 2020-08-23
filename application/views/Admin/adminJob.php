<?php
$this->load->view('Admin/admin_header');
?>
<div class="mx-5 mt-5 text-center">
     <p class="bg-info text-white p-3" style="font-family: 'Permanent Marker', cursive;" >List Of Job Details</p>
 </div>
<div class="mx-5 mt-5 text-center">
<table class="table table-striped table-dark">
  <thead>
    <tr class="text-center" style="font-family: 'Permanent Marker', cursive;">
      <th scope="col">Id</th>
      <th scope="col">Category</th>
      <th scope="col">Post</th>
      <th scope="col">Type</th>
      <th scope="col">Total Post</th>
      <th scope="col">Job Details</th>
      <th scope="col">Salary</th>
      <th scope="col">Date-Time</th>
      <th scope="col">Company Name</th>
      <th scope="col">Company Addr</th>
    </tr>
    <tbody class="text-center" style="font-family: 'Cormorant Upright', serif;">
  	<?php  foreach ($this->Admin_login_model->admin_job() as $row) : ?>
  	 <tr>
  		<th><?php echo $row->id ;?></th>
  		<th><?php echo $row->category;?></th>
  		<th><?php echo $row->post;?></th>
  		<th><?php echo $row->type;?></th>
  		<th><?php echo $row->total_post;?></th>
  		<th><?php echo $row->job_detail;?></th>
  		<th><?php echo $row->salary;?></th>
  		<th><?php echo $row->deadline;?></th>
  		<th><?php echo $row->company_name;?></th>
  		<th><?php echo $row->company_addr;?></th>

  	</tr>
  <?php endforeach;?>  
  </tbody>
  </thead>
 </table>
</div>


<?php
$this->load->view('Admin/admin_footer');
?>
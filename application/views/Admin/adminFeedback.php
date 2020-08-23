<?php
$this->load->view('Admin/admin_header');
?>
<div class="mx-5 mt-5 text-center">
     <p class="bg-info text-white p-3" style="font-family: 'Permanent Marker', cursive;" >List Of Feedback</p>
 </div>
<div class="mx-5 mt-5 text-center">
<table class="table table-striped table-dark">
  <thead>
    <tr class="text-center" style="font-family: 'Permanent Marker', cursive;">
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Massage</th>      
  </thead>
  <tbody class="text-center" style="font-family: 'Cormorant Upright', serif;">
  	<?php  foreach ($this->Admin_login_model->admin_feedback() as $row) : ?>
  	 <tr>
  		<th><?php echo $row->id ;?></th>
  		<th><?php echo $row->name;?></th>
  		<th><?php echo $row->message;?></th>
  		
  	</tr>
  <?php endforeach;?>  
  </tbody>
 </table>
</div>

<?php
$this->load->view('Admin/admin_footer');
?>
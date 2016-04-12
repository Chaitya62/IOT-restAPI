<?php $this->load->view('layouts/header'); ?>
<!-- <h3 style = "color:red;"> <?php echo $this->session->userdata('id'); ?></h3> -->

<div class="row">
	<div class="col-md-2"><a href="add_device">+add Device</a></div>
	<div class="col-md-8">
		<div class="bs-component">
          <table class="table ">
            <thead>
            <tr>
              <!-- <th>id</th> -->
              <th>Device Name</th>
              <th>Device ID</th>
              <th>About Device</th>
               <th>Parameters</th>
              <th>Edit</th>
              <th>Delete</th>
             
            </tr>
            </thead>
            <tbody>
            <?php foreach ($result as $row) {
							echo "<tr>";
							// echo "<td>".$row->id."</td>";
							echo "<td>".$row->device_name."</td>";
							echo "<td>".$row->device_id."</td>";
							echo "<td>".$row->about_device."</td>";
							$id = $row->id;
							// $hobbies = $row->hobbies;
							// echo "<td>".$hobbies."</td>";
							$base_url = base_url().'index.php';
							$edit_url = $base_url . "/home/edit_device/{$id}";
							$delete_url = $base_url."/device/delete_device/{$id}";
							$parameters_url = $base_url."/home/add_parameters/{$id}";
							echo "<td><a href=\"{$parameters_url}\">+Add parameters</a>";
							echo "<a href=\"#\"><span class=\"caret\"></span></a></td>";
							echo "<td><a href=\"{$edit_url}\">Edit</a> </td>";

							echo "<td><a href=\"{$delete_url}\" onclick =\"return confirm('Are you sure?');\">Delete</a> </td>";
							
							echo "</tr>";	
				} ?>
            
            </tbody>
          </table>
        <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div>
	</div>
	<div class="col-md-2">
		

	<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


	</div>
</div>



<?php $this->load->view('layouts/footer'); ?>
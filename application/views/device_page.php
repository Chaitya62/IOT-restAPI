<?php $this->load->view('layouts/header'); ?>
<!-- <h3 style = "color:red;"> <?php echo $this->session->userdata('id'); ?></h3> -->
<style>
  .in{
    display: none;
  }
</style>



 ?>
   <span>
      <?php// print_r($parameters); ?>
   </span> 
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
              // foreach ($parameters[$id] as $parameter){
              // print_r($parameter);
              // echo "Darsh ";
              //                     }
              
							// $hobbies = $row->hobbies;
							// echo "<td>".$hobbies."</td>";
							$base_url = base_url().'index.php';
							$edit_url = $base_url . "/home/edit_device/{$id}";
							$delete_url = $base_url."/device/delete_device/{$id}";
							$parameters_url = $base_url."/home/add_parameters/{$id}";
							echo "<td> <a href=\"{$parameters_url}\">+Add parameters</a>
                    <button type=\"button\" class=\"btn btn-info btn-sm\" data-toggle=\"modal\" data-target=\"#myModal".$id."\">View</button>
                    </td>";

              // print_r($parameters);  
                   ?>
          


            <?php 
              
							echo "<td><a href=\"{$edit_url}\">Edit</a> </td>";
							echo "<td><a href=\"{$delete_url}\" onclick =\"return confirm('Are you sure?');\">Delete</a> </td>";
							echo "</tr>";	
				} ?>
            </tbody>
          </table>
        <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div>
	</div>
	<div class="col-md-2"></div>
</div>

 <?php foreach ($result as $row) { 
  $id = $row->id;

  ?>
  <div id="myModal<?php echo $id; ?>" class="modal fade"  role="dialog" style="display:none;  ">
  <div class="modal-dialog modal-lg" style="background-color: #003333; width: 450px;">
    <!-- Modal content-->
    <div class="modal-content">
          <a class="close" data-dismiss="modal" aria-hidden="true">×</a>
      <div class="modal-body">
        <form action="<?php echo base_url(); ?>index.php/device/update_parameter" method="post" class="form-horizontal">
        <?php 
        echo "<h4>The parameters are:-</h4>";?>

        <?php  foreach ($parameters[$id] as $parameter) { ?>
            <div class="row">
          <div class="form-group is-empty">
            
                                    
                  
                <label for="inputName" class="col-md-4 control-label">Parameter Name </label>
                
                 
                <div class="col-md-4">
                  <input type="name" class="form-control" name="parameter_name[]" id="inputName" placeholder="parameter name" value = "<?php echo $parameter->parameter_name;?>" >
                </div>
                 <div class="">
                  <input type="name" name="parameter_id[]" id="" placeholder="" value =<?php echo "$parameter->parameter_id";  ?> style="display:none;">
               
                </div> 


              <span class="material-input"></span>
            </div>

            </div>
           <?php } ?> 


            

          
          <div class="row">
          <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                  <button style="float:right;" type="submit" class="btn btn-default" >Save Changes</button>
                </div>
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
  <?php } ?>


<?php $this->load->view('layouts/footer'); ?>
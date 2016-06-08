<?php $this->load->view("layouts/header"); ?>
<?php echo "<h1>".$device_id."</h1>" ?>
<div class="container-fluid" style="padding:60px;"> <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4"><div class="well bs-component">
          <form class="form-horizontal" method="post" action = "<?php echo base_url()."index.php/device/add_parameters/{$device_id}";?>">
            <fieldset>
              <legend style="color:#00ffff">Add Parameters</legend>
              <div class="form-group is-empty">
                <label for="inputName" class="col-md-4 control-label">Parameter name</label>

                <div class="col-md-8" id = "here">
                  <input type="name" class="form-control" name="parameter_name[]" id="inputName " placeholder="Parameter Name" value ="">
                </div></div>

              
              <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                	<button type="button" id="add" style="float:right;" class="btn btn-fab btn-fab-mini">+</button>
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                  <button style="float:right;" type="submit" class="btn btn-default" >Add Parameters</button>
                </div>
              </div>
              </fieldset>
          </form>
      </div>
    </div>
    


<script>
	
	  var input1 = " <div class=\"form-group is-empty\">";
          input1 +="<label for=\"inputName\" class=\"col-md-4 control-label\">Parameter name</label>";
          input1 +="<div class=\"col-md-8\">";
         input1 +="<input type=\"name\" class=\"form-control\" name=\"parameter_name[]\" id=\"inputName\"";input1 += "placeholder=\"Parameter Name\" value =\"\">";
              input1 +=  "</div></div> ";
$(document).ready(function(){
  var form =  $('legend');
  $('#add').click(function(){
    form.append(input1);
  });
});
</script>

<?php $this->load->view("layouts/footer"); ?>
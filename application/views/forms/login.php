<?php $this->load->view('layouts/header'); ?>
<?php $this->load->view('layouts/navbar') ?>
<?php 
  $base_url = base_url().'index.php';
 ?>
<div class="container-fluid" style="padding:65px;"> <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4"><div class="well bs-component">
          <form class="form-horizontal" method="post"  action = "<?php echo $base_url; ?>/user/Login_request">
            <fieldset>
              <legend style="color:#00ffff">Log in</legend>
  

              <div class="form-group ">
                <label for="inputEmail" class="col-md-2 control-label">Email</label>

                <div class="col-md-10">
                  <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
                </div>
                 <span class="material-input"></span></div>

              <div class="form-group">
                <label for="inputPassword"  class="col-md-2 control-label">Password</label>

                <div class="col-md-10">
                  <input type="password"  name="password" class="form-control" id="inputPassword" placeholder="Password">
                    <a href="#" style="color:#00ffff; float:right;">forgot password?</a>
         <!--
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Checkbox
                    </label>
                    <label>
                      <input type="checkbox" disabled> Disabled Checkbox
                    </label>
                  </div>
                  <br>

                  <div class="togglebutton">
                    <label>
                      <input type="checkbox" checked> Toggle button
                    </label>
                  </div>
                  -->
                </div>
              <span class="material-input"></span></div>
              <div class="form-group" style="margin-top: 0;"> <!-- inline style is just to demo custom css to put checkbox below input above -->
                <!-- <div class="col-md-offset-2 col-md-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"><span class="checkbox-material"><span class="check"></span></span> Checkbox
                    </label>
                    <label>
                      <input type="checkbox" disabled=""><span class="checkbox-material"><span class="check"></span></span> Disabled Checkbox
                    </label>
                  </div>
                </div>
              </div> -->
              <!-- <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                  <div class="togglebutton">
                    <label>
                      <input type="checkbox" checked=""><span class="toggle"></span> Toggle button
                    </label>
                  </div>
                </div>
              </div> -->
              <!-- <div class="form-group is-empty is-fileinput">
                <label for="inputFile" class="col-md-2 control-label">File</label>

                <div class="col-md-10">
                  <input type="text" readonly="" class="form-control" placeholder="Browse...">
                  <input type="file" id="inputFile" multiple="">
                </div> -->
              <!-- <span class="material-input"></span></div>
              <div class="form-group is-empty">
                <label for="textArea" class="col-md-2 control-label">Textarea</label>

                <div class="col-md-10">
                  <textarea class="form-control" rows="3" id="textArea"></textarea>
                  <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                </div>
              <span class="material-input"></span></div>
              <div class="form-group">
                <label class="col-md-2 control-label">Radios</label>

                <div class="col-md-10">
                  <div class="radio radio-primary">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked=""><span class="circle"></span><span class="check"></span>
                      Option one is this
                    </label>
                  </div>
                  <div class="radio radio-primary">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"><span class="circle"></span><span class="check"></span>
                      Option two can be something else
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="select111" class="col-md-2 control-label">Select</label>

                <div class="col-md-10">
                  <select id="select111" class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              <span class="material-input"></span></div>
              <div class="form-group is-empty">
                <label for="select222" class="col-md-2 control-label">Select Multiple</label>

                <div class="col-md-10">
                  <select id="select222" multiple="" class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              <span class="material-input"></span></div>
              <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                  <button type="button" class="btn btn-default">Cancel</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </fieldset>
          </form>
        <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div> -->
       <span class="material-input"></span></div>
              <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                  <button style="float:right;" type="submit" class="btn btn-default">Login</button>
                </div>
              </div>
              </fieldset>
          </form>
      </div>
    </div>

    <div class="col-md-4"></div>
  </div>
  </div>
   <script>
  $(function () {
    $.material.init();
    $(".shor").noUiSlider({
      start: 40,
      connect: "lower",
      range: {
        min: 0,
        max: 100
      }
    });

    $(".svert").noUiSlider({
      orientation: "vertical",
      start: 40,
      connect: "lower",
      range: {
        min: 0,
        max: 100
      }
    });
  });
</script>
<?php $this->load->view('layouts/footer2'); ?>


              <!-- <div class="form-group" style="margin-top: 0;"> -->
<?php $this->load->view('layouts/footer'); ?>
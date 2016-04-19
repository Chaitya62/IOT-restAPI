<?php $this->load->view("layouts/header"); ?>
  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#source-modal" style="cursor:pointer;">View</button>
<div id="source-modal" class="modal fade " style="display: block;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Source Code</h4>
        </div>
        <div class="modal-body">
          <pre>&lt;div class="modal"&gt;
  &lt;div class="modal-dialog"&gt;
    &lt;div class="modal-content"&gt;
      &lt;div class="modal-header"&gt;
        &lt;button type="button" class="close" data-dismiss="modal" aria-hidden="true"&gt;×&lt;/button&gt;
        &lt;h4 class="modal-title"&gt;Modal title&lt;/h4&gt;
      &lt;/div&gt;
      &lt;div class="modal-body"&gt;
        &lt;p&gt;One fine body…&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class="modal-footer"&gt;
        &lt;button type="button" class="btn btn-default" data-dismiss="modal"&gt;Close&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>
        </div>
      </div>
    </div>
  </div>

  <?php $this->load->view("layouts/footer"); ?>

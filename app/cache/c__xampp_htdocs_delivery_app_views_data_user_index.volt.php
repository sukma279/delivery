<?php echo $this->tag->tagHtml('div', array('class' => 'page-header')); ?>
    <?php echo $this->tag->tagHtml('h1'); ?> Search User<?php echo $this->tag->tagHtmlClose('h1'); ?>
<?php echo $this->tag->tagHtmlClose('div'); ?>



  <div class="form-group col-sm-10">
  <?php echo $this->tag->form(array("data_user/search", "autocomplete" => "off")) ?>
    <label for="username" class="col-sm-2 control-label">Username</label>
    
      <?php echo $this->tag->textField(array("username", "size" => 30)) ?>
    
    
      <?php echo $this->tag->submitButton(array('Search', 'class' => 'btn btn-primary')); ?>
    </div>



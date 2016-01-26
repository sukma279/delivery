<?php echo $this->tag->tagHtml('div', array('class' => 'page-header')); ?>
    <?php echo $this->tag->tagHtml('h1'); ?> Search Kendaraan<?php echo $this->tag->tagHtmlClose('h1'); ?>
<?php echo $this->tag->tagHtmlClose('div'); ?>



  <div class="form-group col-sm-10">
  <?php echo $this->tag->form(array("data_kendaraan/search", "autocomplete" => "off")) ?>
    <label for="plat_nomor" class="col-sm-2 control-label">Nomor Plat</label>
    
      <?php echo $this->tag->textField(array("plat_nomor", "size" => 30)) ?>
    
    
      <?php echo $this->tag->submitButton(array('Search', 'class' => 'btn btn-primary')); ?>
    </div>

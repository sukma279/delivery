<?php echo $this->tag->tagHtml('div', array('class' => 'page-header')); ?>
    <?php echo $this->tag->tagHtml('h1'); ?> Search Ongkir<?php echo $this->tag->tagHtmlClose('h1'); ?>
<?php echo $this->tag->tagHtmlClose('div'); ?>



  <div class="form-group col-sm-10">
  <?php echo $this->tag->form(array("data_ongkir/search", "autocomplete" => "off")) ?>
    <label for="nama_daerah" class="col-sm-2 control-label">Nama Daerah</label>
    
      <?php echo $this->tag->textField(array("nama_daerah", "size" => 30)) ?>
    
    
      <?php echo $this->tag->submitButton(array('Search', 'class' => 'btn btn-primary')); ?>
    </div>

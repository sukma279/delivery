<?php echo $this->tag->tagHtml('div', array('class' => 'page-header')); ?>
    <?php echo $this->tag->tagHtml('h1'); ?> Search Pemesanan<?php echo $this->tag->tagHtmlClose('h1'); ?>
<?php echo $this->tag->tagHtmlClose('div'); ?>



  <div class="form-group col-sm-10">
  <?php echo $this->tag->form(array("data_pemesanan/search", "autocomplete" => "off")) ?>
    <label for="nama_pemesan" class="col-sm-2 control-label">Nama Pemesan</label>
    
      <?php echo $this->tag->textField(array("nama_pemesan", "size" => 30)) ?>
    
    
      <?php echo $this->tag->submitButton(array('Search', 'class' => 'btn btn-primary')); ?>
    </div>
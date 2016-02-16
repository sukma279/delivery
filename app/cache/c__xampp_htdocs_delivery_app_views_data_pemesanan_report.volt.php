<?php echo $this->tag->tagHtml('div', array('class' => 'page-header')); ?>
    <?php echo $this->tag->tagHtml('h1'); ?> Search Laporan<?php echo $this->tag->tagHtmlClose('h1'); ?>
<?php echo $this->tag->tagHtmlClose('div'); ?>



  <div class="form-group col-sm-10">
  <?php echo $this->tag->form(array("data_pemesanan/printreport", "autocomplete" => "off")) ?>
    <label for="tanggal_kirim" class="col-sm-2 control-label">Tanggal Pengiriman</label>
    
      <?php echo $this->tag->textField(array("tanggal_kirim", "size" => 30)) ?>
    
    
      <?php echo $this->tag->submitButton(array('Search', 'class' => 'btn btn-primary')); ?>
    </div>
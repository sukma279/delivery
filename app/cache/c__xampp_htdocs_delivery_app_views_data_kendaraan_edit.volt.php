<?php echo $this->tag->tagHtml('div', array('class' => 'page-header')); ?>
    <?php echo $this->tag->tagHtml('h1'); ?> Edit Ongkir<?php echo $this->tag->tagHtmlClose('h1'); ?>
<?php echo $this->tag->tagHtmlClose('div'); ?>

<?php echo $this->getContent(); ?>

<?php echo $this->tag->form("data_kendaraan/save") ?>
<form class="form-horizontal" role="form" method="post">

  <div class="form-group col-sm-12">
    <label for="plat_nomor" class="col-sm-2 control-label">Nomor Plat</label>
    <fieldset disabled>
    <?php echo $this->tag->textField(array("plat_nomor", "size" => 30)) ?>
</fieldset>
  </div>
  <div class="form-group col-sm-12">
    <label for="jenis_kendaraan" class="col-sm-2 control-label">Jenis Kendaraan</label>
      <?php echo $this->tag->textField(array("jenis_kendaraan", "size" => 30)) ?>
    </div>
  <div class="form-group col-sm-12">
    <label for="nomor_stnk" class="col-sm-2 control-label">Nomor STNK</label>
    <?php echo $this->tag->textField(array("nomor_stnk", "size" => 30)) ?>
  </div>
  <div class="form-group col-sm-12">
    <label for="kapasitas" class="col-sm-2 control-label">Kapasitas</label>
    <?php echo $this->tag->textField(array("kapasitas", "size" => 30)) ?>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo $this->tag->hiddenField("_id") ?>
        <?php echo $this->tag->submitButton(array('Save', 'class' => 'btn btn-primary')); ?>
    </div>
  </div>
</form>
<?php echo $this->tag->tagHtml('div', array('class' => 'page-header')); ?>
    <?php echo $this->tag->tagHtml('h1'); ?> Edit Supir<?php echo $this->tag->tagHtmlClose('h1'); ?>
<?php echo $this->tag->tagHtmlClose('div'); ?>

<?php echo $this->getContent(); ?>

<?php echo $this->tag->form("data_supir/save") ?>
<form class="form-horizontal" role="form" method="post">

<div class="form-group col-sm-12">
    <label for="kode_supir" class="col-sm-2 control-label">Kode Supir</label>
    <fieldset disabled>
    <?php echo $this->tag->textField(array("kode_supir", "size" => 30)) ?>
</fieldset>
  </div>
  <div class="form-group col-sm-12">
    <label for="nama_supir" class="col-sm-2 control-label">Nama Supir</label>
      <?php echo $this->tag->textField(array("nama_supir", "size" => 30)) ?>
    </div>
  <div class="form-group col-sm-12">
    <label for="nomor_sim" class="col-sm-2 control-label">Nomor SIM</label>
      <?php echo $this->tag->textArea(array("nomor_sim", "size" => 30)) ?>
    </div>
  <div class="form-group col-sm-12">
    <label for="alamat" class="col-sm-2 control-label">Alamat</label>
      <?php echo $this->tag->textField(array("alamat", "size" => 30)) ?>
    </div>
  <div class="form-group col-sm-12">
    <label for="nomor_tlp" class="col-sm-2 control-label">Nomor Telepon</label>
      <?php echo $this->tag->textField(array("no_tlp", "size" => 30)) ?>
    </div>
  <div class="form-group col-sm-12">
    <label for="longitude" class="col-sm-2 control-label">Longitude</label>
      <?php echo $this->tag->textField(array("longitude", "size" => 30)) ?>
    </div>
  <div class="form-group col-sm-12">
    <label for="latitude" class="col-sm-2 control-label">Latitude</label>
      <?php echo $this->tag->textField(array("latitude", "size" => 30)) ?>
    </div>
  <div class="form-group col-sm-12">
    <label for="jenis_kendaraan" class="col-sm-2 control-label">Jenis_Kendaraan</label>
      <?php echo $this->tag->textField(array("jenis_kendaraan", "size" => 30)) ?>
    </div>
  <div class="form-group col-sm-12">
    <label for="name" class="col-sm-2 control-label">Username</label>
    <?php echo $this->tag->textField(array("name", "size" => 30)) ?>
  </div>
  <div class="form-group col-sm-12">
    <label for="password" class="col-sm-2 control-label">Password</label>
      <?php echo $this->tag->textField(array("password", "size" => 30)) ?>
    </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo $this->tag->hiddenField("_id") ?>
        <?php echo $this->tag->submitButton(array('Save', 'class' => 'btn btn-primary')); ?>
    </div>
  </div>
</form>




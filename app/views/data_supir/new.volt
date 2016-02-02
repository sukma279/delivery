{{ tag_html("div",["class": "page-header"])}}
    {{ tag_html('h1')}} New Supir{{ tag_html_close('h1')}}
{{tag_html_close("div")}}

<?php echo $this->tag->form("data_supir/create") ?>

<?php echo $this->getContent(); ?>

<form class="form-horizontal" role="form" method="post">

<div class="form-group col-sm-12">
    <label for="kode_supir" class="col-sm-2 control-label">Kode Supir</label>
    <?php echo $this->tag->textField(array("kode_supir", "size" => 30, "value" => S)) ?>
  </div>
  <div class="form-group col-sm-12">
    <label for="nama_supir" class="col-sm-2 control-label">Nama Supir</label>
      <?php echo $this->tag->textField(array("nama_supir", "size" => 30)) ?>
    </div>
  <div class="form-group col-sm-12">
    <label for="nomor_sim" class="col-sm-2 control-label">Nomor SIM</label>
      <?php echo $this->tag->textField(array("nomor_sim", "size" => 30)) ?>
    </div>
  <div class="form-group col-sm-12">
    <label for="alamat" class="col-sm-2 control-label">Alamat</label>
      <?php echo $this->tag->textArea(array("alamat", "size" => 30)) ?>
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
    <div class="col-sm-8"><select name="jenis_kendaraan" id="kendaraan" class="form-control1">
                    <option value="@">Please, choose one..</option>
                <?php foreach ($item as $data) { ?>
                <option value="<?php echo $data->jenis_kendaraan ?>"><?php echo $data->jenis_kendaraan ?>-<?php echo $data->kapasitas ?></option>
                <?php } ?>
                  </select></div>
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
        {{ submit_button('Save','class':'btn btn-primary') }}
    </div>
  </div>
</form>

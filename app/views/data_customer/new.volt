{{ tag_html("div",["class": "page-header"])}}
    {{ tag_html('h1')}} New Customer{{ tag_html_close('h1')}}
{{tag_html_close("div")}}

<?php echo $this->tag->form("data_customer/create") ?>

<?php echo $this->getContent(); ?>

<form class="form-horizontal" role="form" method="post">

<div class="form-group col-sm-12">
    <label for="kode_pemesan" class="col-sm-2 control-label">Kode Pemesan</label>
    <?php echo $this->tag->textField(array("kode_pemesan", "size" => 30)) ?>
  </div>
  <div class="form-group col-sm-12">
    <label for="nama_pemesan" class="col-sm-2 control-label">Nama Pemesan</label>
      <?php echo $this->tag->textField(array("nama_pemesan", "size" => 30)) ?>
    </div>
  <div class="form-group col-sm-12">
    <label for="alamat" class="col-sm-2 control-label">Alamat</label>
    <?php echo $this->tag->textField(array("alamat", "size" => 30)) ?>
  </div>
  <div class="form-group col-sm-12">
    <label for="kabupaten" class="col-sm-2 control-label">Kabupaten</label>
      <?php echo $this->tag->textField(array("kabupaten", "size" => 30)) ?>
    </div>
  <div class="form-group col-sm-12">
    <label for="no_tlp" class="col-sm-2 control-label">Nomor Telepon</label>
      <?php echo $this->tag->textField(array("no_tlp", "size" => 30)) ?>
    </div>

  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo $this->tag->submitButton("Save") ?>
    </div>
  </div>
</form>
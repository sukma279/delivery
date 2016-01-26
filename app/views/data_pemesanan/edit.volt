{{ tag_html("div",["class": "page-header"])}}
    {{ tag_html('h1')}} Edit Pemesanan{{ tag_html_close('h1')}}
{{tag_html_close("div")}}

<?php echo $this->getContent(); ?>

<?php echo $this->tag->form("data_pemesanan/print") ?>
<form class="form-horizontal" role="form" method="post">

  <div class="form-group col-sm-12">
    <label for="kode_pemesanan" class="col-sm-2 control-label">Kode Pemesanan</label>
    <fieldset disabled>
    <?php echo $this->tag->textField(array("kode_pemesanan", "size" => 30)) ?>
    </fieldset>
  </div>
  <div class="form-group col-sm-12">
    <label for="nama_pemesan" class="col-sm-2 control-label">Nama Pemesan</label>
    <fieldset disabled>
      <?php echo $this->tag->textField(array("nama_pemesan", "size" => 30)) ?>
      </fieldset>
    </div>
  <div class="form-group col-sm-12">
    <label for="alamat" class="col-sm-2 control-label">Alamat</label>
    <fieldset disabled>
      <?php echo $this->tag->textField(array("alamat", "size" => 30)) ?>
      </fieldset>
    </div>
  <div class="form-group col-sm-12">
    <label for="nama_daerah" class="col-sm-2 control-label">Kabupaten</label>
    <fieldset disabled>
    <?php echo $this->tag->textField(array("nama_daerah", "size" => 30)) ?>
    </fieldset>
  </div>
  <div class="form-group col-sm-12">
    <label for="tanggal_kirim" class="col-sm-2 control-label">Tanggal Kirim</label>
    <fieldset disabled>
      <?php echo $this->tag->textField(array("tanggal_kirim", "size" => 30)) ?>
      </fieldset>
    </div>
  <div class="form-group col-sm-12">
    <label for="tanggal_terima" class="col-sm-2 control-label">Tanggal Terima</label>
    <fieldset disabled>
      <?php echo $this->tag->textField(array("tanggal_terima", "size" => 30)) ?>
      </fieldset>
    </div>
  <div class="form-group col-sm-12">
    <label for="berat_barang" class="col-sm-2 control-label">Berat Barang</label>
    <fieldset disabled>
      <?php echo $this->tag->textField(array("berat_barang", "size" => 30)) ?>
      </fieldset>
    </div>
  <div class="form-group col-sm-12">
    <label for="total_ongkir" class="col-sm-2 control-label">Total Ongkir</label>
    <fieldset disabled>
      <?php echo $this->tag->textField(array("total_ongkir", "size" => 30)) ?>
      </fieldset>
    </div>

  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo $this->tag->hiddenField("_id") ?>
        <td><?php echo $this->tag->linkTo(array("data_kendaraan/createpdf/" . $data->plat_nomor, "Print Laporan")); ?>
    </div>
  </div>
</form>
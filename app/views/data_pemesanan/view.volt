<html>
<head>
<script>
function printPage(id)
{
   var html="<html>";
   html+= document.getElementById(id).innerHTML;

   html+="</html>";

   var printWin = window.open('','','left=0,top=0,width=1,height=1,toolbar=0,scrollbars=0,status  =0');
   printWin.document.write(html);
   printWin.document.close();
   printWin.focus();
   printWin.print();
   printWin.close();
}
</script>
</head>
<body>
<div id="printableArea">
{{ tag_html("div",["class": "page-header"])}}
    {{ tag_html('h1')}} Pengiriman Barang{{ tag_html_close('h1')}}
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
      <?php echo $this->tag->textArea(array("alamat", "size" => 30)) ?>
      </fieldset>
    </div>
  <div class="form-group col-sm-12">
    <label for="no_telp" class="col-sm-2 control-label">Nomor Telepon</label>
    <fieldset disabled>
      <?php echo $this->tag->textField(array("no_telp", "size" => 30)) ?>
      </fieldset>
    </div>
  <div class="form-group col-sm-12">
    <label for="nama_penerima" class="col-sm-2 control-label">Nama Penerima</label>
    <fieldset disabled>
      <?php echo $this->tag->textField(array("nama_penerima", "size" => 30)) ?>
      </fieldset>
    </div>
  <div class="form-group col-sm-12">
    <label for="alamat_penerima" class="col-sm-2 control-label">Alamat Penerima</label>
    <fieldset disabled>
      <?php echo $this->tag->textArea(array("alamat_penerima", "size" => 30)) ?>
      </fieldset>
    </div>
  <div class="form-group col-sm-12">
    <label for="no_telppenerima" class="col-sm-2 control-label">Nomor Telepon Penerima</label>
    <fieldset disabled>
      <?php echo $this->tag->textField(array("no_telppenerima", "size" => 30)) ?>
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
    <label for="berat_barang" class="col-sm-2 control-label">Berat Barang(kg)</label>
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
  <div class="form-group col-sm-12">
    <label for="nama_supir" class="col-sm-2 control-label">Nama Supir</label>
    <fieldset disabled>
      <?php echo $this->tag->textField(array("nama_supir", "size" => 30)) ?>
      </fieldset>
    </div>
    </div>

  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo $this->tag->hiddenField("_id") ?>
        <input type="button" value="Cetak" onclick="printPage('printableArea');"></input>
    </div>
  </div>
</form>


</body>
</html>
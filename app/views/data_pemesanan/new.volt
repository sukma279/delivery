{{ tag_html("div",["class": "page-header"])}}
    {{ tag_html('h1')}} New Pemesanan{{ tag_html_close('h1')}}
{{tag_html_close("div")}}

<?php echo $this->tag->form("data_pemesanan/create") ?>

<?php echo $this->getContent(); ?>

<script>
function myFunction(e)
{
     if (e.keyCode == 13) {
        var t = document.getElementById("daerah");
var selectedText = t.options[t.selectedIndex].text;
var td = document.getElementById("berat");
var berat = td.value;

var yourString = selectedText.replace ( /[^\d.]/g, '' );
var total = berat * yourString;
document.getElementById("total").value=total;

return false;
}


}
</script>

<form class="form-horizontal" role="form" method="post">

<div class="form-group col-sm-12">
    <label for="kode_pemesanan" class="col-sm-2 control-label">Kode Pemesanan</label>
    <?php echo $this->tag->textField(array("kode_pemesanan", "size" => 30)) ?>
  </div>
  <div class="form-group col-sm-12">
    <label for="nama_pemesan" class="col-sm-2 control-label">Nama Pemesan</label>
      <?php echo $this->tag->textField(array("nama_pemesan", "size" => 30)) ?>
    </div>
  <div class="form-group col-sm-12">
    <label for="alamat" class="col-sm-2 control-label">Alamat</label>
      <?php echo $this->tag->textArea(array("alamat", "size" => 30)) ?>
    </div>
  <div class="form-group col-sm-12">
    <label for="no_telp" class="col-sm-2 control-label">Nomor Telepon</label>
      <?php echo $this->tag->textField(array("no_telp", "size" => 30)) ?>
    </div>
  <div class="form-group col-sm-12">
    <label for="nama_penerima" class="col-sm-2 control-label">Nama Penerima</label>
      <?php echo $this->tag->textField(array("nama_penerima", "size" => 30)) ?>
    </div>
  <div class="form-group col-sm-12">
    <label for="alamat_penerima" class="col-sm-2 control-label">Alamat Penerima</label>
      <?php echo $this->tag->textArea(array("alamat_penerima", "size" => 30)) ?>
    </div>
  <div class="form-group col-sm-12">
    <label for="no_telppenerima" class="col-sm-2 control-label">Nomor Telepon Penerima</label>
      <?php echo $this->tag->textField(array("no_telppenerima", "size" => 30)) ?>
    </div>
  <div class="form-group col-sm-12">
    <label for="nama_daerah" class="col-sm-2 control-label">Kabupaten</label>
      <div class="col-sm-8"><select name="nama_daerah" id="daerah" class="form-control1">
                    <option value="@">Please, choose one..</option>
                <?php foreach ($item as $data) { ?>
                <option value="<?php echo $data->nama_daerah ?>"><?php echo $data->nama_daerah ?>-<?php echo $data->ongkir ?></option>
                <?php } ?>
                  </select></div>
  </div>
  <div class="form-group col-sm-12">
    <label for="tanggal_kirim" class="col-sm-2 control-label">Tanggal Kirim</label>
      <?php echo $this->tag->textField(array("tanggal_kirim", "size" => 30)) ?>
    </div>
  <div class="form-group col-sm-12">
    <label for="tanggal_terima" class="col-sm-2 control-label">Tanggal Terima</label>
      <?php echo $this->tag->textField(array("tanggal_terima", "size" => 30)) ?>
    </div>
  <div class="form-group col-sm-12">
    <label for="berat_barang" class="col-sm-2 control-label">Berat Barang(kg)</label>
      <input type="text" id="berat" name="berat_barang" size="30" onkeypress="return myFunction(event)">
    </div>
  <div class="form-group col-sm-12">
    <label for="total_ongkir" class="col-sm-2 control-label">Total Ongkir</label>
      <input type="text" id="total" name="total_ongkir" size="30">
    </div>
  <div class="form-group col-sm-12">
    <label for="nama_supir" class="col-sm-2 control-label">Nama Supir</label>
      <div class="col-sm-8"><select name="nama_supir" id="supir" class="form-control1">
                    <option value="@">Please, choose one..</option>
                <?php foreach ($items as $datas) { ?>
                <option value="<?php echo $datas->nama_supir ?>"><?php echo $datas->nama_supir ?>-<?php echo $datas->jenis_kendaraan ?></option>
                <?php } ?>
                  </select></div>
    </div>

  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
        {{ submit_button('Save','class':'btn btn-primary') }}
    </div>
  </div>
</form>
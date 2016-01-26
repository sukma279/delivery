{{ tag_html("div",["class": "page-header"])}}
    {{ tag_html('h1')}} Edit Ongkir{{ tag_html_close('h1')}}
{{tag_html_close("div")}}

<?php echo $this->getContent(); ?>

<?php echo $this->tag->form("data_ongkir/save") ?>
<form class="form-horizontal" role="form" method="post">

  <div class="form-group col-sm-12">
    <label for="kode_daerah" class="col-sm-2 control-label">Kode Daerah</label>
    <fieldset disabled>
    <?php echo $this->tag->textField(array("kode_daerah", "size" => 30)) ?>
    </fieldset>
  </div>
  <div class="form-group col-sm-12">
    <label for="nama_daerah" class="col-sm-2 control-label">Nama Daerah</label>
      <?php echo $this->tag->textField(array("nama_daerah", "size" => 30)) ?>
    </div>
  <div class="form-group col-sm-12">
    <label for="ongkir" class="col-sm-2 control-label">Ongkir</label>
    <?php echo $this->tag->textField(array("ongkir", "size" => 30)) ?>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo $this->tag->hiddenField("_id") ?>
        {{ submit_button('Save','class':'btn btn-primary') }}
    </div>
  </div>
</form>
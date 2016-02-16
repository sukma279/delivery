{{ tag_html("div",["class": "page-header"])}}
    {{ tag_html('h1')}} Search Laporan{{ tag_html_close('h1')}}
{{tag_html_close("div")}}



  <div class="form-group col-sm-10">
  <?php echo $this->tag->form(array("data_pemesanan/printreport", "autocomplete" => "off")) ?>
    <label for="tanggal_kirim" class="col-sm-2 control-label">Tanggal Pengiriman</label>
    
      <?php echo $this->tag->textField(array("tanggal_kirim", "size" => 30)) ?>
    
    
      {{ submit_button('Search','class':'btn btn-primary') }}
    </div>
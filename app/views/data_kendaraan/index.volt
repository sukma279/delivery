{{ tag_html("div",["class": "page-header"])}}
    {{ tag_html('h1')}} Search Kendaraan{{ tag_html_close('h1')}}
{{tag_html_close("div")}}



  <div class="form-group col-sm-10">
  <?php echo $this->tag->form(array("data_kendaraan/search", "autocomplete" => "off")) ?>
    <label for="plat_nomor" class="col-sm-2 control-label">Nomor Plat</label>
    
      <?php echo $this->tag->textField(array("plat_nomor", "size" => 30)) ?>
    
    
      {{ submit_button('Search','class':'btn btn-primary') }}
    </div>

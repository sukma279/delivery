{{ tag_html("div",["class": "page-header"])}}
    {{ tag_html('h1')}} Search Supir{{ tag_html_close('h1')}}
{{tag_html_close("div")}}



  <div class="form-group col-sm-10">
  <?php echo $this->tag->form(array("data_supir/search", "autocomplete" => "off")) ?>
    <label for="nama_daerah" class="col-sm-2 control-label">Nama Supir</label>
    
      <?php echo $this->tag->textField(array("nama_supir", "size" => 30)) ?>
    
    
      {{ submit_button('Search','class':'btn btn-primary') }}
    </div>


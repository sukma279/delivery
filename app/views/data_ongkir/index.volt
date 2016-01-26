{{ tag_html("div",["class": "page-header"])}}
    {{ tag_html('h1')}} Search Ongkir{{ tag_html_close('h1')}}
{{tag_html_close("div")}}



  <div class="form-group col-sm-10">
  <?php echo $this->tag->form(array("data_ongkir/search", "autocomplete" => "off")) ?>
    <label for="nama_daerah" class="col-sm-2 control-label">Nama Daerah</label>
    
      <?php echo $this->tag->textField(array("nama_daerah", "size" => 30)) ?>
    
    
      {{ submit_button('Search','class':'btn btn-primary') }}
    </div>

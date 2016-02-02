{{ tag_html("div",["class": "page-header"])}}
    {{ tag_html('h1')}} Search User{{ tag_html_close('h1')}}
{{tag_html_close("div")}}



  <div class="form-group col-sm-10">
  <?php echo $this->tag->form(array("data_user/search", "autocomplete" => "off")) ?>
    <label for="username" class="col-sm-2 control-label">Username</label>
    
      <?php echo $this->tag->textField(array("username", "size" => 30)) ?>
    
    
      {{ submit_button('Search','class':'btn btn-primary') }}
    </div>



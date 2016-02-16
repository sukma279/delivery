{{ tag_html("div",["class": "page-header"])}}
    {{ tag_html('h1')}} Edit User{{ tag_html_close('h1')}}
{{tag_html_close("div")}}

<?php echo $this->getContent(); ?>

<?php echo $this->tag->form("data_suser/save") ?>
<form class="form-horizontal" role="form" method="post">

<div class="form-group col-sm-12">
    <label for="username" class="col-sm-2 control-label">Username</label>
    <?php echo $this->tag->textField(array("username", "size" => 30)) ?>
  </div>
  
  <div class="form-group col-sm-12">
    <label for="password" class="col-sm-2 control-label">Password</label>
    <?php echo $this->tag->textField(array("password", "size" => 30)) ?>
  </div>
  <div class="form-group col-sm-12">
    <label for="level_user" class="col-sm-2 control-label">Level User</label>
    <?php echo $this->tag->textField(array("level_user", "size" => 30)) ?>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo $this->tag->hiddenField("_id") ?>
        {{ submit_button('Save','class':'btn btn-primary') }}
    </div>
  </div>
</form>




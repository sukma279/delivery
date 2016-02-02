<?php echo $this->tag->tagHtml('div', array('class' => 'page-header')); ?>
    <?php echo $this->tag->tagHtml('h1'); ?> New User<?php echo $this->tag->tagHtmlClose('h1'); ?>
<?php echo $this->tag->tagHtmlClose('div'); ?>

<?php echo $this->tag->form("data_user/create") ?>

<?php echo $this->getContent(); ?>

<form class="form-horizontal" role="form" method="post">

<div class="form-group col-sm-12">
    <label for="username" class="col-sm-2 control-label">Username</label>
    <?php echo $this->tag->textField(array("username", "size" => 30)) ?>
  </div>
  <div class="form-group col-sm-12">
    <label for="email" class="col-sm-2 control-label">Email</label>
      <?php echo $this->tag->textField(array("email", "size" => 30, "type"=>"email")) ?>
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
        <?php echo $this->tag->submitButton(array('Save', 'class' => 'btn btn-primary')); ?>
    </div>
  </div>
</form>


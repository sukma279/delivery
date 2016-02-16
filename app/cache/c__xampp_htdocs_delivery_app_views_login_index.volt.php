<?php echo $this->tag->tagHtml('div', array('class' => 'page-header')); ?>
    <?php echo $this->tag->tagHtml('h1'); ?> Login<?php echo $this->tag->tagHtmlClose('h1'); ?>
<?php echo $this->tag->tagHtmlClose('div'); ?>

      <div class="container">
    <div class="row">
        <div class=" col-md-4 login-from">
            
            <?php echo $this->tag->form(array('login/proseslogin', 'role' => 'form')); ?>
            <form action="check-login.php" method="post">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username"/>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" />
                </div>
                <div class="text-right">
                    <button class="btn btn-primary">Login</button>
                </div>
                <div class="text-right">
                    <?php echo $this->getContent(); ?>
                </div>
            </form>
                
        </div>
    </div>
</div> <!-- End container -->
  
 
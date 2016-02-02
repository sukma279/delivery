<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Delivery Management">
	    <meta name="author" content="Sukma Suryaningsih">
	    <link rel="shortcut icon" href="images/favicon(1).ico" type="favicon/ico" />
	<title><?php echo $title; ?> Delivery Management</title>
		<?php echo $this->tag->stylesheetLink('css/bootstrap.min.css'); ?>
		<?php echo $this->tag->stylesheetLink('css/simple-sidebar.css'); ?>
		<?php echo $this->tag->stylesheetLink('font-awesome-4.3.0/css/font-awesome.min.css'); ?>
		<?php echo $this->tag->javascriptInclude('js/jquery-1.11.2.min.js'); ?>
		<?php echo $this->tag->javascriptInclude('js/bootstrap.min.js'); ?>

		<?php echo $this->tag->stylesheetLink('css/bootstrap-multiselect.css'); ?>
		<?php echo $this->tag->javascriptInclude('js/bootstrap-multiselect.js'); ?>
    </head>

    <body>
			<nav class="navbar navbar-default no-margin">
		    <!-- Brand and toggle get grouped for better mobile display -->
		                <div class="navbar-header fixed-brand">
		                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  id="menu-toggle">
		                      <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
		                    </button>
							<?php echo $this->tag->linkTo(array('', '<i class="fa fa-truck fa-4"></i> delivery', 'class' => 'navbar-brand')); ?>

		                </div><!-- navbar-header-->

		                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		                            <ul class="nav navbar-nav">
		                                <li class="active" ><button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"> <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span></button></li>
		                            </ul>
		                </div><!-- bs-example-navbar-collapse-1 -->
		    </nav>
		    <div id="wrapper">
		        <!-- Sidebar -->
		        <div id="sidebar-wrapper">
		            <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
		            	

		               <!-- <li <?php if ($this->session->get('user_name') == 'admin') { ?>
		                 <?php if ($selectmenu == 'data_customer') { ?>class="active"<?php } ?>>
		                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-users fa-stack-1x "></i></span>Customer</a>
		                       <ul class="nav-pills nav-stacked" style="list-style-type:none;">
		                        <li <?php if ($selectmenu == 'index') { ?>class="active"<?php } ?>>
								<?php echo $this->tag->linkTo(array('data_customer/index', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-search fa-stack-1x "></i></span>Search')); ?>
								</li>
								<li <?php if ($selectmenu == 'new') { ?>class="active"<?php } ?>>
								<?php echo $this->tag->linkTo(array('data_customer/new', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-plus fa-stack-1x "></i></span>New')); ?>
								</li>
		                       </ul>
		                </li <?php } ?>> -->
		               
		                <li <?php if ($this->session->get('user_name') == 'admin') { ?> 
		                <?php if ($selectmenu == 'data_ongkir') { ?>class="active"<?php } ?>>
		                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-credit-card fa-stack-1x "></i></span>Ongkir</a>
		                       <ul class="nav-pills nav-stacked" style="list-style-type:none;">
		                        <li <?php if ($selectmenu == 'index') { ?>class="active"<?php } ?>>
								<?php echo $this->tag->linkTo(array('data_ongkir/index', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-search fa-stack-1x "></i></span>Search')); ?>
								</li>
								<li <?php if ($selectmenu == 'new') { ?>class="active"<?php } ?>>
								<?php echo $this->tag->linkTo(array('data_ongkir/new', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-plus fa-stack-1x "></i></span>New')); ?>
								</li>
		                       </ul>
		                </li <?php } ?>>
		                <li <?php if ($this->session->get('user_name') == 'admin') { ?>
		                <?php if ($selectmenu == 'data_kendaraan') { ?>class="active"<?php } ?>>
		                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-motorcycle fa-stack-1x "></i></span>Kendaraan</a>
		                       <ul class="nav-pills nav-stacked" style="list-style-type:none;">
		                        <li <?php if ($selectmenu == 'index') { ?>class="active"<?php } ?>>
								<?php echo $this->tag->linkTo(array('data_kendaraan/index', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-search fa-stack-1x "></i></span>Search')); ?>
								</li>
								<li <?php if ($selectmenu == 'new') { ?>class="active"<?php } ?>>
								<?php echo $this->tag->linkTo(array('data_kendaraan/new', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-plus fa-stack-1x "></i></span>New')); ?>
								</li>
		                       </ul>
		                </li <?php } ?>>
		                <li <?php if ($this->session->get('user_name') == 'admin') { ?>
		                <?php if ($selectmenu == 'data_pemesanan') { ?>class="active"<?php } ?>>
		                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-envelope-o fa-stack-1x "></i></span>Pemesanan</a>
		                       <ul class="nav-pills nav-stacked" style="list-style-type:none;">
		                        <li <?php if ($selectmenu == 'index') { ?>class="active"<?php } ?>>
								<?php echo $this->tag->linkTo(array('data_pemesanan/index', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-search fa-stack-1x "></i></span>Search')); ?>
								</li>
								<li <?php if ($selectmenu == 'new') { ?>class="active"<?php } ?>>
								<?php echo $this->tag->linkTo(array('data_pemesanan/new', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-plus fa-stack-1x "></i></span>New')); ?>
								</li>
		                       </ul>
		                </li <?php } ?>>
		                <li <?php if ($this->session->get('user_name') == 'admin') { ?>
		                <?php if ($selectmenu == 'data_supir') { ?>class="active"<?php } ?>>
		                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-male fa-stack-1x "></i></span>Supir</a>
		                       <ul class="nav-pills nav-stacked" style="list-style-type:none;">
		                        <li <?php if ($selectmenu == 'index') { ?>class="active"<?php } ?>>
								<?php echo $this->tag->linkTo(array('data_supir/index', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-search fa-stack-1x "></i></span>Search')); ?>
								</li>
								<li <?php if ($selectmenu == 'new') { ?>class="active"<?php } ?>>
								<?php echo $this->tag->linkTo(array('data_supir/new', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-plus fa-stack-1x "></i></span>New')); ?>
								</li>
		                       </ul>
		                </li <?php } ?>>
		                <li <?php if ($this->session->get('user_name') == 'admin') { ?>
		                <?php if ($selectmenu == 'data_user') { ?>class="active"<?php } ?>>
		                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-user fa-stack-1x "></i></span>User</a>
		                       <ul class="nav-pills nav-stacked" style="list-style-type:none;">
		                        <li <?php if ($selectmenu == 'index') { ?>class="active"<?php } ?>>
								<?php echo $this->tag->linkTo(array('data_user/index', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-search fa-stack-1x "></i></span>Search')); ?>
								</li>
								<li <?php if ($selectmenu == 'new') { ?>class="active"<?php } ?>>
								<?php echo $this->tag->linkTo(array('data_user/new', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-plus fa-stack-1x "></i></span>New')); ?>
								</li>
		                       </ul>
		                </li <?php } ?>>
		            	<li <?php if ($selectmenu == 'about') { ?>class="active"<?php } ?>>
							<?php echo $this->tag->linkTo(array('about', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-home fa-stack-1x "></i></span>About')); ?>
		                </li>
		                <li <?php if ($this->session->get('user_name') == '') { ?>
		                 <?php if ($selectmenu == 'login') { ?>class="active"<?php } ?>>
							<?php echo $this->tag->linkTo(array('login', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-sign-in fa-stack-1x "></i></span>Login')); ?>
		                </li <?php } ?>>
		                <li <?php if ($this->session->get('user_name') == 'admin') { ?>
		                 <?php if ($selectmenu == 'logout') { ?>class="active"<?php } ?>>
							<?php echo $this->tag->linkTo(array('/login/logout', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-sign-out fa-stack-1x "></i></span>Logout')); ?>
		                </li  <?php } ?>>
		                <!--form user -->
		                <li <?php if ($this->session->get('user_name') == 'user') { ?> 
		                <?php if ($selectmenu == 'data_ongkir') { ?>class="active"<?php } ?>>
		                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-credit-card fa-stack-1x "></i></span>Ongkir</a>
		                       <ul class="nav-pills nav-stacked" style="list-style-type:none;">
		                        <li <?php if ($selectmenu == 'index') { ?>class="active"<?php } ?>>
								<?php echo $this->tag->linkTo(array('data_ongkir/index', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-search fa-stack-1x "></i></span>Search')); ?>
								</li>
								<li <?php if ($selectmenu == 'new') { ?>class="active"<?php } ?>>
								<?php echo $this->tag->linkTo(array('data_ongkir/new', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-plus fa-stack-1x "></i></span>New')); ?>
								</li>
		                       </ul>
		                </li <?php } ?>>
		                <li <?php if ($this->session->get('user_name') == 'user') { ?>
		                <?php if ($selectmenu == 'data_kendaraan') { ?>class="active"<?php } ?>>
		                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-motorcycle fa-stack-1x "></i></span>Kendaraan</a>
		                       <ul class="nav-pills nav-stacked" style="list-style-type:none;">
		                        <li <?php if ($selectmenu == 'index') { ?>class="active"<?php } ?>>
								<?php echo $this->tag->linkTo(array('data_kendaraan/index', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-search fa-stack-1x "></i></span>Search')); ?>
								</li>
								<li <?php if ($selectmenu == 'new') { ?>class="active"<?php } ?>>
								<?php echo $this->tag->linkTo(array('data_kendaraan/new', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-plus fa-stack-1x "></i></span>New')); ?>
								</li>
		                       </ul>
		                </li <?php } ?>>
		                <li <?php if ($this->session->get('user_name') == 'user') { ?>
		                <?php if ($selectmenu == 'data_pemesanan') { ?>class="active"<?php } ?>>
		                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-envelope-o fa-stack-1x "></i></span>Pemesanan</a>
		                       <ul class="nav-pills nav-stacked" style="list-style-type:none;">
		                        <li <?php if ($selectmenu == 'index') { ?>class="active"<?php } ?>>
								<?php echo $this->tag->linkTo(array('data_pemesanan/index', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-search fa-stack-1x "></i></span>Search')); ?>
								</li>
								<li <?php if ($selectmenu == 'new') { ?>class="active"<?php } ?>>
								<?php echo $this->tag->linkTo(array('data_pemesanan/new', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-plus fa-stack-1x "></i></span>New')); ?>
								</li>
		                       </ul>
		                </li <?php } ?>>
		                <li <?php if ($this->session->get('user_name') == 'user') { ?>
		                <?php if ($selectmenu == 'data_supir') { ?>class="active"<?php } ?>>
		                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-male fa-stack-1x "></i></span>Supir</a>
		                       <ul class="nav-pills nav-stacked" style="list-style-type:none;">
		                        <li <?php if ($selectmenu == 'index') { ?>class="active"<?php } ?>>
								<?php echo $this->tag->linkTo(array('data_supir/index', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-search fa-stack-1x "></i></span>Search')); ?>
								</li>
								<li <?php if ($selectmenu == 'new') { ?>class="active"<?php } ?>>
								<?php echo $this->tag->linkTo(array('data_supir/new', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-plus fa-stack-1x "></i></span>New')); ?>
								</li>
		                       </ul>
		                </li <?php } ?>>
		                <li <?php if ($this->session->get('user_name') == 'user') { ?>
		                 <?php if ($selectmenu == 'logout') { ?>class="active"<?php } ?>>
							<?php echo $this->tag->linkTo(array('/login/logout', '<span class="fa-stack fa-lg pull-left"><i class="fa fa-sign-out fa-stack-1x "></i></span>Logout')); ?>
		                </li  <?php } ?>>


		            </ul>
		        </div><!-- /#sidebar-wrapper -->
		        <!-- Page Content -->
		        <div id="page-content-wrapper">
		            <div class="container-fluid xyz">
		                <div class="row">
		                    <div class="col-lg-12">
        <?php echo $this->getContent(); ?>
													</div>
								                </div>
								            </div>
								        </div>
								        <!-- /#page-content-wrapper -->

								    </div>
								    <!-- /#wrapper -->
								    <!-- jQuery -->

								<?php echo $this->tag->javascriptInclude('js/sidebar_menu.js'); ?>
    </body>
</html>

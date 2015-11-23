<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
    	<?php echo $this->tag->form(array('login/proseslogin', 'role' => 'form')); ?>
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>
					Aplikasi <small>Pengiriman Barang</small>
				</h1>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/">
		</div>
		<div class="col-md-8">
			<form class="form-horizontal" role="form">
				<div class="form-group">
					 
					<label for="inputEmail3" class="col-sm-2 control-label">
						Username
					</label>
					<div class="col-sm-10">
						<input class="form-control" id="inputEmail3" type="string">
					</div>
				</div>
				<div class="form-group">
					 
					<label for="inputPassword3" class="col-sm-2 control-label">
						Password
					</label>
					<div class="col-sm-10">
						<input class="form-control" id="inputPassword3" type="password">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<div class="checkbox">
							 
							<label>
								<input type="checkbox"> Remember me
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						 
						<button type="submit" class="btn btn-default">
							Sign in
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/scripts.js"></script>
  </body>
</html>
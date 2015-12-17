<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="shortcut icon" href="{$page.rootpath}favicon.ico" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		{$page.meta}
		<link href="{$page.tplpath}css/bootstrap.min.css" type="text/css" rel="stylesheet" />
		<link href="{$page.tplpath}css/bootstrap-theme.min.css" type="text/css" rel="stylesheet" />
		<link href="{$page.admpath}css/admin.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript" src="{$page.tplpath}js/bootstrap.min.js"></script>
		<title>{$page.title}</title>
	</head>
	
	<body onload="{$page.onload}">
		<div class="container">
			<div class="row">
				{if $page.info}<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{$page.info}</div>{/if}
				{if $page.error}<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{$page.error}</div>{/if}
				<div style="margin-top: 20px;">
					<div class="panel panel-default col-lg-offset-4 col-md-offset-3 col-sm-offset-3 col-lg-4 col-md-6 col-sm-6">
						<div class="panel-body">
							<h3 class="page-header" style="margin: 0 0 30px 0;">Администрирование</h3>
							<form action="" method="post" class="form-horizontal" role="form">
								<div class="form-group">
									<label for="login" class="col-lg-3 col-md-3 col-sm-3 control-label">Логин</label>
									<div class="col-lg-9 col-md-9 col-sm-9">
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
											<input type="text" name="login" class="form-control" id="login" placeholder="Логин">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="password" class="col-lg-3 col-md-3 col-sm-3 control-label">Пароль</label>
									<div class="col-lg-9 col-md-9 col-sm-9">
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
											<input type="password" name="password" class="form-control" id="password" placeholder="Пароль">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-lg-9 col-md-9 col-sm-9">
										<button type="submit" name="login_submit" class="btn btn-default btn-block btn-primary">Вход</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
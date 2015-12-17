<?php /* Smarty version Smarty-3.1.15, created on 2013-11-20 12:22:01
         compiled from "..\admin\tpl\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22932528c7f398c7855-76794075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ea3a634856ac371a088ad1a9460f21f22a486af' => 
    array (
      0 => '..\\admin\\tpl\\login.tpl',
      1 => 1383654346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22932528c7f398c7855-76794075',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_528c7f399b8888_76914160',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528c7f399b8888_76914160')) {function content_528c7f399b8888_76914160($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['page']->value['rootpath'];?>
favicon.ico" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php echo $_smarty_tpl->tpl_vars['page']->value['meta'];?>

		<link href="<?php echo $_smarty_tpl->tpl_vars['page']->value['tplpath'];?>
css/bootstrap.min.css" type="text/css" rel="stylesheet" />
		<link href="<?php echo $_smarty_tpl->tpl_vars['page']->value['tplpath'];?>
css/bootstrap-theme.min.css" type="text/css" rel="stylesheet" />
		<link href="<?php echo $_smarty_tpl->tpl_vars['page']->value['admpath'];?>
css/admin.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['page']->value['tplpath'];?>
js/bootstrap.min.js"></script>
		<title><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
</title>
	</head>
	
	<body onload="<?php echo $_smarty_tpl->tpl_vars['page']->value['onload'];?>
">
		<div class="container">
			<div class="row">
				<?php if ($_smarty_tpl->tpl_vars['page']->value['info']) {?><div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><?php echo $_smarty_tpl->tpl_vars['page']->value['info'];?>
</div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['error']) {?><div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><?php echo $_smarty_tpl->tpl_vars['page']->value['error'];?>
</div><?php }?>
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
</html><?php }} ?>

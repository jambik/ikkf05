<?php /* Smarty version Smarty-3.1.15, created on 2015-11-16 12:02:50
         compiled from "../admin/tpl/_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1564300685564a0c3a70f2a1-26029208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aded5c20bf672b76bdaf2c04812be32f487a8bdc' => 
    array (
      0 => '../admin/tpl/_header.tpl',
      1 => 1438123092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1564300685564a0c3a70f2a1-26029208',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_564a0c3a747199_13225902',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564a0c3a747199_13225902')) {function content_564a0c3a747199_13225902($_smarty_tpl) {?><!DOCTYPE html>
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
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['page']->value['admpath'];?>
js/functions.js"></script>
		<title><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
</title>
	</head>
	
	<body onload="<?php echo $_smarty_tpl->tpl_vars['page']->value['onload'];?>
" style="padding: 50px 15px;">
		<a name="top"></a>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container1">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Навигация</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['admpath'];?>
" class="navbar-brand">Администрирование</a>
				</div>

				<div class="collapse navbar-collapse navbar-ex1-collapse" role="navigation">
					<ul class="nav navbar-nav navbar-right">
						<li style="border-right: 1px solid #eee;"><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['rootpath'];?>
" target="_blank"><span class="glyphicon glyphicon-new-window"></span> Открыть сайт</a></li>
						<li style="border-right: 1px solid #eee;"><a><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['admin']['admin_name'];?>
</a></li>
						<li><a href="login.php?action=logoff"><span class="glyphicon glyphicon-log-out"></span> Выход</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div>&nbsp;</div>
		<div class="container1">
			<div class="row">
				<div class="col-lg-2 col-md-2">
					<div class="list-group">
						<a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['admpath'];?>
pages.php" class="list-group-item"><span class="glyphicon glyphicon-file"></span> Страницы</a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['admpath'];?>
news.php" class="list-group-item"><span class="glyphicon glyphicon-file"></span> Новости</a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['admpath'];?>
gallery.php" class="list-group-item"><span class="glyphicon glyphicon-camera"></span> Фотогалерея</a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['admpath'];?>
video.php" class="list-group-item"><span class="glyphicon glyphicon-film"></span> Видео</a>
						<?php if ($_SESSION['admin']['admin_group']==1) {?>
							<span class="list-group-item sep"></span>
							<a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['admpath'];?>
settings.php" class="list-group-item"><span class="glyphicon glyphicon-cog"></span> Настройки</a>
							<a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['admpath'];?>
log.php" class="list-group-item"><span class="glyphicon glyphicon-info-sign"></span> Лог</a>
							<a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['admpath'];?>
admins.php" class="list-group-item"><span class="glyphicon glyphicon-user"></span> Администраторы</a>
						<?php }?>
					</div>
				</div>
				<div class="col-lg-10 col-md-10"><?php }} ?>

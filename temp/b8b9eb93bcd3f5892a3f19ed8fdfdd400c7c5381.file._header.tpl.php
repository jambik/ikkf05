<?php /* Smarty version Smarty-3.1.15, created on 2015-11-16 12:02:36
         compiled from "templates/_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103338212955b7a40af0f196-94152750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8b9eb93bcd3f5892a3f19ed8fdfdd400c7c5381' => 
    array (
      0 => 'templates/_header.tpl',
      1 => 1438123502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103338212955b7a40af0f196-94152750',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55b7a40b01cce1_48013912',
  'variables' => 
  array (
    'page' => 0,
    'menu' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b7a40b01cce1_48013912')) {function content_55b7a40b01cce1_48013912($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head charset="utf-8">
		<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['page']->value['description'];?>
" />
		<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['page']->value['keywords'];?>
" />
		<link rel="shortcut icon" href="favicon.ico" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php echo $_smarty_tpl->tpl_vars['page']->value['meta'];?>

		<link href="<?php echo $_smarty_tpl->tpl_vars['page']->value['tplpath'];?>
css/bootstrap.min.css" type="text/css" rel="stylesheet" />
		<link href="<?php echo $_smarty_tpl->tpl_vars['page']->value['tplpath'];?>
css/bootstrap-theme.min.css" type="text/css" rel="stylesheet" />
		<link href="<?php echo $_smarty_tpl->tpl_vars['page']->value['tplpath'];?>
css/global.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['page']->value['tplpath'];?>
js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['page']->value['tplpath'];?>
js/functions.js"></script>
		<title><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
</title>
	</head>
	<body onload="<?php echo $_smarty_tpl->tpl_vars['page']->value['onload'];?>
">
		<a name="top"></a>
		<header>
			<div class="container">
				<div class="header">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 header-left"></div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 logo">
							<a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['rootpath'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['tplpath'];?>
img/logo.png" alt="" /></a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 header-right">
							<img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['tplpath'];?>
img/right.png" alt="" />
						</div>
					</div>
					<div class="brand-name">Федерация Киокушинкай Каратэ Дагестана</div>
				</div>
			</div>
		</header>
		
		<div>&nbsp;</div>
		
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<nav>
						<ul class="nav nav-list">
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
								<li<?php if ((!isset($_GET['alias'])&&$_smarty_tpl->tpl_vars['item']->value['page_id']==1)||$_smarty_tpl->tpl_vars['page']->value['id']==$_smarty_tpl->tpl_vars['item']->value['page_id']) {?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['rootpath'];?>
<?php if ($_smarty_tpl->tpl_vars['item']->value['page_id']==1) {?><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['item']->value['page_alias'];?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value['page_name'];?>
</a></li>
							<?php } ?>
						</ul>
					</nav>
					<p>&nbsp;</p>
				</div>
				<div class="col-lg-9 col-md-9">
					<?php }} ?>

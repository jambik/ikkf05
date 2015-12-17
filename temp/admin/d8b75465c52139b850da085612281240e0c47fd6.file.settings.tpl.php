<?php /* Smarty version Smarty-3.1.15, created on 2013-11-21 08:41:21
         compiled from "..\admin\tpl\settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28837528d9b11722bf8-90228948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8b75465c52139b850da085612281240e0c47fd6' => 
    array (
      0 => '..\\admin\\tpl\\settings.tpl',
      1 => 1385012480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28837528d9b11722bf8-90228948',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_528d9b11815092_95753776',
  'variables' => 
  array (
    'page' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528d9b11815092_95753776')) {function content_528d9b11815092_95753776($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<?php if ($_smarty_tpl->tpl_vars['page']->value['info']) {?><div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><?php echo $_smarty_tpl->tpl_vars['page']->value['info'];?>
</div><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['page']->value['error']) {?><div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><?php echo $_smarty_tpl->tpl_vars['page']->value['error'];?>
</div><?php }?>

	<form action="" method="post" class="form-horizontal" name="form_settings" id="form_settings">
		<div class="panel panel-default">
			<div class="panel-heading"><p class="lead" style="margin-bottom: 0;"><span class="glyphicon glyphicon-cog"></span> Настройки</p></div>
			<div class="panel-body" style="background: #f9f9f9;">
				<div class="form-group">
					<label for="email" class="col-lg-2 col-md-2 control-label">Email</label>
					<div class="col-lg-5 col-md-5">
						<input type="text" class="form-control" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['email'];?>
" />
						<div class="hint">Email для обратной связи</div>
					</div>
				</div>
			</div>
			<div class="panel-footer text-center">
				<button type="submit" class="btn btn-primary" name="submit_settings" value="1"><span class="glyphicon glyphicon-check"></span> Сохранить</button>
			</div>
		</div>
	</form>

<?php echo $_smarty_tpl->getSubTemplate ("_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>

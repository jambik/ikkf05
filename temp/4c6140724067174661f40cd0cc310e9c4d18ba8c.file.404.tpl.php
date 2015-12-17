<?php /* Smarty version Smarty-3.1.15, created on 2013-12-10 10:57:16
         compiled from "templates\404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2617528c8417cf42b3-90186750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c6140724067174661f40cd0cc310e9c4d18ba8c' => 
    array (
      0 => 'templates\\404.tpl',
      1 => 1386662234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2617528c8417cf42b3-90186750',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_528c8417dc1558_21181782',
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528c8417dc1558_21181782')) {function content_528c8417dc1558_21181782($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<?php if (isset($_smarty_tpl->tpl_vars['page']->value['info'])&&$_smarty_tpl->tpl_vars['page']->value['info']) {?><div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><?php echo $_smarty_tpl->tpl_vars['page']->value['info'];?>
</div><?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['page']->value['error'])&&$_smarty_tpl->tpl_vars['page']->value['error']) {?><div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><?php echo $_smarty_tpl->tpl_vars['page']->value['error'];?>
</div><?php }?>
	
	<div class="alert alert-danger">
		<p class="lead">Ошибка 404</p>
		<p>Страница не найдена</p>
	</div>

<?php echo $_smarty_tpl->getSubTemplate ("_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>

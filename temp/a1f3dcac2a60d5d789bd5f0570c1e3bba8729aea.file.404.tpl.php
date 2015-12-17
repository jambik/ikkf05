<?php /* Smarty version Smarty-3.1.15, created on 2015-11-16 13:42:49
         compiled from "templates/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81954305555b7a7cc8afd64-08848621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1f3dcac2a60d5d789bd5f0570c1e3bba8729aea' => 
    array (
      0 => 'templates/404.tpl',
      1 => 1438123502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81954305555b7a7cc8afd64-08848621',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55b7a7cc960ae3_18680674',
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b7a7cc960ae3_18680674')) {function content_55b7a7cc960ae3_18680674($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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

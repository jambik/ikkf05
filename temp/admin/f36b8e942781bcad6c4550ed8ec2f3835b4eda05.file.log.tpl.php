<?php /* Smarty version Smarty-3.1.15, created on 2013-11-20 12:21:04
         compiled from "..\admin\tpl\log.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11410528c7f007874a1-48006364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f36b8e942781bcad6c4550ed8ec2f3835b4eda05' => 
    array (
      0 => '..\\admin\\tpl\\log.tpl',
      1 => 1383988050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11410528c7f007874a1-48006364',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'itemConfig' => 0,
    'item' => 0,
    'processingTime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_528c7f008e8f66_67310901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528c7f008e8f66_67310901')) {function content_528c7f008e8f66_67310901($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<?php if ($_smarty_tpl->tpl_vars['page']->value['info']) {?><div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><?php echo $_smarty_tpl->tpl_vars['page']->value['info'];?>
</div><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['page']->value['error']) {?><div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><?php echo $_smarty_tpl->tpl_vars['page']->value['error'];?>
</div><?php }?>
	
	<p class="text-center lead text-primary"><?php echo $_smarty_tpl->tpl_vars['itemConfig']->value['itemNames'];?>
</p>
	
	<?php if (!isset($_GET['edit'])&&!isset($_GET['action'])&&!isset($_smarty_tpl->tpl_vars['item']->value)) {?>
		<div class="items-box">
			<?php echo $_smarty_tpl->getSubTemplate ("base_items_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('hideAddButton'=>"true"), 0);?>

			<?php echo $_smarty_tpl->getSubTemplate ("base_items_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php echo $_smarty_tpl->getSubTemplate ("base_items_bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('hideDeleteAllButton'=>"true",'showDeleteAllButton'=>"true"), 0);?>

		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("base_ajax_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>
	
	<?php if (isset($_smarty_tpl->tpl_vars['processingTime']->value)) {?><p class="text-center"><span class="text-muted small"><?php echo $_smarty_tpl->tpl_vars['processingTime']->value;?>
</span></p><?php }?>

	<input type="hidden" name="class-file" id="class-file" value="<?php echo $_smarty_tpl->tpl_vars['itemConfig']->value['classFile'];?>
" />
	<input type="hidden" name="class-name" id="class-name" value="<?php echo $_smarty_tpl->tpl_vars['itemConfig']->value['className'];?>
" />

<?php echo $_smarty_tpl->getSubTemplate ("_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.15, created on 2015-11-16 12:02:51
         compiled from "../admin/tpl/base.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1216516178564a0c3bd6c7f7-38523449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5608cd731541bba255288629b195e570c270339' => 
    array (
      0 => '../admin/tpl/base.tpl',
      1 => 1438123092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1216516178564a0c3bd6c7f7-38523449',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'itemConfig' => 0,
    'ajaxFields' => 0,
    'item' => 0,
    'processingTime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_564a0c3bdc4701_68142124',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564a0c3bdc4701_68142124')) {function content_564a0c3bdc4701_68142124($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<?php if ($_smarty_tpl->tpl_vars['page']->value['info']) {?><div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><?php echo $_smarty_tpl->tpl_vars['page']->value['info'];?>
</div><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['page']->value['error']) {?><div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><?php echo $_smarty_tpl->tpl_vars['page']->value['error'];?>
</div><?php }?>

	<p class="text-center lead text-primary"><?php echo $_smarty_tpl->tpl_vars['itemConfig']->value['itemNames'];?>
</p>
	
	<?php if (isset($_smarty_tpl->tpl_vars['itemConfig']->value['showImage'])&&$_smarty_tpl->tpl_vars['ajaxFields']->value) {?>
		<div style="font-size: 0.001%;">
			<iframe id="upload_target" name="upload_target" src="" style="width:0;height:0;border:0;"></iframe>
			<input type="hidden" name="image_path" id="image_path" value="<?php echo $_smarty_tpl->tpl_vars['itemConfig']->value['imagePath'];?>
" />
		</div>
	<?php }?>

	<?php if (isset($_GET['action'])&&$_GET['action']=="add"||isset($_smarty_tpl->tpl_vars['item']->value)) {?>
		<?php echo $_smarty_tpl->getSubTemplate ("base_item_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>

	<?php if (!isset($_GET['edit'])&&!isset($_GET['action'])&&!isset($_smarty_tpl->tpl_vars['item']->value)) {?>
		<div class="items-box">
			<?php echo $_smarty_tpl->getSubTemplate ("base_items_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php echo $_smarty_tpl->getSubTemplate ("base_items_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php echo $_smarty_tpl->getSubTemplate ("base_items_bottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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

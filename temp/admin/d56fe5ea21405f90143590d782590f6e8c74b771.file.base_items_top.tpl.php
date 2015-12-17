<?php /* Smarty version Smarty-3.1.15, created on 2015-11-16 12:02:51
         compiled from "../admin/tpl/base_items_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:911310953564a0c3bdc93b9-92185830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd56fe5ea21405f90143590d782590f6e8c74b771' => 
    array (
      0 => '../admin/tpl/base_items_top.tpl',
      1 => 1438123092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '911310953564a0c3bdc93b9-92185830',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hideAddButton' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_564a0c3be088c5_42424220',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564a0c3be088c5_42424220')) {function content_564a0c3be088c5_42424220($_smarty_tpl) {?><?php if (!is_callable('smarty_function_get_params')) include '/var/www/ikkf05.ru/html/includes/smarty-3.1.15/plugins/function.get_params.php';
?>	<div class="panel panel-default" style="background: #f9f9f9;">
		<div class="row panel-body" style="padding: 7px;">
			<div class="col-lg-6 col-md-5 col-sm-5 col-xs-4">
				<?php if (!isset($_smarty_tpl->tpl_vars['hideAddButton']->value)) {?><a class="btn btn-primary btn-sm" href="?action=add<?php echo smarty_function_get_params(array('prefix'=>'&amp;','exclude'=>'action,edit'),$_smarty_tpl);?>
"><span class="glyphicon glyphicon-plus"></span> Добавить</a><?php }?>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
				<form action="" method="get" id="form-search" role="form">
					<?php $_smarty_tpl->_capture_stack[0][] = array('search', null, null); ob_start(); ?><?php echo smarty_function_get_params(array('prefix'=>'&amp;','exclude'=>'search,portion'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<div class="input-group">
						<input type="text" class="form-control input-sm" name="search" id="search" placeholder="Поиск" value="<?php if (isset($_GET['search'])) {?><?php echo $_GET['search'];?>
<?php }?>" />
						<span class="input-group-btn">
							<button class="btn btn-sm btn-primary" onclick="document.location = $('#div-search-params').text() ? '?'+$('#form-search').serialize() + $('#div-search-params').text() : '?'+$('#form-search').serialize(); return false;"><span class="glyphicon glyphicon-search"></span></button>
						</span>
					</div>
					<div style="display:none" id="div-search-params"><?php echo Smarty::$_smarty_vars['capture']['search'];?>
</div>
				</form>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 text-right">
				<form action="" method="get" id="form-quantity" class="form-inline" role="form">
					<div class="form-group">Показывать</div>
					<?php $_smarty_tpl->_capture_stack[0][] = array('quantity', null, null); ob_start(); ?><?php echo smarty_function_get_params(array('prefix'=>'&amp;','exclude'=>'quantity,portion'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<div class="form-group">
						<select name="quantity" id="quantity" class="form-control input-sm" onchange="document.location = $('#div-quantity-params').text() ? '?'+$('#form-quantity').serialize() + $('#div-quantity-params').text() : '?'+$('#form-quantity').serialize();">
							<option value="25"<?php if ($_smarty_tpl->tpl_vars['pagination']->value['quantity']==25) {?> selected="selected"<?php }?>>25</option>
							<option value="50"<?php if ($_smarty_tpl->tpl_vars['pagination']->value['quantity']==50) {?> selected="selected"<?php }?>>50</option>
							<option value="100"<?php if ($_smarty_tpl->tpl_vars['pagination']->value['quantity']==100) {?> selected="selected"<?php }?>>100</option>
							<option value="500"<?php if ($_smarty_tpl->tpl_vars['pagination']->value['quantity']==500) {?> selected="selected"<?php }?>>500</option>
							<option value="1000"<?php if ($_smarty_tpl->tpl_vars['pagination']->value['quantity']==1000) {?> selected="selected"<?php }?>>1000</option>
						</select>
					</div>
					<div class="form-group">строк</div>
					<div style="display:none" id="div-quantity-params"><?php echo Smarty::$_smarty_vars['capture']['quantity'];?>
</div>
				</form>
			</div>
		</div>
	</div><?php }} ?>

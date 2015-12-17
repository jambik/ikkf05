<?php /* Smarty version Smarty-3.1.15, created on 2013-11-20 12:16:03
         compiled from "..\admin\tpl\base_ajax_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27249528c7dd3851036-87838329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9e3a3736601b11b28b2320de482aba56c1342d4' => 
    array (
      0 => '..\\admin\\tpl\\base_ajax_fields.tpl',
      1 => 1383835355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27249528c7dd3851036-87838329',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ajaxFields' => 0,
    'itemKey' => 0,
    'page' => 0,
    'arrayValues' => 0,
    'key' => 0,
    'value' => 0,
    'value2' => 0,
    'key2' => 0,
    'keyValues' => 0,
    'keyFieldNames' => 0,
    'keyFields' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_528c7dd392c4b0_85100184',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528c7dd392c4b0_85100184')) {function content_528c7dd392c4b0_85100184($_smarty_tpl) {?>	<?php if ($_smarty_tpl->tpl_vars['ajaxFields']->value) {?>
		
		<input type="hidden" alt="ajax" name="<?php echo $_smarty_tpl->tpl_vars['itemKey']->value;?>
" id="ajax-item-id" value="" />
		<input type="hidden" name="ajax-fields" id="ajax-fields" value="<?php echo $_smarty_tpl->tpl_vars['ajaxFields']->value;?>
" />
		
		<div id="ajax-dialog" style="display:none;"><div style="padding-top:38px; text-align:center;"><img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['admpath'];?>
img/loading-bar.gif" alt="" /></div></div>
		
		<?php if (isset($_smarty_tpl->tpl_vars['arrayValues']->value)) {?>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arrayValues']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<span style="display:none" id="ajax-select-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
					<select class="form-control input-sm" name="">
						<?php  $_smarty_tpl->tpl_vars['value2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value2']->_loop = false;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value2']->key => $_smarty_tpl->tpl_vars['value2']->value) {
$_smarty_tpl->tpl_vars['value2']->_loop = true;
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['value2']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['value2']->value=="NULL") {?><option value=""></option><?php } else { ?><option value="<?php echo $_smarty_tpl->tpl_vars['key2']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value2']->value;?>
</option><?php }?>
						<?php } ?>
					</select>
				</span>
			<?php } ?>
		<?php }?>
		
		<?php if (isset($_smarty_tpl->tpl_vars['keyValues']->value)) {?>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['keyValues']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<span style="display:none" id="ajax-select-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
					<select class="form-control input-sm" name="">
						<?php $_smarty_tpl->tpl_vars['keyFields'] = new Smarty_variable($_smarty_tpl->tpl_vars['keyFieldNames']->value[$_smarty_tpl->tpl_vars['key']->value], null, 0);?>
						<?php if ($_smarty_tpl->tpl_vars['keyFields']->value['empty']) {?><option value=""></option><?php }?>
						<?php  $_smarty_tpl->tpl_vars['value2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value2']->_loop = false;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value2']->key => $_smarty_tpl->tpl_vars['value2']->value) {
$_smarty_tpl->tpl_vars['value2']->_loop = true;
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['value2']->key;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['value2']->value[$_smarty_tpl->tpl_vars['keyFields']->value['key']];?>
"><?php echo $_smarty_tpl->tpl_vars['value2']->value[$_smarty_tpl->tpl_vars['keyFields']->value['key_value']];?>
</option>
						<?php } ?>
					</select>
				</span>
			<?php } ?>
		<?php }?>
		
	<?php }?><?php }} ?>

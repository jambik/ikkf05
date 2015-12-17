<?php /* Smarty version Smarty-3.1.15, created on 2015-11-16 12:03:06
         compiled from "../admin/tpl/base_item_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1984301027564a0c4a396a24-84898391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96dc40fa8eb032f7c61200ea62156db76f24c3a7' => 
    array (
      0 => '../admin/tpl/base_item_form.tpl',
      1 => 1438123092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1984301027564a0c4a396a24-84898391',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'itemConfig' => 0,
    'itemImageUrl' => 0,
    'itemFields' => 0,
    'value' => 0,
    'item' => 0,
    'arrayValues' => 0,
    'value2' => 0,
    'key2' => 0,
    'keyValues' => 0,
    'itemKey' => 0,
    'setValues' => 0,
    'item2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_564a0c4a666d09_14923940',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564a0c4a666d09_14923940')) {function content_564a0c4a666d09_14923940($_smarty_tpl) {?><?php if (!is_callable('smarty_function_get_params')) include '/var/www/ikkf05.ru/html/includes/smarty-3.1.15/plugins/function.get_params.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/ikkf05.ru/html/includes/smarty-3.1.15/plugins/modifier.date_format.php';
?>	<div id="itemForm">
		<form action="<?php echo $_smarty_tpl->tpl_vars['itemConfig']->value['adminScript'];?>
<?php echo smarty_function_get_params(array('prefix'=>'?','exclude'=>'action,edit'),$_smarty_tpl);?>
" class="form-horizontal" method="post" name="form_item" id="form_item"<?php if ($_smarty_tpl->tpl_vars['itemImageUrl']->value) {?> enctype="multipart/form-data"<?php }?>>
			<div class="panel panel-default">
				<div class="panel-heading"><p class="lead" style="margin-bottom: 0;"><?php echo $_smarty_tpl->tpl_vars['itemConfig']->value['itemName'];?>
</p></div>
				<div class="panel-body" style="background: #f9f9f9;">
					<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['itemFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value['edit']!==false) {?>
							<?php if ($_smarty_tpl->tpl_vars['value']->value['type']=='text') {?>
								<div class="form-group">
									<label for="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
" class="col-lg-2 col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</label>
									<div class="col-lg-5 col-md-5">
										<input type="text" class="form-control input-text<?php if (!$_smarty_tpl->tpl_vars['value']->value['empty']) {?> not-empty<?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['value']->value['field']], ENT_QUOTES, 'UTF-8', true);?>
" />
										<?php if (isset($_smarty_tpl->tpl_vars['value']->value['hint'])) {?><div class="hint"><?php echo $_smarty_tpl->tpl_vars['value']->value['hint'];?>
</div><?php }?>
									</div>
								</div>
							<?php } elseif ($_smarty_tpl->tpl_vars['value']->value['type']=='integer'||$_smarty_tpl->tpl_vars['value']->value['type']=='float') {?>
								<div class="form-group">
									<label for="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
" class="col-lg-2 col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</label>
									<div class="col-lg-5 col-md-5">
										<input type="text" class="form-control input-number<?php if (!$_smarty_tpl->tpl_vars['value']->value['empty']) {?> not-empty<?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['value']->value['field']];?>
" />
										<?php if (isset($_smarty_tpl->tpl_vars['value']->value['hint'])) {?><div class="hint"><?php echo $_smarty_tpl->tpl_vars['value']->value['hint'];?>
</div><?php }?>
									</div>
								</div>
							<?php } elseif ($_smarty_tpl->tpl_vars['value']->value['type']=='array') {?>
								<div class="form-group">
									<label for="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
" class="col-lg-2 col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</label>
									<div class="col-lg-5 col-md-5">
										<?php if (isset($_smarty_tpl->tpl_vars['value']->value['control'])&&$_smarty_tpl->tpl_vars['value']->value['control']=="radio") {?>
											<?php  $_smarty_tpl->tpl_vars['value2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value2']->_loop = false;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arrayValues']->value[$_smarty_tpl->tpl_vars['value']->value['field']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value2']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['value2']->key => $_smarty_tpl->tpl_vars['value2']->value) {
$_smarty_tpl->tpl_vars['value2']->_loop = true;
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['value2']->key;
 $_smarty_tpl->tpl_vars['value2']->index++;
 $_smarty_tpl->tpl_vars['value2']->first = $_smarty_tpl->tpl_vars['value2']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['f_arr']['first'] = $_smarty_tpl->tpl_vars['value2']->first;
?>
												<?php if ($_smarty_tpl->tpl_vars['value2']->value=="NULL") {?>
													<div class="radio-item">
														<div class="radio-input"><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
_<?php echo $_smarty_tpl->tpl_vars['key2']->value;?>
" value=""<?php if (!$_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['value']->value['field']]) {?> checked="checked"<?php }?> /></div>
														<label class="radio-name" for="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
_<?php echo $_smarty_tpl->tpl_vars['key2']->value;?>
">- нет -</label>
													</div>
												<?php } else { ?>
													<div class="radio-item">
														<div class="radio-input"><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
_<?php echo $_smarty_tpl->tpl_vars['key2']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['key2']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['value']->value['field']]==$_smarty_tpl->tpl_vars['key2']->value||(!$_smarty_tpl->tpl_vars['item']->value&&$_smarty_tpl->getVariable('smarty')->value['foreach']['f_arr']['first']&&!$_smarty_tpl->tpl_vars['value']->value['empty'])) {?> checked="checked"<?php }?> /></div>
														<label class="radio-name" for="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
_<?php echo $_smarty_tpl->tpl_vars['key2']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value2']->value;?>
</label>
													</div>
												<?php }?>
											<?php } ?>
										<?php } else { ?>
											<select class="form-control input-select" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
">
												<?php  $_smarty_tpl->tpl_vars['value2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value2']->_loop = false;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arrayValues']->value[$_smarty_tpl->tpl_vars['value']->value['field']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value2']->key => $_smarty_tpl->tpl_vars['value2']->value) {
$_smarty_tpl->tpl_vars['value2']->_loop = true;
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['value2']->key;
?>
													<?php if ($_smarty_tpl->tpl_vars['value2']->value=="NULL") {?><option value=""></option><?php } else { ?><option value="<?php echo $_smarty_tpl->tpl_vars['key2']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['key2']->value==$_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['value']->value['field']]) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value2']->value;?>
</option><?php }?>
												<?php } ?>
											</select>
										<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['value']->value['hint'])) {?><div class="hint"><?php echo $_smarty_tpl->tpl_vars['value']->value['hint'];?>
</div><?php }?>
									</div>
								</div>
							<?php } elseif ($_smarty_tpl->tpl_vars['value']->value['type']=='key') {?>
								<div class="form-group">
									<label for="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
" class="col-lg-2 col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</label>
									<div class="col-lg-5 col-md-5">
										<?php if (isset($_smarty_tpl->tpl_vars['value']->value['control'])&&$_smarty_tpl->tpl_vars['value']->value['control']=="radio") {?>
											<?php if ($_smarty_tpl->tpl_vars['value']->value['empty']) {?>
												<div class="radio-item">
													<div class="radio-input"><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
_empty" value=""<?php if (!$_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['value']->value['field']]) {?> checked="checked"<?php }?> /></div>
													<label class="radio-name" for="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
_empty">- нет -</label>
												</div>
											<?php }?>
											<?php  $_smarty_tpl->tpl_vars['value2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value2']->_loop = false;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['keyValues']->value[$_smarty_tpl->tpl_vars['value']->value['field']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value2']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['value2']->key => $_smarty_tpl->tpl_vars['value2']->value) {
$_smarty_tpl->tpl_vars['value2']->_loop = true;
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['value2']->key;
 $_smarty_tpl->tpl_vars['value2']->index++;
 $_smarty_tpl->tpl_vars['value2']->first = $_smarty_tpl->tpl_vars['value2']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['f_key']['first'] = $_smarty_tpl->tpl_vars['value2']->first;
?>
												<div class="radio-item">
													<div class="radio-input"><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
_<?php echo $_smarty_tpl->tpl_vars['key2']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value2']->value[$_smarty_tpl->tpl_vars['value']->value['field']];?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['value']->value['field']]==$_smarty_tpl->tpl_vars['value2']->value[$_smarty_tpl->tpl_vars['value']->value['field']]||(!$_smarty_tpl->tpl_vars['item']->value&&$_smarty_tpl->getVariable('smarty')->value['foreach']['f_key']['first']&&!$_smarty_tpl->tpl_vars['value']->value['empty'])) {?> checked="checked"<?php }?> /></div>
													<label class="radio-name" for="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
_<?php echo $_smarty_tpl->tpl_vars['key2']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value2']->value[$_smarty_tpl->tpl_vars['value']->value['key_value']];?>
</label>
												</div>
											<?php } ?>
										<?php } else { ?>
											<select class="form-control input-select" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
">
												<?php if ($_smarty_tpl->tpl_vars['value']->value['empty']) {?><option value=""></option><?php }?>
												<?php  $_smarty_tpl->tpl_vars['value2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value2']->_loop = false;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['keyValues']->value[$_smarty_tpl->tpl_vars['value']->value['field']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value2']->key => $_smarty_tpl->tpl_vars['value2']->value) {
$_smarty_tpl->tpl_vars['value2']->_loop = true;
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['value2']->key;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['value2']->value[$_smarty_tpl->tpl_vars['value']->value['field']];?>
"<?php if ($_smarty_tpl->tpl_vars['value2']->value[$_smarty_tpl->tpl_vars['value']->value['field']]==$_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['value']->value['field']]) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value2']->value[$_smarty_tpl->tpl_vars['value']->value['key_value']];?>
</option>
												<?php } ?>
											</select>
										<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['value']->value['hint'])) {?><div class="hint"><?php echo $_smarty_tpl->tpl_vars['value']->value['hint'];?>
</div><?php }?>
									</div>
								</div>
							<?php } elseif ($_smarty_tpl->tpl_vars['value']->value['type']=='textarea') {?>
								<div class="form-group">
									<label for="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
" class="col-lg-2 col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</label>
									<div class="col-lg-5 col-md-5">
										<textarea class="form-control input-textarea<?php if (!$_smarty_tpl->tpl_vars['value']->value['empty']) {?> not-empty<?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
" rows="5" cols="50"><?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['value']->value['field']];?>
</textarea>
										<?php if (isset($_smarty_tpl->tpl_vars['value']->value['hint'])) {?><div class="hint"><?php echo $_smarty_tpl->tpl_vars['value']->value['hint'];?>
</div><?php }?>
									</div>
								</div>
							<?php } elseif ($_smarty_tpl->tpl_vars['value']->value['type']=='flag') {?>
								<div class="form-group">
									<label for="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
" class="col-lg-2 col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</label>
									<div class="col-lg-5 col-md-5">
										<div class="checkbox-item">
											<div class="checkbox-input"><input type="checkbox" class="input-flag" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['value']->value['field']]||(!$_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['itemKey']->value]&&$_smarty_tpl->tpl_vars['value']->value['default'])) {?>checked="checked" <?php }?>/></div>
											<label class="checkbox-name" for="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</label>
										</div>
										<?php if (isset($_smarty_tpl->tpl_vars['value']->value['hint'])) {?><div class="hint"><?php echo $_smarty_tpl->tpl_vars['value']->value['hint'];?>
</div><?php }?>
									</div>
								</div>
							<?php } elseif ($_smarty_tpl->tpl_vars['value']->value['type']=='html') {?>
								<div class="form-group">
									<label for="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
" class="col-lg-2 col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</label>
									<div class="col-lg-10 col-md-10">
										<textarea class="input-textarea<?php if (!$_smarty_tpl->tpl_vars['value']->value['empty']) {?> not-empty<?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
" rows="5" cols="50"><?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['value']->value['field']];?>
</textarea>
										<?php if (isset($_smarty_tpl->tpl_vars['value']->value['hint'])) {?><div class="hint"><?php echo $_smarty_tpl->tpl_vars['value']->value['hint'];?>
</div><?php }?>
									</div>
								</div>
							<?php } elseif ($_smarty_tpl->tpl_vars['value']->value['type']=='date') {?>
								<div class="form-group">
									<label for="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
" class="col-lg-2 col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</label>
									<div class="col-lg-5 col-md-5">
										<input type="text" class="form-control input-date<?php if (!$_smarty_tpl->tpl_vars['value']->value['empty']) {?> not-empty<?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
" value="<?php if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['value']->value['field']]) {?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['value']->value['field']],'%d.%m.%Y');?>
<?php if (isset($_smarty_tpl->tpl_vars['value']->value['time'])) {?> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['value']->value['field']],'%H:%M:%S');?>
<?php }?><?php }?>" />
										<?php if (isset($_smarty_tpl->tpl_vars['value']->value['hint'])) {?><div class="hint"><?php echo $_smarty_tpl->tpl_vars['value']->value['hint'];?>
</div><?php }?>
									</div>
								</div>
							<?php } elseif ($_smarty_tpl->tpl_vars['value']->value['type']=='set') {?>
								<div class="form-group">
									<label class="col-lg-2 col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</label>
									<div class="col-lg-10 col-md-10">
										<input type="hidden" class="input-set" name="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
" />
										<?php if (isset($_smarty_tpl->tpl_vars['value']->value['control'])&&$_smarty_tpl->tpl_vars['value']->value['control']=="checkbox") {?>
											<?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['setValues']->value[$_smarty_tpl->tpl_vars['value']->value['field']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value) {
$_smarty_tpl->tpl_vars['item2']->_loop = true;
?>
												<span class="set-item<?php if (isset($_smarty_tpl->tpl_vars['item2']->value['set_on'])&&$_smarty_tpl->tpl_vars['item2']->value['set_on']) {?> set-item-on<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['value']->value['field']];?>
">
													<input type="checkbox" name="checkbox-<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
[]" id="checkbox-<?php echo $_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['value']->value['field']];?>
"<?php if (isset($_smarty_tpl->tpl_vars['item2']->value['set_on'])&&$_smarty_tpl->tpl_vars['item2']->value['set_on']) {?> checked="checked"<?php }?> onchange="ToggleSetItem($(this).parent());" />
													<label for="checkbox-<?php echo $_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['value']->value['field']];?>
"><?php echo $_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['value']->value['set_value']];?>
</label>
												</span>
											<?php } ?>
										<?php } else { ?>
											<?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['setValues']->value[$_smarty_tpl->tpl_vars['value']->value['field']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value) {
$_smarty_tpl->tpl_vars['item2']->_loop = true;
?>
												<span class="set-item<?php if (isset($_smarty_tpl->tpl_vars['item2']->value['set_on'])&&$_smarty_tpl->tpl_vars['item2']->value['set_on']) {?> set-item-on<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['value']->value['field']];?>
" onclick="ToggleSetItem(this);"><?php echo $_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['value']->value['set_value']];?>
</span>
											<?php } ?>
										<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['value']->value['hint'])) {?><div class="hint"><?php echo $_smarty_tpl->tpl_vars['value']->value['hint'];?>
</div><?php }?>
									</div>
								</div>
							<?php }?>
						<?php }?>
					<?php } ?>
					<?php if ($_smarty_tpl->tpl_vars['itemImageUrl']->value) {?>
						<div class="form-group">
							<label for="image" class="col-lg-2 col-md-2 control-label">Фото</label>
							<div class="col-lg-5 col-md-5">
								<input type="file" class="form-control input-file" name="image" id="image" />
							</div>
						</div>
					<?php }?>
					<?php if (isset($_smarty_tpl->tpl_vars['item']->value['image'])&&$_smarty_tpl->tpl_vars['item']->value['image']) {?>
						<div class="form-group">
							<div class="col-lg-offset-2 col-md-offset-2 col-lg-10 col-md-10">
								<div class="thumbnail pull-left">
									<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['image_path'];?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" style="display: block;" class="text-center" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['itemConfig']->value['imagePath'];?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="" /></a>
									<div class="caption text-center"><a class="btn btn-xs btn-danger" href="#" onclick="DeleteImage(this, '<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
'); return false;"><span class="glyphicon glyphicon-trash"></span> удалить фото</a></div>
								</div>
							</div>
						</div>
					<?php }?>
				</div>
				<div class="panel-footer text-center">
					<button type="submit" class="btn btn-primary" name="submit"><span class="glyphicon glyphicon-check"></span> Сохранить</button>
					<button class="btn btn-default" onclick="document.location = '<?php echo $_smarty_tpl->tpl_vars['itemConfig']->value['adminScript'];?>
<?php echo smarty_function_get_params(array('prefix'=>'?','exclude'=>'action,edit'),$_smarty_tpl);?>
'; return false;"><span class="glyphicon glyphicon-remove"></span> Отмена</button>
				</div>
			</div>
			<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['itemKey']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['itemKey']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['itemKey']->value];?>
" />
		</form>
		<p>&nbsp;</p>
	</div><?php }} ?>

<?php /* Smarty version Smarty-3.1.15, created on 2015-11-16 12:02:51
         compiled from "../admin/tpl/base_items_table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1166192530564a0c3be0bf99-31256341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2f4e38e02d4968411db57f44479d904ed8d2dc0' => 
    array (
      0 => '../admin/tpl/base_items_table.tpl',
      1 => 1438123092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1166192530564a0c3be0bf99-31256341',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'itemConfig' => 0,
    'itemFields' => 0,
    'value' => 0,
    'itemOrder' => 0,
    'ajaxFields' => 0,
    'itemKey' => 0,
    'field' => 0,
    'arrayIndex' => 0,
    'arrayValues' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_564a0c3c055620_01499428',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564a0c3c055620_01499428')) {function content_564a0c3c055620_01499428($_smarty_tpl) {?><?php if (!is_callable('smarty_function_get_params')) include '/var/www/ikkf05.ru/html/includes/smarty-3.1.15/plugins/function.get_params.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/ikkf05.ru/html/includes/smarty-3.1.15/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/ikkf05.ru/html/includes/smarty-3.1.15/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/ikkf05.ru/html/includes/smarty-3.1.15/plugins/modifier.date_format.php';
?>		<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
			<form action="<?php echo smarty_function_get_params(array('prefix'=>'?'),$_smarty_tpl);?>
" method="post" id="form_item">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-items">
						<thead>
							<tr>
								<th class="td-id"><input type="checkbox" id="select_group" /> #</th>
								<?php if (isset($_smarty_tpl->tpl_vars['itemConfig']->value['showImage'])) {?><th class="td-img">Фото</th><?php }?>
								<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['itemFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
									<?php if ($_smarty_tpl->tpl_vars['value']->value['show']) {?><th><a href="?sort=<?php echo $_smarty_tpl->tpl_vars['value']->value['field'];?>
<?php if (!isset($_GET['order'])) {?>&amp;order=desc<?php }?><?php echo smarty_function_get_params(array('prefix'=>'&amp;','exclude'=>'sort,order'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a> <?php if (isset($_GET['sort'])&&$_GET['sort']==$_smarty_tpl->tpl_vars['value']->value['field']) {?><?php if (isset($_GET['order'])) {?><span class="glyphicon glyphicon-arrow-up"></span><?php } else { ?><span class="glyphicon glyphicon-arrow-down"></span><?php }?><?php }?></th><?php }?>
								<?php } ?>
								<?php if ($_smarty_tpl->tpl_vars['itemOrder']->value&&!isset($_GET['sort'])&&(!isset($_GET['search'])||!$_GET['search'])) {?><th class="td-order"><span class="glyphicon glyphicon-arrow-up text-success"></span> | <span class="glyphicon glyphicon-arrow-down text-success"></span></th><?php }?>
								<?php if ($_smarty_tpl->tpl_vars['ajaxFields']->value) {?><th class="td-ajax">Ajax</th><?php }?>
								<th class="td-edit"><a title="Редактировать" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-pencil"></span></a></th>
								<th class="td-delete"><a title="Удалить" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span></a></th>
							</tr>
						</thead>
						<tbody>
							<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
								<tr class="<?php echo smarty_function_cycle(array('values'=>'tr1,tr2'),$_smarty_tpl);?>
">
									<td class="td-id"><input type="checkbox" name="ids[]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['itemKey']->value];?>
" /> <?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['itemKey']->value];?>
</td>
									<?php if (isset($_smarty_tpl->tpl_vars['itemConfig']->value['showImage'])) {?><td class="td-img"><div id="image_<?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['itemKey']->value];?>
" class="field-image"><?php if ($_smarty_tpl->tpl_vars['value']->value['image']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['itemConfig']->value['imagePath'];?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['image'];?>
" alt="" /><?php }?></div></td><?php }?>
									<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['itemFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
										<?php if ($_smarty_tpl->tpl_vars['field']->value['show']) {?>
											<td<?php if (isset($_GET['sort'])&&$_GET['sort']==$_smarty_tpl->tpl_vars['field']->value['field']) {?> class="td-sort"<?php }?>>
											<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='text') {?><div id="<?php echo $_smarty_tpl->tpl_vars['field']->value['field'];?>
_<?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['itemKey']->value];?>
" class="field-text"><?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['field']->value['field']];?>
</div><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='integer'||$_smarty_tpl->tpl_vars['field']->value['type']=='float') {?><div id="<?php echo $_smarty_tpl->tpl_vars['field']->value['field'];?>
_<?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['itemKey']->value];?>
" class="field-number"><?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['field']->value['field']];?>
</div><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='array') {?><div id="<?php echo $_smarty_tpl->tpl_vars['field']->value['field'];?>
_<?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['itemKey']->value];?>
" class="field-select"><?php if ($_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['field']->value['field']]) {?><?php $_smarty_tpl->tpl_vars['arrayIndex'] = new Smarty_variable($_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['field']->value['field']], null, 0);?><?php echo $_smarty_tpl->tpl_vars['arrayValues']->value[$_smarty_tpl->tpl_vars['field']->value['field']][$_smarty_tpl->tpl_vars['arrayIndex']->value];?>
<?php }?></div><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='key') {?><div id="<?php echo $_smarty_tpl->tpl_vars['field']->value['field'];?>
_<?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['itemKey']->value];?>
" class="field-select"><?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['field']->value['key_value']];?>
</div><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='textarea') {?><div id="<?php echo $_smarty_tpl->tpl_vars['field']->value['field'];?>
_<?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['itemKey']->value];?>
" class="field-textarea"><?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['field']->value['field']];?>
</div><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='html') {?><div id="<?php echo $_smarty_tpl->tpl_vars['field']->value['field'];?>
_<?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['itemKey']->value];?>
" class="field-html"><?php echo smarty_modifier_truncate(htmlspecialchars(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['field']->value['field']])), ENT_QUOTES, 'UTF-8', true),240);?>
</div><div style="display:none"><?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['field']->value['field']];?>
</div><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='flag') {?><div id="<?php echo $_smarty_tpl->tpl_vars['field']->value['field'];?>
_<?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['itemKey']->value];?>
" class="field-flag"><a href="#" onclick="ToggleField(this, <?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['itemKey']->value];?>
, '<?php echo $_smarty_tpl->tpl_vars['field']->value['field'];?>
'); return false;"><?php if ($_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['field']->value['field']]) {?><span class="glyphicon glyphicon-check text-success"></span><?php } else { ?><span class="glyphicon glyphicon-unchecked text-muted"></span><?php }?></a></div><?php }?>
											<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='date') {?><div id="<?php echo $_smarty_tpl->tpl_vars['field']->value['field'];?>
_<?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['itemKey']->value];?>
" class="field-date"><?php if ($_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['field']->value['field']]) {?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['field']->value['field']],'%d.%m.%Y');?>
<?php if (isset($_smarty_tpl->tpl_vars['field']->value['time'])) {?> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['field']->value['field']],'%H:%M:%S');?>
<?php }?><?php }?></div><?php }?>
											</td>
										<?php }?>
									<?php } ?>
									<?php if ($_smarty_tpl->tpl_vars['itemOrder']->value&&!isset($_GET['sort'])&&(!isset($_GET['search'])||!$_GET['search'])) {?><td class="td-order"><a href="?up=<?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['itemKey']->value];?>
<?php echo smarty_function_get_params(array('prefix'=>'&amp;'),$_smarty_tpl);?>
" onclick="MoveItem(this, <?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['itemKey']->value];?>
, 'up', '<?php echo $_smarty_tpl->tpl_vars['page']->value['where'];?>
'); return false;" title="Наверх"><span class="glyphicon glyphicon-arrow-up text-success"></span></a> | <a href="?down=<?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['itemKey']->value];?>
<?php echo smarty_function_get_params(array('prefix'=>'&amp;'),$_smarty_tpl);?>
" onclick="MoveItem(this, <?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['itemKey']->value];?>
, 'down', '<?php echo $_smarty_tpl->tpl_vars['page']->value['where'];?>
'); return false;" title="Вниз"><span class="glyphicon glyphicon-arrow-down text-success"></span></a></td><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['ajaxFields']->value) {?><td class="td-ajax"><button id="item_button_<?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['itemKey']->value];?>
" class="btn btn-sm btn-default" onclick="CreateAjaxForm(<?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['itemKey']->value];?>
); return false;">Изменить...</button> <span style="white-space:nowrap; display:none;"><button class="btn btn-xs btn-primary" onclick="SaveAjaxForm(<?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['itemKey']->value];?>
); return false;">Save</button> <button class="btn btn-xs btn-default" onclick="CancelAjaxForm(<?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['itemKey']->value];?>
); return false;">Cancel</button></span><span style="display:none;">Saving...</span></td><?php }?>
									<td class="td-edit"><a title="Редактировать" class="btn btn-sm btn-warning" href="?edit=<?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['itemKey']->value];?>
<?php echo smarty_function_get_params(array('prefix'=>'&amp;'),$_smarty_tpl);?>
"><span class="glyphicon glyphicon-pencil"></span></a></td>
									<td class="td-delete"><a title="Удалить" class="btn btn-sm btn-danger" href="?delete=<?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['itemKey']->value];?>
<?php echo smarty_function_get_params(array('prefix'=>'&amp;'),$_smarty_tpl);?>
" onclick="return DeleteItem(this, <?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['itemKey']->value];?>
);"><span class="glyphicon glyphicon-trash"></span></a></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<input type="hidden" name="action_group" id="action_group" value="" />
			</form>
		<?php } else { ?>
			<div class="label label-default">- Нет записей -</div>
			<div>&nbsp;</div>
		<?php }?><?php }} ?>

<?php /* Smarty version Smarty-3.1.15, created on 2015-11-16 12:02:52
         compiled from "../admin/tpl/base_items_bottom.tpl" */ ?>
<?php /*%%SmartyHeaderCode:300124232564a0c3c05f6b2-78159082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36ff966a977852e76e0a1088127d461765a28c7f' => 
    array (
      0 => '../admin/tpl/base_items_bottom.tpl',
      1 => 1438123092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '300124232564a0c3c05f6b2-78159082',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'pagination' => 0,
    'hideDeleteAllButton' => 0,
    'showDeleteAllButton' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_564a0c3c091e53_42755422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564a0c3c091e53_42755422')) {function content_564a0c3c091e53_42755422($_smarty_tpl) {?><?php if (!is_callable('smarty_function_pagination')) include '/var/www/ikkf05.ru/html/includes/smarty-3.1.15/plugins/function.pagination.php';
?>	<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
		<div class="bottom-info">
			<div class="total-info">
				<?php if ($_smarty_tpl->tpl_vars['pagination']->value['total']) {?>Записи с <?php echo $_smarty_tpl->tpl_vars['pagination']->value['from'];?>
 по <?php echo $_smarty_tpl->tpl_vars['pagination']->value['to'];?>
 из <?php echo $_smarty_tpl->tpl_vars['pagination']->value['total'];?>
 записей<?php } else { ?>Выбрано 0 записей<?php }?>
				<?php if (isset($_GET['search'])&&$_GET['search']) {?> <span class="filter">(отфильтровано из <?php echo $_smarty_tpl->tpl_vars['pagination']->value['all'];?>
 записей)</span><?php }?>
			</div>
			<div class="pagination-box">
				<?php echo smarty_function_pagination(array('count'=>$_smarty_tpl->tpl_vars['pagination']->value['pages'],'selected'=>$_smarty_tpl->tpl_vars['pagination']->value['portion'],'url'=>$_smarty_tpl->tpl_vars['pagination']->value['url']),$_smarty_tpl);?>

			</div>
			<div class="clearfix"></div>
		</div>

		<div>&nbsp;</div>
	
	
		<?php if (!isset($_smarty_tpl->tpl_vars['hideDeleteAllButton']->value)) {?>
			<p>
				<button class="btn btn-danger" id="delete-selected"><span class="glyphicon glyphicon-trash"></span> Удалить выбранные записи</button>
			</p>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['showDeleteAllButton']->value)) {?>
			<p>
				<button data-toggle="modal" data-target="#myModal" class="btn btn-warning"><span class="glyphicon glyphicon-trash"></span> Удалить все записи</button>
			</p>
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">Удаление всех записей</h4>
						</div>
						<div class="modal-body">
							<strong>ВНИМАНИЕ!!! Все записи будут удалены.</strong>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
							<button type="button" class="btn btn-warning" onclick="document.location = '?truncate=true'; return false;"><span class="glyphicon glyphicon-trash"></span> Удалить все записи</button>
						</div>
					</div>
				</div>
			</div>
		<?php }?>
		
	<?php }?><?php }} ?>

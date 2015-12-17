<?php /* Smarty version Smarty-3.1.15, created on 2013-11-20 12:16:03
         compiled from "..\admin\tpl\base_items_bottom.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24600528c7dd3798830-73850321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0eae4a48d9dccfe12d639cc80086fde4cae918e3' => 
    array (
      0 => '..\\admin\\tpl\\base_items_bottom.tpl',
      1 => 1383937502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24600528c7dd3798830-73850321',
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
  'unifunc' => 'content_528c7dd3831ba0_77899064',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528c7dd3831ba0_77899064')) {function content_528c7dd3831ba0_77899064($_smarty_tpl) {?><?php if (!is_callable('smarty_function_pagination')) include 'D:\\OpenServer\\domains\\ikkf05\\includes\\smarty-3.1.15\\plugins\\function.pagination.php';
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

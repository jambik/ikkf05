<?php /* Smarty version Smarty-3.1.15, created on 2015-11-16 12:02:36
         compiled from "templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9393418555b7a40ae20a06-21201284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90093ad09988b466f409a1871733c5589014713e' => 
    array (
      0 => 'templates/index.tpl',
      1 => 1438123502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9393418555b7a40ae20a06-21201284',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55b7a40aed4131_87540539',
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b7a40aed4131_87540539')) {function content_55b7a40aed4131_87540539($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<?php if ($_smarty_tpl->tpl_vars['page']->value['info']) {?><div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><?php echo $_smarty_tpl->tpl_vars['page']->value['info'];?>
</div><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['page']->value['error']) {?><div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><?php echo $_smarty_tpl->tpl_vars['page']->value['error'];?>
</div><?php }?>
	<?php echo $_smarty_tpl->tpl_vars['page']->value['content'];?>


<?php echo $_smarty_tpl->getSubTemplate ("_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>

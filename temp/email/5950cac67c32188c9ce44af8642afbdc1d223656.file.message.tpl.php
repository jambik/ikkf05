<?php /* Smarty version Smarty-3.1.15, created on 2013-11-20 20:09:23
         compiled from "templates\email\message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22150528cecc30a8802-86125105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5950cac67c32188c9ce44af8642afbdc1d223656' => 
    array (
      0 => 'templates\\email\\message.tpl',
      1 => 1365676263,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22150528cecc30a8802-86125105',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_528cecc31d8771_35064732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528cecc31d8771_35064732')) {function content_528cecc31d8771_35064732($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\OpenServer\\domains\\ikkf05\\includes\\smarty-3.1.15\\plugins\\modifier.date_format.php';
?>Дата сообщения: <?php echo smarty_modifier_date_format(time(),"%d/%m/%Y %H:%M");?>
 
 
<?php if ($_smarty_tpl->tpl_vars['post']->value['name']) {?>Имя: <?php echo $_smarty_tpl->tpl_vars['post']->value['name'];?>
<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['post']->value['phone']) {?>Телефон: <?php echo $_smarty_tpl->tpl_vars['post']->value['phone'];?>
<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['post']->value['email']) {?>Email: <?php echo $_smarty_tpl->tpl_vars['post']->value['email'];?>
<?php }?> 
	
<?php if ($_smarty_tpl->tpl_vars['post']->value['message']) {?>Сообщение: <?php echo $_smarty_tpl->tpl_vars['post']->value['message'];?>
<?php }?> <?php }} ?>

<?php /* Smarty version Smarty-3.1.15, created on 2015-12-09 04:50:43
         compiled from "templates/email/message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61404024556252552eb3ea4-24773086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bafc40fdc9ef5cb7548239c4d413fbe4c6ffe7b9' => 
    array (
      0 => 'templates/email/message.tpl',
      1 => 1438123504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61404024556252552eb3ea4-24773086',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5625255313c888_45132117',
  'variables' => 
  array (
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5625255313c888_45132117')) {function content_5625255313c888_45132117($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/ikkf05.ru/html/includes/smarty-3.1.15/plugins/modifier.date_format.php';
?>Дата сообщения: <?php echo smarty_modifier_date_format(time(),"%d/%m/%Y %H:%M");?>
 
 
<?php if ($_smarty_tpl->tpl_vars['post']->value['name']) {?>Имя: <?php echo $_smarty_tpl->tpl_vars['post']->value['name'];?>
<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['post']->value['phone']) {?>Телефон: <?php echo $_smarty_tpl->tpl_vars['post']->value['phone'];?>
<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['post']->value['email']) {?>Email: <?php echo $_smarty_tpl->tpl_vars['post']->value['email'];?>
<?php }?> 
	
<?php if ($_smarty_tpl->tpl_vars['post']->value['message']) {?>Сообщение: <?php echo $_smarty_tpl->tpl_vars['post']->value['message'];?>
<?php }?> <?php }} ?>

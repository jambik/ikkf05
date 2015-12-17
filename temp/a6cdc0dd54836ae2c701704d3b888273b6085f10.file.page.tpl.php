<?php /* Smarty version Smarty-3.1.15, created on 2013-11-21 10:07:19
         compiled from "templates\page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19415528c839eaee918-44780759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6cdc0dd54836ae2c701704d3b888273b6085f10' => 
    array (
      0 => 'templates\\page.tpl',
      1 => 1385017629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19415528c839eaee918-44780759',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_528c839eed2e32_36741393',
  'variables' => 
  array (
    'page' => 0,
    'allnews' => 0,
    'item' => 0,
    'newsItem' => 0,
    'allarticles' => 0,
    'articleItem' => 0,
    'gallery' => 0,
    'photo' => 0,
    'galleries' => 0,
    'videos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528c839eed2e32_36741393')) {function content_528c839eed2e32_36741393($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\OpenServer\\domains\\ikkf05\\includes\\smarty-3.1.15\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'D:\\OpenServer\\domains\\ikkf05\\includes\\smarty-3.1.15\\plugins\\modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if (isset($_smarty_tpl->tpl_vars['page']->value['info'])&&$_smarty_tpl->tpl_vars['page']->value['info']) {?><div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><?php echo $_smarty_tpl->tpl_vars['page']->value['info'];?>
</div><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['page']->value['error'])&&$_smarty_tpl->tpl_vars['page']->value['error']) {?><div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><?php echo $_smarty_tpl->tpl_vars['page']->value['error'];?>
</div><?php }?>

<?php echo $_smarty_tpl->tpl_vars['page']->value['content'];?>


<?php if ($_smarty_tpl->tpl_vars['page']->value['module']==1) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['allnews']->value)&&$_smarty_tpl->tpl_vars['allnews']->value) {?>
		<ul class="media-list">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allnews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<li class="media">
					<?php if ($_smarty_tpl->tpl_vars['item']->value['image']) {?><a class="pull-left" href="<?php echo $_smarty_tpl->tpl_vars['page']->value['rootpath'];?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['alias'];?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['item']->value['news_id'];?>
"><img class="media-object img-polaroid" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image_path'];?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="" /></a><?php }?>
					<div class="media-body">
						<a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['rootpath'];?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['alias'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['news_id'];?>
" class="media-heading"><?php echo $_smarty_tpl->tpl_vars['item']->value['news_title'];?>
</a> | <span class="muted"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['news_date'],'%d.%m.%Y');?>
</span>
						<p><small><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['news_text']),400);?>
</small></p>
					</div>
				</li>
			<?php } ?>
		</ul>
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['newsItem']->value)&&$_smarty_tpl->tpl_vars['newsItem']->value) {?>
		<p>&larr; <a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['rootpath'];?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['alias'];?>
">все новости</a></p>
		<div><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['newsItem']->value['news_date'],'%d.%m.%Y');?>
</div>
		<h2><?php echo $_smarty_tpl->tpl_vars['newsItem']->value['news_title'];?>
</h2>
		<?php echo $_smarty_tpl->tpl_vars['newsItem']->value['news_text'];?>

	<?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['page']->value['module']==2) {?>
	<?php if ($_smarty_tpl->tpl_vars['allarticles']->value) {?>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allarticles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<div class="well">
				<h3><?php echo $_smarty_tpl->tpl_vars['item']->value['article_title'];?>
</h3>
				<p><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value['article_text']),1000);?>
</p>
				<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['page']->value['rootpath'];?>
articles&amp;id=<?php echo $_smarty_tpl->tpl_vars['item']->value['article_id'];?>
">Читать статью</a>
			</div>
		<?php } ?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['articleItem']->value) {?>
		<p>&larr; <a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['rootpath'];?>
articles">все статьи</a></p>
		<?php echo $_smarty_tpl->tpl_vars['articleItem']->value['article_text'];?>

	<?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['page']->value['module']==3) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['gallery']->value)&&$_smarty_tpl->tpl_vars['gallery']->value) {?>
		<p><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['rootpath'];?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['alias'];?>
">&larr; все галереи</a></p>
		<h2><?php echo $_smarty_tpl->tpl_vars['gallery']->value['gallery_name'];?>
</h2>
		<?php if ($_smarty_tpl->tpl_vars['gallery']->value['image']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['gallery']->value['image_path'];?>
<?php echo $_smarty_tpl->tpl_vars['gallery']->value['image'];?>
" class="fancybox" rel="group1"><img class="img-thumbnail" style="margin: 0 10px 10px 0;" src="<?php echo $_smarty_tpl->tpl_vars['gallery']->value['image_path'];?>
icon/<?php echo $_smarty_tpl->tpl_vars['gallery']->value['image'];?>
" alt="" /></a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['gallery']->value['image_more']) {?>
			<?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gallery']->value['image_more']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value) {
$_smarty_tpl->tpl_vars['photo']->_loop = true;
?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['gallery']->value['image_path'];?>
<?php echo $_smarty_tpl->tpl_vars['photo']->value['image_name'];?>
" class="fancybox" rel="group1" title="<?php echo $_smarty_tpl->tpl_vars['photo']->value['image_caption'];?>
"><img class="img-thumbnail" style="margin: 0 10px 10px 0;" src="<?php echo $_smarty_tpl->tpl_vars['gallery']->value['image_path'];?>
icon/<?php echo $_smarty_tpl->tpl_vars['photo']->value['image_name'];?>
" alt="" /></a>
			<?php } ?>
		<?php } else { ?>
			- нет фото -
		<?php }?>
	<?php } else { ?>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['galleries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<div class="panel panel-default">
				<div class="panel-body" style="background: #f9f9f9;">
					<h4><?php echo $_smarty_tpl->tpl_vars['item']->value['gallery_name'];?>
</h4>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['image']) {?><img class="img-polaroid" style="margin: 0 10px 10px 0; width: 80px; height: 80px;" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image_path'];?>
icon/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" alt="" /><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['image_more']) {?>
						<?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['image_more']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value) {
$_smarty_tpl->tpl_vars['photo']->_loop = true;
?>
							<img class="img-polaroid" style="margin: 0 10px 10px 0; width: 80px; height: 80px;" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['image_path'];?>
icon/<?php echo $_smarty_tpl->tpl_vars['photo']->value['image_name'];?>
" alt="" />
						<?php } ?>
						<?php echo $_smarty_tpl->tpl_vars['item']->value['gallery_text'];?>

						<div>&nbsp;</div>
						<p><a class="btn btn-sm btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['page']->value['rootpath'];?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['alias'];?>
&amp;gallery=<?php echo $_smarty_tpl->tpl_vars['item']->value['gallery_id'];?>
">Смотреть</a></p>
					<?php }?>
				</div>
			</div>
		<?php } ?>
	<?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['page']->value['module']==4) {?>
	<?php if ($_smarty_tpl->tpl_vars['videos']->value) {?>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<div class="panel panel-default">
				<div class="panel-body" style="background: #f9f9f9;">
					<div class="lead"><?php echo $_smarty_tpl->tpl_vars['item']->value['video_name'];?>
</div>
					<p><?php echo $_smarty_tpl->tpl_vars['item']->value['video_code'];?>
</p>
				</div>
			</div>
		<?php } ?>
	<?php } else { ?>
		<span class="label label-default">нет видео</span>
	<?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['page']->value['module']==5) {?>
	<div class="panel panel-default">
		<div class="panel-body" style="background: #f9f9f9;">
			<form action="" method="post" class="form-horizontal" onsubmit="return SubmitMessage();">
				<div class="form-group">
					<label for="name" class="col-lg-2 col-md-2 control-label">Имя</label>
					<div class="col-lg-5 col-md-5">
						<input type="text" class="form-control" name="name" id="name" placeholder="Имя" />
					</div>
				</div>
				<div class="form-group">
					<label for="phone" class="col-lg-2 col-md-2 control-label">Телефон</label>
					<div class="col-lg-5 col-md-5">
						<input type="text" class="form-control" name="phone" id="phone" placeholder="Телефон" />
					</div>
				</div>
				<div class="form-group">
					<label for="email" class="col-lg-2 col-md-2 control-label">Email</label>
					<div class="col-lg-5 col-md-5">
						<input type="text" class="form-control" name="email" id="email" placeholder="Email" />
					</div>
				</div>
				<div class="form-group">
					<label for="message" class="col-lg-2 col-md-2 control-label">Сообщение</label>
					<div class="col-lg-5 col-md-5">
						<textarea class="form-control" cols="40" name="message" id="message" rows="8"></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-offset-2 col-md-offset-2 col-lg-5 col-md-5">
						<button type="submit" class="btn btn-large btn-primary" name="submit">Отправить сообщение</button>
					</div>
				</div>
				<input type="hidden" name="subject" value="Обратная связь" />
			</form>
		</div>
	</div>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>

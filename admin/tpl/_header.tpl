<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="shortcut icon" href="{$page.rootpath}favicon.ico" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		{$page.meta}
		<link href="{$page.tplpath}css/bootstrap.min.css" type="text/css" rel="stylesheet" />
		<link href="{$page.tplpath}css/bootstrap-theme.min.css" type="text/css" rel="stylesheet" />
		<link href="{$page.admpath}css/admin.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript" src="{$page.tplpath}js/bootstrap.min.js"></script>
		<script type="text/javascript" src="{$page.admpath}js/functions.js"></script>
		<title>{$page.title}</title>
	</head>
	
	<body onload="{$page.onload}" style="padding: 50px 15px;">
		<a name="top"></a>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container1">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Навигация</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="{$page.admpath}" class="navbar-brand">Администрирование</a>
				</div>

				<div class="collapse navbar-collapse navbar-ex1-collapse" role="navigation">
					<ul class="nav navbar-nav navbar-right">
						<li style="border-right: 1px solid #eee;"><a href="{$page.rootpath}" target="_blank"><span class="glyphicon glyphicon-new-window"></span> Открыть сайт</a></li>
						<li style="border-right: 1px solid #eee;"><a><span class="glyphicon glyphicon-user"></span> {$smarty.session.admin.admin_name}</a></li>
						<li><a href="login.php?action=logoff"><span class="glyphicon glyphicon-log-out"></span> Выход</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div>&nbsp;</div>
		<div class="container1">
			<div class="row">
				<div class="col-lg-2 col-md-2">
					<div class="list-group">
						<a href="{$page.admpath}pages.php" class="list-group-item"><span class="glyphicon glyphicon-file"></span> Страницы</a>
						<a href="{$page.admpath}news.php" class="list-group-item"><span class="glyphicon glyphicon-file"></span> Новости</a>
						<a href="{$page.admpath}gallery.php" class="list-group-item"><span class="glyphicon glyphicon-camera"></span> Фотогалерея</a>
						<a href="{$page.admpath}video.php" class="list-group-item"><span class="glyphicon glyphicon-film"></span> Видео</a>
						{if $smarty.session.admin.admin_group == 1}
							<span class="list-group-item sep"></span>
							<a href="{$page.admpath}settings.php" class="list-group-item"><span class="glyphicon glyphicon-cog"></span> Настройки</a>
							<a href="{$page.admpath}log.php" class="list-group-item"><span class="glyphicon glyphicon-info-sign"></span> Лог</a>
							<a href="{$page.admpath}admins.php" class="list-group-item"><span class="glyphicon glyphicon-user"></span> Администраторы</a>
						{/if}
					</div>
				</div>
				<div class="col-lg-10 col-md-10">
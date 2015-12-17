<!DOCTYPE html>
<html>
	<head charset="utf-8">
		<meta name="description" content="{$page.description}" />
		<meta name="keywords" content="{$page.keywords}" />
		<link rel="shortcut icon" href="favicon.ico" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		{$page.meta}
		<link href="{$page.tplpath}css/bootstrap.min.css" type="text/css" rel="stylesheet" />
		<link href="{$page.tplpath}css/bootstrap-theme.min.css" type="text/css" rel="stylesheet" />
		<link href="{$page.tplpath}css/global.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript" src="{$page.tplpath}js/bootstrap.min.js"></script>
		<script type="text/javascript" src="{$page.tplpath}js/functions.js"></script>
		<title>{$page.title}</title>
	</head>
	<body onload="{$page.onload}">
		<a name="top"></a>
		<header>
			<div class="container">
				<div class="header">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 header-left"></div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 logo">
							<a href="{$page.rootpath}"><img src="{$page.tplpath}img/logo.png" alt="" /></a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 header-right">
							<img src="{$page.tplpath}img/right.png" alt="" />
						</div>
					</div>
					<div class="brand-name">Федерация Киокушинкай Каратэ Дагестана</div>
				</div>
			</div>
		</header>
		
		<div>&nbsp;</div>
		
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<nav>
						<ul class="nav nav-list">
							{foreach from=$menu item=item}
								<li{if (!isset($smarty.get.alias) && $item.page_id == 1) || $page.id == $item.page_id} class="active"{/if}><a href="{$page.rootpath}{if $item.page_id == 1}{else}{$item.page_alias}{/if}">{$item.page_name}</a></li>
							{/foreach}
						</ul>
					</nav>
					<p>&nbsp;</p>
				</div>
				<div class="col-lg-9 col-md-9">
					
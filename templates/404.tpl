{include file="_header.tpl"}

	{if isset($page.info) && $page.info}<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{$page.info}</div>{/if}
	{if isset($page.error) && $page.error}<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{$page.error}</div>{/if}
	
	<div class="alert alert-danger">
		<p class="lead">Ошибка 404</p>
		<p>Страница не найдена</p>
	</div>

{include file="_footer.tpl"}
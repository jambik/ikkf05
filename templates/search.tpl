{include file="_header.tpl"}

{if $page.info}<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{$page.info}</div>{/if}
{if $page.error}<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{$page.error}</div>{/if}
<h1>Поиск</h1>
<p><strong>Результат поиска</strong> <span class="badge badge-success">{$searchItemsCount}</span>:</p>
{if $searchItems}
	{foreach from=$searchItems item=item}
		<p><i class="icon-file"></i> <a href="{$page.rootpath}{$item.page_alias}">{$item.page_name}</a></p>
	{/foreach}
{/if}

{include file="_footer.tpl"}
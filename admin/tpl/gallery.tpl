{include file="_header.tpl"}

	{if $page.info}<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{$page.info}</div>{/if}
	{if $page.error}<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{$page.error}</div>{/if}

	<p class="text-center lead text-primary">{$itemConfig.itemNames}</p>
	
	{if isset($itemConfig.showImage) && $ajaxFields}
		<div style="font-size: 0.001%;">
			<iframe id="upload_target" name="upload_target" src="" style="width:0;height:0;border:0;"></iframe>
			<input type="hidden" name="image_path" id="image_path" value="{$itemConfig.imagePath}" />
		</div>
	{/if}

	{if isset($smarty.get.action) && $smarty.get.action == "add" || isset($item)}
		{include file="gallery_item_form.tpl"}
	{/if}

	{if !isset($smarty.get.edit) && !isset($smarty.get.action) && !isset($item)}
		<div class="items-box">
			{include file="base_items_top.tpl"}
			{include file="base_items_table.tpl"}
			{include file="base_items_bottom.tpl"}
		</div>
		{include file="base_ajax_fields.tpl"}
	{/if}
	
	{if isset($processingTime)}<p class="text-center"><span class="text-muted small">{$processingTime}</span></p>{/if}

	<input type="hidden" name="class-file" id="class-file" value="{$itemConfig.classFile}" />
	<input type="hidden" name="class-name" id="class-name" value="{$itemConfig.className}" />

{include file="_footer.tpl"}
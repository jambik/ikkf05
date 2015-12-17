		{if $items}
			<form action="{get_params prefix='?'}" method="post" id="form_item">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-items">
						<thead>
							<tr>
								<th class="td-id"><input type="checkbox" id="select_group" /> #</th>
								{if isset($itemConfig.showImage)}<th class="td-img">Фото</th>{/if}
								{foreach from=$itemFields key=key item=value}
									{if $value.show}<th><a href="?sort={$value.field}{if !isset($smarty.get.order)}&amp;order=desc{/if}{get_params prefix='&amp;' exclude='sort,order'}">{$value.name}</a> {if isset($smarty.get.sort) && $smarty.get.sort == $value.field}{if isset($smarty.get.order)}<span class="glyphicon glyphicon-arrow-up"></span>{else}<span class="glyphicon glyphicon-arrow-down"></span>{/if}{/if}</th>{/if}
								{/foreach}
								{if $itemOrder && !isset($smarty.get.sort) && (!isset($smarty.get.search) || !$smarty.get.search)}<th class="td-order"><span class="glyphicon glyphicon-arrow-up text-success"></span> | <span class="glyphicon glyphicon-arrow-down text-success"></span></th>{/if}
								{if $ajaxFields}<th class="td-ajax">Ajax</th>{/if}
								<th class="td-edit"><a title="Редактировать" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-pencil"></span></a></th>
								<th class="td-delete"><a title="Удалить" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span></a></th>
							</tr>
						</thead>
						<tbody>
							{foreach name=f_i from=$items item=value}
								<tr class="{cycle values='tr1,tr2'}">
									<td class="td-id"><input type="checkbox" name="ids[]" value="{$value[$itemKey]}" /> {$value[$itemKey]}</td>
									{if isset($itemConfig.showImage)}<td class="td-img"><div id="image_{$value[$itemKey]}" class="field-image">{if $value.image}<img src="{$itemConfig.imagePath}{$value.image}" alt="" />{/if}</div></td>{/if}
									{foreach name=f_f from=$itemFields item=field}
										{if $field.show}
											<td{if isset($smarty.get.sort) && $smarty.get.sort == $field.field} class="td-sort"{/if}>
											{if $field.type=='text'}<div id="{$field.field}_{$value[$itemKey]}" class="field-text">{$value[$field.field]}</div>{/if}
											{if $field.type=='integer' || $field.type=='float'}<div id="{$field.field}_{$value[$itemKey]}" class="field-number">{$value[$field.field]}</div>{/if}
											{if $field.type=='array'}<div id="{$field.field}_{$value[$itemKey]}" class="field-select">{if $value[$field.field]}{assign var=arrayIndex value=$value[$field.field]}{$arrayValues[$field.field][$arrayIndex]}{/if}</div>{/if}
											{if $field.type=='key'}<div id="{$field.field}_{$value[$itemKey]}" class="field-select">{$value[$field.key_value]}</div>{/if}
											{if $field.type=='textarea'}<div id="{$field.field}_{$value[$itemKey]}" class="field-textarea">{$value[$field.field]}</div>{/if}
											{if $field.type=='html'}<div id="{$field.field}_{$value[$itemKey]}" class="field-html">{$value[$field.field]|strip_tags|strip|escape|truncate:240}</div><div style="display:none">{$value[$field.field]}</div>{/if}
											{if $field.type=='flag'}<div id="{$field.field}_{$value[$itemKey]}" class="field-flag"><a href="#" onclick="ToggleField(this, {$value[$itemKey]}, '{$field.field}'); return false;">{if $value[$field.field]}<span class="glyphicon glyphicon-check text-success"></span>{else}<span class="glyphicon glyphicon-unchecked text-muted"></span>{/if}</a></div>{/if}
											{if $field.type=='date'}<div id="{$field.field}_{$value[$itemKey]}" class="field-date">{if $value[$field.field]}{$value[$field.field]|date_format:'%d.%m.%Y'}{if isset($field.time)} {$value[$field.field]|date_format:'%H:%M:%S'}{/if}{/if}</div>{/if}
											</td>
										{/if}
									{/foreach}
									{if $itemOrder && !isset($smarty.get.sort) && (!isset($smarty.get.search) || !$smarty.get.search)}<td class="td-order"><a href="?up={$value[$itemKey]}{get_params prefix='&amp;'}" onclick="MoveItem(this, {$value[$itemKey]}, 'up', '{$page.where}'); return false;" title="Наверх"><span class="glyphicon glyphicon-arrow-up text-success"></span></a> | <a href="?down={$value[$itemKey]}{get_params prefix='&amp;'}" onclick="MoveItem(this, {$value[$itemKey]}, 'down', '{$page.where}'); return false;" title="Вниз"><span class="glyphicon glyphicon-arrow-down text-success"></span></a></td>{/if}
									{if $ajaxFields}<td class="td-ajax"><button id="item_button_{$value[$itemKey]}" class="btn btn-sm btn-default" onclick="CreateAjaxForm({$value[$itemKey]}); return false;">Изменить...</button> <span style="white-space:nowrap; display:none;"><button class="btn btn-xs btn-primary" onclick="SaveAjaxForm({$value[$itemKey]}); return false;">Save</button> <button class="btn btn-xs btn-default" onclick="CancelAjaxForm({$value[$itemKey]}); return false;">Cancel</button></span><span style="display:none;">Saving...</span></td>{/if}
									<td class="td-edit"><a title="Редактировать" class="btn btn-sm btn-warning" href="?edit={$value[$itemKey]}{get_params prefix='&amp;'}"><span class="glyphicon glyphicon-pencil"></span></a></td>
									<td class="td-delete"><a title="Удалить" class="btn btn-sm btn-danger" href="?delete={$value[$itemKey]}{get_params prefix='&amp;'}" onclick="return DeleteItem(this, {$value[$itemKey]});"><span class="glyphicon glyphicon-trash"></span></a></td>
								</tr>
							{/foreach}
						</tbody>
					</table>
				</div>
				<input type="hidden" name="action_group" id="action_group" value="" />
			</form>
		{else}
			<div class="label label-default">- Нет записей -</div>
			<div>&nbsp;</div>
		{/if}
	{if $ajaxFields}
		
		<input type="hidden" alt="ajax" name="{$itemKey}" id="ajax-item-id" value="" />
		<input type="hidden" name="ajax-fields" id="ajax-fields" value="{$ajaxFields}" />
		
		<div id="ajax-dialog" style="display:none;"><div style="padding-top:38px; text-align:center;"><img src="{$page.admpath}img/loading-bar.gif" alt="" /></div></div>
		
		{if isset($arrayValues)}
			{foreach from=$arrayValues key=key item=value}
				<span style="display:none" id="ajax-select-{$key}">
					<select class="form-control input-sm" name="">
						{foreach from=$value key=key2 item=value2}
						{if $value2 == "NULL"}<option value=""></option>{else}<option value="{$key2}">{$value2}</option>{/if}
						{/foreach}
					</select>
				</span>
			{/foreach}
		{/if}
		
		{if isset($keyValues)}
			{foreach from=$keyValues key=key item=value}
				<span style="display:none" id="ajax-select-{$key}">
					<select class="form-control input-sm" name="">
						{assign var=keyFields value=$keyFieldNames[$key]}
						{if $keyFields.empty}<option value=""></option>{/if}
						{foreach from=$value key=key2 item=value2}
						<option value="{$value2[$keyFields.key]}">{$value2[$keyFields.key_value]}</option>
						{/foreach}
					</select>
				</span>
			{/foreach}
		{/if}
		
	{/if}
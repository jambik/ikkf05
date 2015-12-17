	<div id="itemForm">
		<form action="{$itemConfig.adminScript}{get_params prefix='?' exclude='action,edit'}" class="form-horizontal" method="post" name="form_item" id="form_item"{if $itemImageUrl} enctype="multipart/form-data"{/if}>
			<div class="panel panel-default">
				<div class="panel-heading"><p class="lead" style="margin-bottom: 0;">{$itemConfig.itemName}</p></div>
				<div class="panel-body" style="background: #f9f9f9;">
					{foreach from=$itemFields key=key item=value}
						{if $value.edit !== false}
							{if $value.type=='text'}
								<div class="form-group">
									<label for="{$value.field}" class="col-lg-2 col-md-2 control-label">{$value.name}</label>
									<div class="col-lg-5 col-md-5">
										<input type="text" class="form-control input-text{if !$value.empty} not-empty{/if}" name="{$value.field}" id="{$value.field}" value="{$item[$value.field]|escape}" />
										{if isset($value.hint)}<div class="hint">{$value.hint}</div>{/if}
									</div>
								</div>
							{elseif $value.type=='integer' || $value.type=='float'}
								<div class="form-group">
									<label for="{$value.field}" class="col-lg-2 col-md-2 control-label">{$value.name}</label>
									<div class="col-lg-5 col-md-5">
										<input type="text" class="form-control input-number{if !$value.empty} not-empty{/if}" name="{$value.field}" id="{$value.field}" value="{$item[$value.field]}" />
										{if isset($value.hint)}<div class="hint">{$value.hint}</div>{/if}
									</div>
								</div>
							{elseif $value.type=='array'}
								<div class="form-group">
									<label for="{$value.field}" class="col-lg-2 col-md-2 control-label">{$value.name}</label>
									<div class="col-lg-5 col-md-5">
										{if isset($value.control) && $value.control == "radio"}
											{foreach name=f_arr from=$arrayValues[$value.field] key=key2 item=value2}
												{if $value2 == "NULL"}
													<div class="radio-item">
														<div class="radio-input"><input type="radio" name="{$value.field}" id="{$value.field}_{$key2}" value=""{if !$item[$value.field]} checked="checked"{/if} /></div>
														<label class="radio-name" for="{$value.field}_{$key2}">- нет -</label>
													</div>
												{else}
													<div class="radio-item">
														<div class="radio-input"><input type="radio" name="{$value.field}" id="{$value.field}_{$key2}" value="{$key2}"{if $item[$value.field] == $key2 || (!$item && $smarty.foreach.f_arr.first && !$value.empty)} checked="checked"{/if} /></div>
														<label class="radio-name" for="{$value.field}_{$key2}">{$value2}</label>
													</div>
												{/if}
											{/foreach}
										{else}
											<select class="form-control input-select" name="{$value.field}" id="{$value.field}">
												{foreach from=$arrayValues[$value.field] key=key2 item=value2}
													{if $value2 == "NULL"}<option value=""></option>{else}<option value="{$key2}"{if $key2 == $item[$value.field]} selected="selected"{/if}>{$value2}</option>{/if}
												{/foreach}
											</select>
										{/if}
										{if isset($value.hint)}<div class="hint">{$value.hint}</div>{/if}
									</div>
								</div>
							{elseif $value.type=='key'}
								<div class="form-group">
									<label for="{$value.field}" class="col-lg-2 col-md-2 control-label">{$value.name}</label>
									<div class="col-lg-5 col-md-5">
										{if isset($value.control) && $value.control == "radio"}
											{if $value.empty}
												<div class="radio-item">
													<div class="radio-input"><input type="radio" name="{$value.field}" id="{$value.field}_empty" value=""{if !$item[$value.field]} checked="checked"{/if} /></div>
													<label class="radio-name" for="{$value.field}_empty">- нет -</label>
												</div>
											{/if}
											{foreach name=f_key from=$keyValues[$value.field] key=key2 item=value2}
												<div class="radio-item">
													<div class="radio-input"><input type="radio" name="{$value.field}" id="{$value.field}_{$key2}" value="{$value2[$value.field]}"{if $item[$value.field] == $value2[$value.field] || (!$item && $smarty.foreach.f_key.first && !$value.empty)} checked="checked"{/if} /></div>
													<label class="radio-name" for="{$value.field}_{$key2}">{$value2[$value.key_value]}</label>
												</div>
											{/foreach}
										{else}
											<select class="form-control input-select" name="{$value.field}" id="{$value.field}">
												{if $value.empty}<option value=""></option>{/if}
												{foreach from=$keyValues[$value.field] key=key2 item=value2}
													<option value="{$value2[$value.field]}"{if $value2[$value.field] == $item[$value.field]} selected="selected"{/if}>{$value2[$value.key_value]}</option>
												{/foreach}
											</select>
										{/if}
										{if isset($value.hint)}<div class="hint">{$value.hint}</div>{/if}
									</div>
								</div>
							{elseif $value.type=='textarea'}
								<div class="form-group">
									<label for="{$value.field}" class="col-lg-2 col-md-2 control-label">{$value.name}</label>
									<div class="col-lg-5 col-md-5">
										<textarea class="form-control input-textarea{if !$value.empty} not-empty{/if}" name="{$value.field}" id="{$value.field}" rows="5" cols="50">{$item[$value.field]}</textarea>
										{if isset($value.hint)}<div class="hint">{$value.hint}</div>{/if}
									</div>
								</div>
							{elseif $value.type=='flag'}
								<div class="form-group">
									<label for="{$value.field}" class="col-lg-2 col-md-2 control-label">{$value.name}</label>
									<div class="col-lg-5 col-md-5">
										<div class="checkbox-item">
											<div class="checkbox-input"><input type="checkbox" class="input-flag" name="{$value.field}" id="{$value.field}" {if $item[$value.field] || (!$item[$itemKey] && $value.default)}checked="checked" {/if}/></div>
											<label class="checkbox-name" for="{$value.field}">{$value.name}</label>
										</div>
										{if isset($value.hint)}<div class="hint">{$value.hint}</div>{/if}
									</div>
								</div>
							{elseif $value.type=='html'}
								<div class="form-group">
									<label for="{$value.field}" class="col-lg-2 col-md-2 control-label">{$value.name}</label>
									<div class="col-lg-10 col-md-10">
										<textarea class="input-textarea{if !$value.empty} not-empty{/if}" name="{$value.field}" id="{$value.field}" rows="5" cols="50">{$item[$value.field]}</textarea>
										{if isset($value.hint)}<div class="hint">{$value.hint}</div>{/if}
									</div>
								</div>
							{elseif $value.type=='date'}
								<div class="form-group">
									<label for="{$value.field}" class="col-lg-2 col-md-2 control-label">{$value.name}</label>
									<div class="col-lg-5 col-md-5">
										<input type="text" class="form-control input-date{if !$value.empty} not-empty{/if}" name="{$value.field}" id="{$value.field}" value="{if $item[$value.field]}{$item[$value.field]|date_format:'%d.%m.%Y'}{if isset($value.time)} {$item[$value.field]|date_format:'%H:%M:%S'}{/if}{/if}" />
										{if isset($value.hint)}<div class="hint">{$value.hint}</div>{/if}
									</div>
								</div>
							{elseif $value.type=='set'}
								<div class="form-group">
									<label class="col-lg-2 col-md-2 control-label">{$value.name}</label>
									<div class="col-lg-10 col-md-10">
										<input type="hidden" class="input-set" name="{$value.field}" id="{$value.field}" />
										{if isset($value.control) && $value.control=="checkbox"}
											{foreach from=$setValues[$value.field] item=item2}
												<span class="set-item{if isset($item2.set_on) && $item2.set_on} set-item-on{/if}" title="{$item2[$value.field]}">
													<input type="checkbox" name="checkbox-{$value.field}[]" id="checkbox-{$item2[$value.field]}"{if isset($item2.set_on) && $item2.set_on} checked="checked"{/if} onchange="ToggleSetItem($(this).parent());" />
													<label for="checkbox-{$item2[$value.field]}">{$item2[$value.set_value]}</label>
												</span>
											{/foreach}
										{else}
											{foreach from=$setValues[$value.field] item=item2}
												<span class="set-item{if isset($item2.set_on) && $item2.set_on} set-item-on{/if}" title="{$item2[$value.field]}" onclick="ToggleSetItem(this);">{$item2[$value.set_value]}</span>
											{/foreach}
										{/if}
										{if isset($value.hint)}<div class="hint">{$value.hint}</div>{/if}
									</div>
								</div>
							{/if}
						{/if}
					{/foreach}
					{if $itemImageUrl}
						<div class="form-group">
							<label for="image" class="col-lg-2 col-md-2 control-label">Фото</label>
							<div class="col-lg-5 col-md-5">
								<input type="file" class="form-control input-file" name="image" id="image" />
							</div>
						</div>
					{/if}
					{if isset($item.image) && $item.image}
						<div class="form-group">
							<div class="col-lg-offset-2 col-md-offset-2 col-lg-10 col-md-10">
								<div class="thumbnail pull-left">
									<a href="{$item.image_path}{$item.image}" style="display: block;" class="text-center" target="_blank"><img src="{$item.image_path}icon/{$item.image}" alt="" /></a>
									<div class="caption text-center"><a class="btn btn-xs btn-danger" href="#" onclick="DeleteImage(this, '{$item.image}'); return false;"><span class="glyphicon glyphicon-trash"></span> удалить фото</a></div>
								</div>
							</div>
						</div>
					{/if}
					{* More images *}
					<div class="page-header"></div>
					<div class="form-group">
						<label class="col-lg-2 col-md-2 control-label">Другие фото</label>
						{if $item.image_more}
							<div class="col-lg-10 col-md-10">
								{foreach from=$item.image_more item=im}
									<div class="thumbnail pull-left text-center image-more">
										<img src="{$item.image_path}icon/{$im.image_name}" alt="" />
										<div class="image-caption" onclick="EditImageMoreCaption(this, '{$im.image_name}');" title="{$im.image_caption|escape}">{$im.image_caption}</div>
										<div class="text-center"><a class="btn btn-xs btn-danger" href="#" onclick="DeleteImageMore(this, '{$im.image_name}'); return false;"><span class="glyphicon glyphicon-trash"></span> удалить фото</a></div>
									</div>
								{/foreach}
							</div>
						{else}
							<div class="col-lg-3 col-md-3">
								<input type="file" class="form-control input-file" name="image_more[]" />
							</div>
							<div class="col-lg-3 col-md-3">
								<input type="text" class="form-control" name="image_caption[]" placeholder="Описание фото" />
							</div>
						{/if}
					</div>
					<div class="form-group">
						<div class="col-lg-offset-2 col-md-offset-2 col-lg-3 col-md-3">
							<input type="file" class="form-control input-file" name="image_more[]" />
						</div>
						<div class="col-lg-3 col-md-3">
							<input type="text" class="form-control" name="image_caption[]" placeholder="Описание фото" />
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-offset-2 col-md-offset-2 col-lg-3 col-md-3">
							<input type="file" class="form-control input-file" name="image_more[]" />
						</div>
						<div class="col-lg-3 col-md-3">
							<input type="text" class="form-control" name="image_caption[]" placeholder="Описание фото" />
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-offset-2 col-md-offset-2 col-lg-3 col-md-3">
							<input type="file" class="form-control input-file" name="image_more[]" />
						</div>
						<div class="col-lg-3 col-md-3">
							<input type="text" class="form-control" name="image_caption[]" placeholder="Описание фото" />
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-offset-2 col-md-offset-2 col-lg-5 col-md-5">
							<button class="btn btn-sm btn-success" onclick="for(i=0;i<5;i++) { $(this).parent().parent().before( $(this).parent().parent().prev().clone() ); $(this).parent().parent().prev().find('input').val(''); } return false;"><span class="glyphicon glyphicon-plus"></span> Добавить еще фото</button>
						</div>
					</div>
					{* /More images/ *}
				</div>
				<div class="panel-footer text-center">
					<button type="submit" class="btn btn-primary" name="submit"><span class="glyphicon glyphicon-check"></span> Сохранить</button>
					<button class="btn btn-default" onclick="document.location = '{$itemConfig.adminScript}{get_params prefix='?' exclude='action,edit'}'; return false;"><span class="glyphicon glyphicon-remove"></span> Отмена</button>
				</div>
			</div>
			<input type="hidden" name="{$itemKey}" id="{$itemKey}" value="{$item[$itemKey]}" />
		</form>
		<p>&nbsp;</p>
	</div>
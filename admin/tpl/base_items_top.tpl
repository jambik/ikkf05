	<div class="panel panel-default" style="background: #f9f9f9;">
		<div class="row panel-body" style="padding: 7px;">
			<div class="col-lg-6 col-md-5 col-sm-5 col-xs-4">
				{if !isset($hideAddButton)}<a class="btn btn-primary btn-sm" href="?action=add{get_params prefix='&amp;' exclude='action,edit'}"><span class="glyphicon glyphicon-plus"></span> Добавить</a>{/if}
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-4">
				<form action="" method="get" id="form-search" role="form">
					{capture name=search}{get_params prefix='&amp;' exclude='search,portion'}{/capture}
					<div class="input-group">
						<input type="text" class="form-control input-sm" name="search" id="search" placeholder="Поиск" value="{if isset($smarty.get.search)}{$smarty.get.search}{/if}" />
						<span class="input-group-btn">
							<button class="btn btn-sm btn-primary" onclick="document.location = $('#div-search-params').text() ? '?'+$('#form-search').serialize() + $('#div-search-params').text() : '?'+$('#form-search').serialize(); return false;"><span class="glyphicon glyphicon-search"></span></button>
						</span>
					</div>
					<div style="display:none" id="div-search-params">{$smarty.capture.search}</div>
				</form>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-4 text-right">
				<form action="" method="get" id="form-quantity" class="form-inline" role="form">
					<div class="form-group">Показывать</div>
					{capture name=quantity}{get_params prefix='&amp;' exclude='quantity,portion'}{/capture}
					<div class="form-group">
						<select name="quantity" id="quantity" class="form-control input-sm" onchange="document.location = $('#div-quantity-params').text() ? '?'+$('#form-quantity').serialize() + $('#div-quantity-params').text() : '?'+$('#form-quantity').serialize();">
							<option value="25"{if $pagination.quantity == 25} selected="selected"{/if}>25</option>
							<option value="50"{if $pagination.quantity == 50} selected="selected"{/if}>50</option>
							<option value="100"{if $pagination.quantity == 100} selected="selected"{/if}>100</option>
							<option value="500"{if $pagination.quantity == 500} selected="selected"{/if}>500</option>
							<option value="1000"{if $pagination.quantity == 1000} selected="selected"{/if}>1000</option>
						</select>
					</div>
					<div class="form-group">строк</div>
					<div style="display:none" id="div-quantity-params">{$smarty.capture.quantity}</div>
				</form>
			</div>
		</div>
	</div>
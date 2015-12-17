	{if $items}
		<div class="bottom-info">
			<div class="total-info">
				{if $pagination.total}Записи с {$pagination.from} по {$pagination.to} из {$pagination.total} записей{else}Выбрано 0 записей{/if}
				{if isset($smarty.get.search) && $smarty.get.search} <span class="filter">(отфильтровано из {$pagination.all} записей)</span>{/if}
			</div>
			<div class="pagination-box">
				{pagination count=$pagination.pages selected=$pagination.portion url=$pagination.url}
			</div>
			<div class="clearfix"></div>
		</div>

		<div>&nbsp;</div>
	
	
		{if !isset($hideDeleteAllButton)}
			<p>
				<button class="btn btn-danger" id="delete-selected"><span class="glyphicon glyphicon-trash"></span> Удалить выбранные записи</button>
			</p>
		{/if}

		{if isset($showDeleteAllButton)}
			<p>
				<button data-toggle="modal" data-target="#myModal" class="btn btn-warning"><span class="glyphicon glyphicon-trash"></span> Удалить все записи</button>
			</p>
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">Удаление всех записей</h4>
						</div>
						<div class="modal-body">
							<strong>ВНИМАНИЕ!!! Все записи будут удалены.</strong>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
							<button type="button" class="btn btn-warning" onclick="document.location = '?truncate=true'; return false;"><span class="glyphicon glyphicon-trash"></span> Удалить все записи</button>
						</div>
					</div>
				</div>
			</div>
		{/if}
		
	{/if}
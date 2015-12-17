{include file="_header.tpl"}

	{if $page.info}<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{$page.info}</div>{/if}
	{if $page.error}<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{$page.error}</div>{/if}

	<form action="" method="post" class="form-horizontal" name="form_settings" id="form_settings">
		<div class="panel panel-default">
			<div class="panel-heading"><p class="lead" style="margin-bottom: 0;"><span class="glyphicon glyphicon-cog"></span> Настройки</p></div>
			<div class="panel-body" style="background: #f9f9f9;">
				<div class="form-group">
					<label for="email" class="col-lg-2 col-md-2 control-label">Email</label>
					<div class="col-lg-5 col-md-5">
						<input type="text" class="form-control" name="email" id="email" value="{$settings.email}" />
						<div class="hint">Email для обратной связи</div>
					</div>
				</div>
			</div>
			<div class="panel-footer text-center">
				<button type="submit" class="btn btn-primary" name="submit_settings" value="1"><span class="glyphicon glyphicon-check"></span> Сохранить</button>
			</div>
		</div>
	</form>

{include file="_footer.tpl"}
{include file="_header.tpl"}

{if isset($page.info) && $page.info}<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{$page.info}</div>{/if}
{if isset($page.error) && $page.error}<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>{$page.error}</div>{/if}

{$page.content}

{if $page.module == 1}
	{if isset($allnews) && $allnews}
		<ul class="media-list">
			{foreach from=$allnews key=key item=item}
				<li class="media">
					{if $item.image}<a class="pull-left" href="{$page.rootpath}{$page.alias}&amp;id={$item.news_id}"><img class="media-object img-polaroid" src="{$item.image_path}{$item.image}" alt="" /></a>{/if}
					<div class="media-body">
						<a href="{$page.rootpath}{$page.alias}&id={$item.news_id}" class="media-heading">{$item.news_title}</a> | <span class="muted">{$item.news_date|date_format:'%d.%m.%Y'}</span>
						<p><small>{$item.news_text|strip_tags|truncate:400}</small></p>
					</div>
				</li>
			{/foreach}
		</ul>
	{/if}
	{if isset($newsItem) && $newsItem}
		<p>&larr; <a href="{$page.rootpath}{$page.alias}">все новости</a></p>
		<div>{$newsItem.news_date|date_format:'%d.%m.%Y'}</div>
		<h2>{$newsItem.news_title}</h2>
		{$newsItem.news_text}
	{/if}
{/if}

{if $page.module == 2}
	{if $allarticles}
		{foreach from=$allarticles key=key item=item}
			<div class="well">
				<h3>{$item.article_title}</h3>
				<p>{$item.article_text|strip_tags|truncate:1000}</p>
				<a class="btn btn-primary" href="{$page.rootpath}articles&amp;id={$item.article_id}">Читать статью</a>
			</div>
		{/foreach}
	{/if}
	{if $articleItem}
		<p>&larr; <a href="{$page.rootpath}articles">все статьи</a></p>
		{$articleItem.article_text}
	{/if}
{/if}

{if $page.module == 3}
	{if isset($gallery) && $gallery}
		<p><a href="{$page.rootpath}{$page.alias}">&larr; все галереи</a></p>
		<h2>{$gallery.gallery_name}</h2>
		{if $gallery.image}<a href="{$gallery.image_path}{$gallery.image}" class="fancybox" rel="group1"><img class="img-thumbnail" style="margin: 0 10px 10px 0;" src="{$gallery.image_path}icon/{$gallery.image}" alt="" /></a>{/if}
		{if $gallery.image_more}
			{foreach from=$gallery.image_more item=photo}
				<a href="{$gallery.image_path}{$photo.image_name}" class="fancybox" rel="group1" title="{$photo.image_caption}"><img class="img-thumbnail" style="margin: 0 10px 10px 0;" src="{$gallery.image_path}icon/{$photo.image_name}" alt="" /></a>
			{/foreach}
		{else}
			- нет фото -
		{/if}
	{else}
		{foreach from=$galleries item=item}
			<div class="panel panel-default">
				<div class="panel-body" style="background: #f9f9f9;">
					<h4>{$item.gallery_name}</h4>
					{if $item.image}<img class="img-polaroid" style="margin: 0 10px 10px 0; width: 80px; height: 80px;" src="{$item.image_path}icon/{$item.image}" alt="" />{/if}
					{if $item.image_more}
						{foreach from=$item.image_more item=photo}
							<img class="img-polaroid" style="margin: 0 10px 10px 0; width: 80px; height: 80px;" src="{$item.image_path}icon/{$photo.image_name}" alt="" />
						{/foreach}
						{$item.gallery_text}
						<div>&nbsp;</div>
						<p><a class="btn btn-sm btn-primary" href="{$page.rootpath}{$page.alias}&amp;gallery={$item.gallery_id}">Смотреть</a></p>
					{/if}
				</div>
			</div>
		{/foreach}
	{/if}
{/if}

{if $page.module == 4}
	{if $videos}
		{foreach from=$videos item=item}
			<div class="panel panel-default">
				<div class="panel-body" style="background: #f9f9f9;">
					<div class="lead">{$item.video_name}</div>
					<p>{$item.video_code}</p>
				</div>
			</div>
		{/foreach}
	{else}
		<span class="label label-default">нет видео</span>
	{/if}
{/if}

{if $page.module == 5}
	<div class="panel panel-default">
		<div class="panel-body" style="background: #f9f9f9;">
			<form action="" method="post" class="form-horizontal" onsubmit="return SubmitMessage();">
				<div class="form-group">
					<label for="name" class="col-lg-2 col-md-2 control-label">Имя</label>
					<div class="col-lg-5 col-md-5">
						<input type="text" class="form-control" name="name" id="name" placeholder="Имя" />
					</div>
				</div>
				<div class="form-group">
					<label for="phone" class="col-lg-2 col-md-2 control-label">Телефон</label>
					<div class="col-lg-5 col-md-5">
						<input type="text" class="form-control" name="phone" id="phone" placeholder="Телефон" />
					</div>
				</div>
				<div class="form-group">
					<label for="email" class="col-lg-2 col-md-2 control-label">Email</label>
					<div class="col-lg-5 col-md-5">
						<input type="text" class="form-control" name="email" id="email" placeholder="Email" />
					</div>
				</div>
				<div class="form-group">
					<label for="message" class="col-lg-2 col-md-2 control-label">Сообщение</label>
					<div class="col-lg-5 col-md-5">
						<textarea class="form-control" cols="40" name="message" id="message" placeholder="Сообщение" rows="8"></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-offset-2 col-md-offset-2 col-lg-5 col-md-5">
						<button type="submit" class="btn btn-large btn-primary" name="submit">Отправить сообщение</button>
					</div>
				</div>
				<input type="hidden" name="subject" value="Обратная связь" />
			</form>
		</div>
	</div>
{/if}

{include file="_footer.tpl"}
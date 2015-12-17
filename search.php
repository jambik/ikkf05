<?php

	$rootPath = "./";

	// Includes
	require_once($rootPath."common.php");
	require_once($rootPath.INC_DIR."class.pages.php");

	// Smarty
	$smarty = new Smarty();
	$smarty->template_dir = SMARTY_TEMPLATES_DIR;
	$smarty->compile_dir  = SMARTY_COMPILE_DIR;
	
	// Page Values
	$page["description"] = "";
	$page["keywords"]    = "";
	$page["title"]       = $config["site_name"];
	$page["onload"]      = "";
	$page["rootpath"]    = $config["folder"];
	$page["tplpath"]     = $page["rootpath"].SMARTY_TEMPLATES_DIR;
	$page["meta"]        = "\n\t".'<script src="'.$page["rootpath"].INC_JQUERY.'jquery.min.js" type="text/javascript"></script>';

	$search = isset($_GET["search"]) ? trim($_GET["search"]) : false;
	
	$pages = new Pages();
	
	if($search)
	{
		$searchItems = $pages->GetItems(false, false, "", "", $search, "", true);
		$smarty->assign("searchItems", $searchItems);
		$smarty->assign("searchItemsCount", $searchItems ? count($searchItems) : 0);
	}
	else
	{
		$page["error"] = "Строка поиска не задана";
	}

	// Assign Template Values
	$smarty->assign("page", $page);
	$smarty->assign("config", $config);
	$smarty->assign("menu", $pages->GetItems(false, false, "", "", "", " AND {$pages->DbAlias}.page_show = 1 "));

	// Display Template
	$smarty->display("search.tpl");

	$db->sql_close();

?>
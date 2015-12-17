<?php
	
	$rootPath = "../";
	
	require_once($rootPath."common.php");
	require_once($rootPath.INC_DIR."class.admin.php");
	require_once($rootPath.INC_DIR."class.video.php");
	
	// Admin
	$admin = new Admin();
	if(!$admin->Admin) return "";
	
	// Smarty
	$smarty = new Smarty();
	$smarty->template_dir = $rootPath.ADMIN_TPL_DIR;
	$smarty->compile_dir  = $rootPath.SMARTY_COMPILE_DIR."admin/";
	
	// Items Class
	$items = new Video();
	
	// Assign Page properties
	$page["rootpath"] = $config["folder"];
	$page["admpath"]  = $page["rootpath"].ADMIN_DIR;
	$page["incpath"]  = $page["rootpath"].INC_DIR;
	$page["tplpath"]  = $page["rootpath"].SMARTY_TEMPLATES_DIR;
	$page["title"]    = "Администрирование - ".$items->ItemConfig["itemNames"];
	$page["meta"]     = "";
	$page["onload"]   = "";
	
	if(!isset($_GET["sort"]))
	{
		//$_GET["sort"] = "news_date";
		$_GET["order"] = "desc";
	}
	
	### Include controller file ###
	include_once("base.php");
	
	$page["info"]  = $items->Info;
	$page["error"] = $items->Error;
	
	$smarty->assign("page", $page);
	$smarty->assign("config", $config);
	
	$smarty->display($items->ItemConfig["adminTpl"]);
	
	$db->sql_close();
	
?>
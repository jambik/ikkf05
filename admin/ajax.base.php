<?php

	$rootPath = "../";
	
	require_once($rootPath."common.php");
	
	//phpinfo();
	$_SERVER["PHP_SELF"] = strpos($_SERVER["HTTP_REFERER"], ADMIN_DIR) ? substr($_SERVER["HTTP_REFERER"], strpos($_SERVER["HTTP_REFERER"], ADMIN_DIR)-1) : $_SERVER["HTTP_REFERER"];
	//echo $_SERVER["PHP_SELF"];
	//return;
	
	// If class file is not set
	if(!isset($_GET["classfile"]))
	{
		$response["status"] = "failed";
		$response["error"]  = "Не указан class файл";
		echo json_encode($response);
		return "";
	}
	
	// If class file not exist
	if(!file_exists($rootPath.INC_DIR.trim($_GET["classfile"])))
	{
		$response["status"] = "failed";
		$response["error"]  = "Не найден class файл (".$_GET['classfile'].")";
		echo json_encode($response);
		return "";
	}
	
	// Item class file
	$classFile = $rootPath.INC_DIR.trim($_GET["classfile"]);
	$className = trim($_GET["classname"]);
	
	// Include class file
	include_once($classFile);
	
	// create object
	eval("\$items = new ".$className."();");
	
	## Save item
	if(isset($_GET["saveitem"]))
	{
		if($items->ValidateItem($invalidItem) && $id = $items->SaveItem())
		{
			$response["status"] = "success";
			$response["id"] = $id;
			echo json_encode($response);
			return "";
		}
		else
		{
			$response["status"] = "failed";
			$response["error"] = strip_tags($items->Error);
			echo json_encode($response);
			return "";
		}
	}
	
	## Change item flag field
	if(isset($_GET["togglefield"]) && !empty($_GET["togglefield"]) && isset($_GET["id"]) && is_numeric($_GET["id"]))
	{
		if(($value = $items->ToggleField(intval($_GET["id"]), $_GET["togglefield"])) !== false)
		{
			$response["status"] = "success";
			$response["value"] = $value;
			echo json_encode($response);
			return "";
		}
		else
		{
			$response["status"] = "failed";
			$response["error"] = strip_tags($items->Error);
			echo json_encode($response);
			return "";
		}
	}
	
	## Move item
	if(isset($_GET["moveitem"]) && is_numeric($_GET["moveitem"]) && isset($_GET["direction"]) && !empty($_GET["direction"]) && isset($_GET["where"]))
	{
		if(($value = $items->ChangeItemOrder(intval($_GET["moveitem"]), $_GET["direction"], $_GET["where"])) !== false)
		{
			$response["status"] = "success";
			echo json_encode($response);
			return "";
		}
		else
		{
			$response["status"] = "failed";
			$response["error"] = strip_tags($items->Error);
			echo json_encode($response);
			return "";
		}
	}
	
	## Delete item
	if(isset($_GET["deleteitem"]) && is_numeric($_GET["deleteitem"]))
	{
		if($items->DeleteItem(intval($_GET["deleteitem"])) !== false)
		{
			$response["status"] = "success";
			echo json_encode($response);
			return "";
		}
		else
		{
			$response["status"] = "failed";
			$response["error"] = strip_tags($items->Error);
			echo json_encode($response);
			return "";
		}
	}
	
	## Delete item image
	if(isset($_GET["deleteimage"]) && !empty($_GET["deleteimage"]))
	{
		if($items->DeleteItemImage(trim($_GET["deleteimage"])) !== false)
		{
			$response["status"] = "success";
			echo json_encode($response);
			return "";
		}
		else
		{
			$response["status"] = "failed";
			$response["error"] = strip_tags($items->Error);
			echo json_encode($response);
			return "";
		}
	}
	
	## Save image more caption
	if(isset($_GET["saveimagemorecaption"]) && !empty($_GET["saveimagemorecaption"]) && isset($_GET["imagecaption"]))
	{
		if($items->SaveImageMoreCaption(trim($_GET["saveimagemorecaption"]), $_GET["imagecaption"]) !== false)
		{
			$response["status"] = "success";
			echo json_encode($response);
			return "";
		}
		else
		{
			$response["status"] = "failed";
			$response["error"] = strip_tags($items->Error);
			echo json_encode($response);
			return "";
		}
	}
	
	## Delete item image more
	if(isset($_GET["deleteimagemore"]) && !empty($_GET["deleteimagemore"]))
	{
		if($items->DeleteItemImageMore(trim($_GET["deleteimagemore"])) !== false)
		{
			$response["status"] = "success";
			echo json_encode($response);
			return "";
		}
		else
		{
			$response["status"] = "failed";
			$response["error"] = strip_tags($items->Error);
			echo json_encode($response);
			return "";
		}
	}
	
	## Upload item image
	if(isset($_GET["uploadimage"]) && is_numeric($_GET["uploadimage"]))
	{
		$fileName = $items->SaveItemImage(intval($_GET["uploadimage"]));
		
		if($fileName)
		{
			echo '<script type="text/javascript">
							window.top.FileSubmitted('.intval($_GET["uploadimage"]).', true, "'.$fileName.'");
						</script>';
			return "";
		}
		elseif($fileName === false)
		{
			echo '<script type="text/javascript">
							window.top.FileSubmitted('.intval($_GET["uploadimage"]).', false);
						</script>';
			return "";
		}
		else
		{
			return "";
		}
	}
	
	$db->sql_close();

?>
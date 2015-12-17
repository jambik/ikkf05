<?php

include_once("class.base.php");
define("NEWS_IMAGE_PATH", $rootPath.FILES_DIR."news/");

class News extends Base
{
	public $ItemImagePrefix    = "news-";
	public $ItemImagePath      = NEWS_IMAGE_PATH;
	public $ItemImageUrl       = "";
	public $ItemImageMaxWidth  = 64;
	public $ItemImageMaxHeight = 64;
	
	public $DbFields = array();
	public $DbKey    = "news_id";
	public $DbTable  = TABLE_NEWS;
	public $DbAlias  = "n";
	
	public function SetItemDbFields()
	{
		$dbField['name'] = 'Заголовок';
		$dbField['field'] = 'news_title';
		$dbField['type'] = 'text';
		$dbField['empty'] = false;
		$dbField['default'] = '';
		$dbField['edit'] = true;
		$dbField['show'] = true;
		$dbField['ajax'] = true;
		$this->DbFields[] = $dbField; $dbField = false;
		
		$dbField['name'] = 'Текст';
		$dbField['field'] = 'news_text';
		$dbField['type'] = 'html';
		$dbField['empty'] = true;
		$dbField['default'] = '';
		$dbField['edit'] = true;
		$dbField['show'] = true;
		$dbField['ajax'] = true;
		$this->DbFields[] = $dbField; $dbField = false;
		
		$dbField['name'] = 'Дата';
		$dbField['field'] = 'news_date';
		$dbField['type'] = 'date';
		$dbField['empty'] = true;
		$dbField['default'] = 0;
		$dbField['edit'] = true;
		$dbField['show'] = true;
		$dbField['ajax'] = true;
		$this->DbFields[] = $dbField; $dbField = false;
		
		return true;
	}
	
	public function SetAdminConfig()
	{
		$this->ItemConfig['itemName']    = "Новость"; // Item name
		$this->ItemConfig['itemNames']   = "Новости"; // Item plural name
		$this->ItemConfig["adminScript"] = substr($_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'], "/")+1); // Running file
		$this->ItemConfig["classFile"]   = "class.news.php"; // Current class file
		$this->ItemConfig["className"]   = get_class($this); // Current class name
		$this->ItemConfig["showImage"]   = true; // Show image
		$this->ItemConfig["imagePath"]   = $this->ItemImageUrl; // Image path
		$this->ItemConfig["adminTpl"]    = "base.tpl"; // Template file
	}

	public function SaveItemImage($id, $imagePath="")
	{
		$imagePath = $imagePath ? $imagePath : $this->ItemImagePath;
		
		if(isset($_FILES["image"]) && $_FILES["image"]["name"])
		{
			if($fileName = $this->UploadItemImage($_FILES["image"], $this->ItemImagePrefix.$id, $imagePath."original/"))
			{
				$this->ResizeImage($imagePath."original/".$fileName, $imagePath.$fileName, $this->ItemImageMaxWidth, $this->ItemImageMaxHeight, true, true, true);
				return $fileName;
			}
			else
			{
				return false;
			}
		}
		
		return "";
	}
	
	public function DeleteItemImage($fileName, $imagePath="")
	{
		$imagePath = $imagePath ? $imagePath : $this->ItemImagePath;
		
		if(@unlink($imagePath.$fileName) && @unlink($imagePath."original/".$fileName))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
}

?>
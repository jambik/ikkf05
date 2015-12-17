<?php

include_once("class.base.php");

class Video extends Base
{
	
	public $DbFields = array();
	public $DbKey    = "video_id";
	public $DbTable  = TABLE_VIDEO;
	public $DbAlias  = "vi";
	public $DbOrder  = "video_order";
	
	public function SetItemDbFields()
	{
		$dbField['name'] = 'Название';
		$dbField['field'] = 'video_name';
		$dbField['type'] = 'text';
		$dbField['empty'] = false;
		$dbField['default'] = '';
		$dbField['edit'] = true;
		$dbField['show'] = true;
		$dbField['ajax'] = true;
		$this->DbFields[] = $dbField; $dbField = false;
		
		$dbField['name'] = 'Код видео';
		$dbField['field'] = 'video_code';
		$dbField['type'] = 'textarea';
		$dbField['hint'] = 'Код видео из YouTube';
		$dbField['empty'] = true;
		$dbField['default'] = '';
		$dbField['edit'] = true;
		$dbField['show'] = true;
		$dbField['ajax'] = true;
		$this->DbFields[] = $dbField; $dbField = false;
		
		return true;
	}
	
	public function SetAdminConfig()
	{
		$this->ItemConfig['itemName']    = "Видео"; // Item name
		$this->ItemConfig['itemNames']   = "Видео"; // Item plural name
		$this->ItemConfig["adminScript"] = substr($_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'], "/")+1); // Running file
		$this->ItemConfig["classFile"]   = "class.video.php"; // Current class file
		$this->ItemConfig["className"]   = get_class($this); // Current class name
		$this->ItemConfig["adminTpl"]    = "base.tpl"; // Template file
	}
	
}

?>
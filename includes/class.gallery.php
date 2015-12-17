<?php

include_once("class.base.php");
define("GALLERY_IMAGE_PATH", $rootPath.FILES_DIR."gallery/");

class Gallery extends Base
{
	
	public $ItemImagePrefix    = "gallery-";
	public $ItemImagePath      = GALLERY_IMAGE_PATH;
	public $ItemImageUrl       = "";
	public $ItemImageMaxWidth  = 1280;
	public $ItemImageMaxHeight = 800;
	
	public $ItemImageMoreTable        = "gallery_images";
	public $ItemImageMoreNameField    = "image_name";
	public $ItemImageMoreCaptionField = "image_caption";
	public $ItemImageMoreNameInput    = "image_more";
	public $ItemImageMoreCaptionInput = "image_caption";
	
	public $DbFields = array();
	public $DbKey    = "gallery_id";
	public $DbOrder  = "gallery_order";
	public $DbTable  = TABLE_GALLERY;
	public $DbAlias  = "ga";
	
	public function SetItemDbFields()
	{
		$dbField['name'] = 'Название';
		$dbField['field'] = 'gallery_name';
		$dbField['type'] = 'text';
		$dbField['edit'] = true;
		$dbField['empty'] = false;
		$dbField['default'] = '';
		$dbField['show'] = true;
		$dbField['ajax'] = true;
		$this->DbFields[] = $dbField; $dbField = false;
		
		$dbField['name'] = 'Описание';
		$dbField['field'] = 'gallery_text';
		$dbField['type'] = 'textarea';
		$dbField['hint'] = 'Описание продукта';
		$dbField['edit'] = true;
		$dbField['empty'] = true;
		$dbField['default'] = '';
		$dbField['show'] = true;
		$dbField['ajax'] = true;
		$this->DbFields[] = $dbField; $dbField = false;
		
		return true;
	}
	
	public function SetAdminConfig()
	{
		$this->ItemConfig['itemName']    = "Фотогалерея"; // Item name
		$this->ItemConfig['itemNames']   = "Фотогалереи"; // Item plural name
		$this->ItemConfig["adminScript"] = substr($_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'], "/")+1); // Running file
		$this->ItemConfig["classFile"]   = "class.gallery.php"; // Current class file
		$this->ItemConfig["className"]   = get_class($this); // Current class name
		$this->ItemConfig["showImage"]   = true; // Show image
		$this->ItemConfig["imagePath"]   = $this->ItemImageUrl."icon/"; // Image path
		$this->ItemConfig["adminTpl"]    = "gallery.tpl"; // Template file
	}
	
	public function SaveItem()
	{
		$id = parent::SaveItem();
		$this->SaveItemImageMore($id);
		return $id;
	}
	
	public function SaveItemImage($id, $imagePath="")
	{
		$imagePath = $imagePath ? $imagePath : $this->ItemImagePath;
		
		if(isset($_FILES["image"]) && $_FILES["image"]["name"])
		{
			if($fileName = $this->UploadItemImage($_FILES["image"], $this->ItemImagePrefix.$id, $imagePath."original/"))
			{
				$this->ResizeImage($imagePath."original/".$fileName, $imagePath.$fileName, $this->ItemImageMaxWidth, $this->ItemImageMaxHeight);
				$this->ResizeImage($imagePath."original/".$fileName, $imagePath."icon/".$fileName, 100, 100, true, true, true);
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
		
		if(@unlink($imagePath.$fileName) && @unlink($imagePath."original/".$fileName) && @unlink($imagePath."icon/".$fileName))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function SaveItemImageMore($id, $imagePath="")
	{
		global $db;
		
		$imagePath = $imagePath ? $imagePath : $this->ItemImagePath;
		
		if(isset($_FILES[$this->ItemImageMoreNameInput]))
		{
			$fileArray = false;
			foreach($_FILES[$this->ItemImageMoreNameInput] as $key=>$value)
			{
				foreach($value as $key2=>$value2)
				{
					$fileArray[$key2][$key] = $value2;
				}
			}
			
			$sqlValues = "";
			
			foreach($fileArray as $key=>$value)
			{
				if($value["name"] && $imageMoreName = $this->GenerateImageMoreName($value["name"], $id))
				{
					if($fileName = $this->UploadItemImage($value, $imageMoreName, $imagePath."original/"))
					{
						$this->ResizeImage($imagePath."original/".$fileName, $imagePath.$fileName, $this->ItemImageMaxWidth, $this->ItemImageMaxHeight);
						$this->ResizeImage($imagePath.$fileName, $imagePath."icon/".$fileName, 100, 100, true, true, true);
						$fileExt = strtolower(substr($value["name"], strrpos($value["name"], ".") + 1));
						$sqlValues .= "({$id}, '{$imageMoreName}.{$fileExt}', '{$_POST[$this->ItemImageMoreCaptionInput][$key]}'),";
					}
					else
					{
						//return false;
					}
				}
			}
			
			if($sqlValues)
			{
				$sqlValues = substr($sqlValues, 0, strlen($sqlValues)-1);

				$sql = "INSERT INTO {$this->ItemImageMoreTable}
									({$this->DbKey}, {$this->ItemImageMoreNameField}, {$this->ItemImageMoreCaptionField})
								VALUES
									$sqlValues";
				if(!$result = $db->sql_query($sql))
				{
					$this->SetError("Ошибка при сохранении дополнительных фото", __FILE__, __LINE__, $db->sql_error());
					//return false;
				}
				else
				{
					return true;
				}
			}
			
		}
		
		return "";
	}
	
	public function GenerateImageMoreName($fileOriginalName, $id)
	{
		global $db;
		
		$validFileExtensions = array("jpg","gif","png","jpeg");

		$fileName = $this->ItemImagePrefix.$id; // new file name
		$fileExt  = strtolower(substr($fileOriginalName, strrpos($fileOriginalName, ".") + 1)); // File extension
			
		if(in_array($fileExt, $validFileExtensions)) // If file extension is correct
		{
			$fileExist = false;
			$altNumber = 0;

			do {
				$altNumber++;
				$altNumberStr = $altNumber < 10 ? "00".$altNumber : ( $altNumber < 100 ? "0".$altNumber : $altNumber );
				$fileExist = false;
				for($i=0; $i<count($validFileExtensions); $i++)
				{
					if(file_exists($this->ItemImagePath.$fileName."-{$altNumberStr}.".$validFileExtensions[$i]))
					{
						$fileExist = true;
					}
				}
			} while($fileExist);

			$fileName .= "-".$altNumberStr; // file name
			
			return $fileName;
		}
		else
		{
			$this->SetError("Расширение файла фотографии не поддерживается", __FILE__, __LINE__, $db->sql_error());
			return false;
		}

		return false;
	}
	
	public function GetImagesMore($id, $max = false)
	{
		global $db;
		
		$sql = "SELECT *
						FROM {$this->ItemImageMoreTable}
						WHERE {$this->DbKey} = {$id}
						ORDER BY image_order, image_name".($max ? " LIMIT ".$max : "");
		if(!$result = $db->sql_query($sql))
		{
			$this->SetError("Ошибка при выборе дополнительных фото", __FILE__, __LINE__, $db->sql_error());
			return false;
		}
		elseif($db->sql_numrows($result))
		{
			$images = $db->sql_fetchrowset($result);
			$db->sql_freeresult($result);
			return $images;
		}
		
		return "";
	}
	
	function DeleteItemImageMore($fileName, $imagePath="")
	{
		$imagePath = $imagePath ? $imagePath : $this->ItemImagePath;
		
		@unlink($imagePath.$fileName);
		@unlink($imagePath."original/".$fileName);
		@unlink($imagePath."icon/".$fileName);
		
		global $db;
		
		$sql = "DELETE FROM {$this->ItemImageMoreTable}
						WHERE {$this->ItemImageMoreNameField} = '{$fileName}'";
		if(!$result = $db->sql_query($sql))
		{
			$this->SetError("Ошибка при удалении дополнительного фото из базы данных", __FILE__, __LINE__, $db->sql_error());
			return false;
		}
		else
		{
			return true;
		}
		
		return "";
	}
	
	function DeleteItemImageMoreAll($id, $imagePath="")
	{
		$imagePath = $imagePath ? $imagePath : $this->ItemImagePath;
		
		foreach(glob($imagePath.$this->ItemImagePrefix.$id."-*.*") as $f) @unlink($f);
		foreach(glob($imagePath."original/".$this->ItemImagePrefix.$id."-*.*") as $f) @unlink($f);
		foreach(glob($imagePath."icon/".$this->ItemImagePrefix.$id."-*.*") as $f) @unlink($f);
		
		global $db;
		
		$sql = "DELETE FROM {$this->ItemImageMoreTable}
						WHERE {$this->DbKey} = ".$id;
		if(!$result = $db->sql_query($sql))
		{
			$this->SetError("Ошибка при удалении дополнительных фото из базы данных", __FILE__, __LINE__, $db->sql_error());
			return false;
		}
		else
		{
			return true;
		}
		
		return "";
	}
	
	public function SaveImageMoreCaption($fileName, $imageCaption)
	{
		global $db;
		
		$sql = "UPDATE {$this->ItemImageMoreTable}
						SET {$this->ItemImageMoreCaptionField} = '{$imageCaption}'
						WHERE {$this->ItemImageMoreNameField} = '{$fileName}'";
		if(!$result = $db->sql_query($sql))
		{
			$this->SetError("Ошибка при обновлении описания дополнительного фото", __FILE__, __LINE__, $db->sql_error());
			return false;
		}
		else
		{
			return true;
		}
		
		return "";
	}
	
	public function GetItem($id)
	{
		$this->DeleteItemImageMoreAll(10);
		$item = parent::GetItem($id);
		$item["image_more"] = $this->GetImagesMore($id);
		return $item;
	}
	
	public function DeleteItem($id)
	{
		$this->DeleteItemImageMoreAll($id);
		return parent::DeleteItem($id);
	}
	
}

?>
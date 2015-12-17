/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	
	config.toolbar_Basic =
	[
		{ name: 'basic',      items : [ 'Source','Maximize','Bold','Italic','NumberedList','BulletedList','Link','Unlink' ] }
	];
	
	config.toolbar_Full =
	[
		{ name: 'document',    items : [ 'Source' ] },
		{ name: 'clipboard',   items : [ 'PasteText','PasteFromWord','-','Undo','Redo' ] },
		{ name: 'paragraph',   items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock' ] },
		{ name: 'links',       items : [ 'Link','Unlink' ] },
		{ name: 'insert',      items : [ 'Image','Flash','Table','HorizontalRule' ] },
		{ name: 'forms',       items : [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
		'/',
		{ name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
		{ name: 'styles',      items : [ 'Styles','Format','Font','FontSize' ] },
		{ name: 'colors',      items : [ 'TextColor','BGColor' ] },
		{ name: 'tools',       items : [ 'Maximize','ShowBlocks' ] }
	];
	
	// File Browser
	config.filebrowserBrowseUrl      = CKEDITOR.basePath + 'ckfinder/ckfinder.html';
	config.filebrowserImageBrowseUrl = CKEDITOR.basePath + 'ckfinder/ckfinder.html?Type=Images';
	config.filebrowserFlashBrowseUrl = CKEDITOR.basePath + 'ckfinder/ckfinder.html?Type=Flash';
	config.filebrowserUploadUrl      = CKEDITOR.basePath + 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
	config.filebrowserImageUploadUrl = CKEDITOR.basePath + 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
	config.filebrowserFlashUploadUrl = CKEDITOR.basePath + 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};
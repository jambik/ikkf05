$(document).ready(function(){
	
	if($(".fancybox").length){ $(".fancybox").fancybox({openEffect: 'fade', closeEffect: 'fade', closeBtn: false, helpers : {title : { type : 'inside' }, buttons : {} }}); }
	
});

function SubmitMessage()
{
	if($.trim($('#name').val()) == "")
	{
		alert('Представьтесь пожалуйста');
		$('#name').focus();
		return false;
	}
	
	if($.trim($('#email').val()) == "" && $.trim($('#phone').val()) == "")
	{
		alert('Введите Телефон или Email для обратной связи');
		$('#phone').focus();
		return false;
	}
	
	return true;
}
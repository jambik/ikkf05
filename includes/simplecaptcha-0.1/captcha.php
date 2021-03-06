<?php

session_start();
require_once('class.simplecaptcha.php');

//Background Image
$config['BackgroundImage'] = "white.png";

//Background Color- HEX
$config['BackgroundColor'] = "FFFC00";

//image height - same as background image
$config['Height']=30;

//image width - same as background image
$config['Width']=100;

//text font size
$config['Font_Size']=23;

//text font style
$config['Font']=dirname(__FILE__)."/arial.ttf";

//text angle to the left
$config['TextMinimumAngle']=0;

//text angle to the right
$config['TextMaximumAngle']=20;

//Text Color - HEX
$config['TextColor']='000000';

//Number of Captcha Code Character
$config['TextLength']=5;

//Background Image Transparency
$config['Transparency']=50;

//Create a new instance of the captcha
$captcha = new SimpleCaptcha($config);

//Save the code as a session dependent string
if(isset($_GET["captchaname"]))
{
	$_SESSION[$_GET["captchaname"]] = $captcha->Code;
}
else
{
	$_SESSION['s_captchaCode'] = $captcha->Code;
}

?>
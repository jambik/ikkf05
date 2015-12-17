<?php
/**
 * Smarty plugin
 *
 * @package Smarty
 * @subpackage PluginsFunction
 */

/**
 * Smarty {get_params} function plugin
 *
 * Type:     function<br>
 * Name:     pagination<br>
 * Purpose:  generate pagination links
 * Input:
 *         - count    = number of pages
 *         - selected = selected page (current page)
 *         - url      = URL that can be used before page number
 *
 * @author   jambik <jambik at gmail dot com>
 * @param array                    $params   parameters
 * @param Smarty_Internal_Template $template template object
 * @return string
 */
function smarty_function_pagination($params, $template)
{
	$count    = (is_numeric($params['count'])) ? intval($params['count']) : 1;
	$selected = (is_numeric($params['selected'])) ? intval($params['selected']) : 1;
	$url = isset($params['url']) ? trim($params['url']) : "";
	$html = "";

	if($count > 1)
	{
		$html .= '<ul class="pagination">';
		for($i=1; $i<=$count; $i++)
		{
			if($selected == $i)
			{
				$html .= '<li class="active"><span>'.$i.'</span></li>';
			}
			else
			{
				$html .= '<li><a href="'.$url.$i.'">'.$i.'</a></li>';
			}
		}
		$html .= '</ul>';
	}

	return $html;
}
<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 * Copyright (C) 2005 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 *
 * PHP version 5
 * @copyright  Marcel Hadorn 2012
 * @author     Marcel Hadorn <me@marcelhadorn.com>
 * @package    ContentText
 * @license    LGPL 
 * @filesource ModuleRicktext by Felix Pfeiffer
 */


/**
 * Class ContentText 
 *
 * @copyright  Marcel Hadorn 2012
 * @author     Marcel Hadorn <me@marcelhadorn.com>
 */
 
class ContentText extends Module
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_text';

	/**
	 * Redirect to the selected page
	 * @return string
	 */
	public function generate()
	{
		return parent::generate();
	}

	/**
	 * Generate module
	 */
	protected function compile()
	{
		$this->import('String');

		$text = $this->String->encodeEmail($this->text);
		$text = str_ireplace(array('<u>', '</u>'), array('<span style="text-decoration:underline;">', '</span>'), $text);
		$text = str_ireplace(array('</p>', '<br /><br />'), array("</p>\n", "<br /><br />\n"), $text);
		
		$this->Template->text = $text;
		
	}
}

?>
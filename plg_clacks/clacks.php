<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  System.clacks
 *
 * @copyright   Copyright (C) 2015 Vince Wooll. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

class PlgSystemClacks extends JPlugin
	{
	public function onAfterInitialise()
		{
		header("X-Clacks-Overhead: GNU Terry Pratchett");
		}
	}

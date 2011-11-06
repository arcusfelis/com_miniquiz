<?php
/**
 * @version		$Id: banners.php 21593 2011-06-21 02:45:51Z dextercowley $
 * @package		Joomla.Site
 * @subpackage	com_banners
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.modellist');
jimport('joomla.application.component.helper');

JTable::addIncludePath(JPATH_COMPONENT_ADMINISTRATOR . '/tables');

/**
 * Banners model for the Joomla Banners component.
 *
 * @package		Joomla.Site
 * @subpackage	com_banners
 * @since		1.6
 */
class MiniquizModelQuestions extends JModelList
{
	protected function getListQuery()
	{
		// Create a new query object.		
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);
		// Select some fields
		$query->select('*');
		$query->where('state=1');
		$query->order('ordering');
		// From the hello table
		$query->from('#__miniquiz_question');
		return $query;
	}
}

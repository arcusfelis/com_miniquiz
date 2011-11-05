<?php
/**
 * @version     1.0.0
 * @package     com_miniquiz
 * @copyright   Copyright (C) 2011. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Created by com_combuilder - http://www.notwebdesign.com
 */

// No direct access
defined('_JEXEC') or die;


jimport('joomla.application.component.model');
jimport('joomla.application.component.helper');

JTable::addIncludePath(JPATH_ROOT . '/administrator/components/com_miniquiz/tables');

/**
 * Model
 */
class MiniquizModelMiniquiz extends JModel
{
	protected function getListQuery()
	{
		// Create a new query object.		
		$db = JFactory::getDBO();
		$query = $db->setQuery(true);
		// From the hello table
		$query->from('#__miniquiz_question');
		$db->query();
		return $query;
	}

	function checkAnswer($id, $var)
	{
		// sanitize data
		$id = (int) $id;
		if ((!is_string($var)) || (strlen($var) != 1))
			return false;
		
		$var = strtoupper($var);

		if (!in_array($var, array('A', 'B', 'C', 'D')))
			return false;



		$f = "variant${var}_count";

		$db = JFactory::getDBO();
		$query	= $db->getQuery(true);

		$query->clear();

		// update counters
		$query->update('#__miniquiz_question');
		$query->set("`$f` = (`$f` + 1)");
		$query->where('id=' . $id);

		$db->setQuery((string) $query);
		$db->query();
		$query->clear();


		// Is the answer right?
		$query->select('id');
		$query->from('#__miniquiz_question');
		$query->where('id=' . $id);
		$query->where('value="' . $var . '"');

		$db->setQuery((string) $query);
		
		echo "Step 3";
		$db->query();

		$test = $db->loadResult();

		return (bool) $test;
	}

}


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

jimport('joomla.application.component.controller');

class MiniquizController extends JController
{
	function getItems()
	{
		global $items;
		// dirty
		$model = $this->getModel('Questions','MiniquizModel');
		$items = $model->getItems();
	}

	private function checkCookie()
	{
		return true;
		return !isset($_COOKIE['miniquiz_flag']);
	}

	private function checkAnswer()
	{
	    if ((!isset($_POST['id'])) || (!isset($_POST['var'])))
	    	return "";

	    $id = $_POST['id'];
	    $var = $_POST['var'];
		$model = $this->getModel('Miniquiz','MiniquizModel');

		setcookie('miniquiz_flag', 'true', time() + (72 * 3600));

		return ($model->checkAnswer($id, $var))
			? "Вы дали правильный ответ!"
			: "Ваш ответ неправильный!";
	}

	function display($c=false)
	{
		global $answer_summary;
		if ($this->checkCookie())
		{
			$answer_summary = $this->checkAnswer();
		}
		$this->getItems();
		return parent::display();
	}
}

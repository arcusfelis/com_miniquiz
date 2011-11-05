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

jimport('joomla.application.component.controllerform');

/**
 * Question controller class.
 */
class MiniquizControllerQuestion extends JControllerForm
{

    function __construct() {
        $this->view_list = 'questions';
        parent::__construct();
    }

}
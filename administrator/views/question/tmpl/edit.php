<?php
/**
 * @version     1.0.0
 * @package     com_miniquiz
 * @copyright   Copyright (C) 2011. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Created by com_combuilder - http://www.notwebdesign.com
 */

// no direct access
defined('_JEXEC') or die;

JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
?>
<script type="text/javascript">
	Joomla.submitbutton = function(task)
	{
		if (task == 'question.cancel' || document.formvalidator.isValid(document.id('question-form'))) {
			Joomla.submitform(task, document.getElementById('question-form'));
		}
		else {
			alert('<?php echo $this->escape(JText::_('JGLOBAL_VALIDATION_FORM_FAILED'));?>');
		}
	}
</script>

<form action="<?php echo JRoute::_('index.php?option=com_miniquiz&layout=edit&id='.(int) $this->item->id); ?>" method="post" name="adminForm" id="question-form" class="form-validate">
	<div class="width-60 fltlft">
		<fieldset class="adminform">
			<legend><?php echo JText::_('COM_MINIQUIZ_LEGEND_QUESTION'); ?></legend>
			<ul class="adminformlist">

            
			<li><?php echo $this->form->getLabel('id'); ?>
			<?php echo $this->form->getInput('id'); ?></li>

            
			<li><?php echo $this->form->getLabel('name'); ?>
			<?php echo $this->form->getInput('name'); ?></li>

            
			<li><?php echo $this->form->getLabel('varianta'); ?>
			<?php echo $this->form->getInput('varianta'); ?></li>

            
			<li><?php echo $this->form->getLabel('variantb'); ?>
			<?php echo $this->form->getInput('variantb'); ?></li>

            
			<li><?php echo $this->form->getLabel('variantc'); ?>
			<?php echo $this->form->getInput('variantc'); ?></li>

            
			<li><?php echo $this->form->getLabel('variantd'); ?>
			<?php echo $this->form->getInput('variantd'); ?></li>

            
			<li><?php echo $this->form->getLabel('value'); ?>
			<?php echo $this->form->getInput('value'); ?></li>
			
			<li><?php echo $this->form->getLabel('imageurl'); ?>
			<?php echo $this->form->getInput('imageurl'); ?></li>
			
            

            <li><?php echo $this->form->getLabel('state'); ?>
                    <?php echo $this->form->getInput('state'); ?></li><li><?php echo $this->form->getLabel('checked_out'); ?>
                    <?php echo $this->form->getInput('checked_out'); ?></li><li><?php echo $this->form->getLabel('checked_out_time'); ?>
                    <?php echo $this->form->getInput('checked_out_time'); ?></li>

            </ul>
		</fieldset>
	</div>


	<input type="hidden" name="task" value="" />
	<?php echo JHtml::_('form.token'); ?>
	<div class="clr"></div>
</form>
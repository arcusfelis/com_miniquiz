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

global $answer_summary;
?> 

<style>
<!--
table#result_table
{
	width: 100%;
	border: 1px solid;
	text-align: center;
}
-->
</style>


<center><h1><?php echo $answer_summary; ?></h1></center>

<table id="result_table">
<thead>
<tr>
	<td>Вопрос</td>
	<td>Ответ A</td>
	<td>Ответ B</td>
	<td>Ответ C</td>
	<td>Ответ D</td>
	<td>Правильный ответ</td>
</tr>
</thead>
<tbody>
<?php

// OOP of the brain, sorry)
global $items; 
// TODO: escape me
// TODO: remove global variables

if (is_array($items) && count($items)):
	foreach ($items as $item):
	echo '<tr>
		<td>'. ($item->name) .'</td>
		<td>'. ($item->varianta) .' ('.($item->varianta_count).' чел.)</td>
		<td>'. ($item->variantb) .' ('.($item->variantb_count).' чел.)</td>
		<td>'. ($item->variantc) .' ('.($item->variantc_count).' чел.)</td>
		<td>'. ($item->variantd) .' ('.($item->variantd_count).' чел.)</td>
		<td>' .

		(($item->imageurl != "") 
			? '<a class="modal" href="' . ($item->imageurl) . '">На картинке</a>'
			: '')
		. '</td>
	</tr>';
	endforeach;
endif;

?>
</tbody>
</table>

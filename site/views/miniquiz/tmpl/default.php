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

<center><h2><?php echo $answer_summary; ?></h2></center>

<h1>Результаты викторины</h1>
Правильный ответ вы найдете ниже в таблице результатов голосования, кликнув мышкой на вопрос.

<table id="result_table">
<thead>
<tr>
	<th>Вопрос </th>
	<th>Ответ A</th>
	<th>Ответ B</th>
	<th>Ответ C</th>
	<th>Ответ D</th>
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
		<td>' .
		(($item->imageurl != "") 
			? '<a class="modal" title="' . $item->imagedesc .'" 
				href="' . ($item->imageurl) . '">'. ($item->name) .'</a>'
			: $item->name)
		. '</td>
		<td>'. ($item->varianta) .'&nbsp;&ndash;&nbsp;'.($item->varianta_count).' </td>
		<td>'. ($item->variantb) .'&nbsp;&ndash;&nbsp;'.($item->variantb_count).' </td>
		<td>'. ($item->variantc) .'&nbsp;&ndash;&nbsp;'.($item->variantc_count).' </td>
		<td>'. ($item->variantd) .'&nbsp;&ndash;&nbsp;'.($item->variantd_count).' </td>
	</tr>';
	endforeach;
endif;

?>
</tbody>
</table>

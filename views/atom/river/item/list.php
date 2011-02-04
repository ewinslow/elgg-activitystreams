<?php
/**
 * Atom River list view
 *
 * @uses $vars['items']
 */

$items = array();

extract($vars, EXTR_IF_EXISTS);

foreach ($items as $item) {
	echo elgg_view('river/item', array('item' => $item));
}

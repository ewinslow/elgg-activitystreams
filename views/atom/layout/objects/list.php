<?php
/**
 * View a list of items
 *
 * @package Elgg
 *
 * @uses $vars['items']       Array of ElggEntity or ElggAnnotation objects
 * @uses $vars['offset']      Index of the first list item in complete list
 * @uses $vars['limit']       Number of items per page
 * @uses $vars['count']       Number of items in the complete list
 * @uses $vars['base_url']    Base URL of list (optional)
 * @uses $vars['pagination']  Show pagination? (default: true)
 * @uses $vars['position']    Position of the pagination: before, after, or both
 * @uses $vars['full_view']   Show the full view of the items (default: false)
 */

$items = $vars['items'];
$offset = $vars['offset'];
$limit = $vars['limit'];
$count = $vars['count'];
$base_url = $vars['base_url'];
$pagination = elgg_get_array_value('pagination', $vars, true);
$full_view = elgg_get_array_value('full_view', $vars, false);
$offset_key = elgg_get_array_value('offset_key', $vars, 'offset');


if (is_array($items) && count($items) > 0) {
	foreach ($items as $item) {
		echo "<entry>";
		echo elgg_view_list_item($item, $full_view, $vars);
		echo "</entry>";
	}
}

if ($pagination && $count) {
	echo elgg_view('navigation/pagination', array(
		'baseurl' => $base_url,
		'offset' => $offset,
		'count' => $count,
		'limit' => $limit,
		'offset_key' => $offset_key,
	));
}

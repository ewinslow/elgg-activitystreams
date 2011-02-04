<?php
/**
 * Elgg Atom output pageshell
 *
 * @package Elgg
 * @subpackage Core
 *
 */

header("Content-Type: application/atom+xml");

// allow caching as required by stupid MS products for https feeds.
header('Pragma: public', TRUE);

// Set title
if (empty($vars['title'])) {
	$title = $vars['config']->sitename;
} else if (empty($vars['config']->sitename)) {
	$title = $vars['title'];
} else {
	$title = $vars['config']->sitename . ": " . $vars['title'];
}

// Remove Atom from URL
$url = str_replace('?view=atom','', full_url());
$url = str_replace('&view=atom','', $url);

echo "<?xml version='1.0' encoding='UTF-8' standalone='no' ?>\n";
?>
<feed xmlns="http://www.w3.org/2005/Atom" xmlns:thr="http://purl.org/syndication/thread/1.0" xmlns:georss="http://www.georss.org/georss" xmlns:activity="http://activitystrea.ms/spec/1.0/" xmlns:media="http://purl.org/syndication/atommedia" xml:lang="en-US" <?php echo elgg_view('extensions/xmlns'); ?>>
	<title><?php echo elgg_view('output/text', array('value' => $title)); ?></title>
	<link rel="alternate" type="text/html" href="<?php echo htmlentities($url); ?>" />	
	<?php echo elgg_view('extensions/channel'); ?>
	<?php echo $vars['body']; ?>
</feed>
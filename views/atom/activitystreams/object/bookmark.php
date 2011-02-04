<?php

$bookmark = $vars['entity'];

?>

<id>
	<?php echo "{$vars['url']}$bookmark->guid"; ?>
</id>
<title>
	<?php echo elgg_view('output/text', array('value' => $bookmark->title)); ?>
</title>
<published>
	<?php echo date(DATE_ATOM, $bookmark->time_created); ?>
</published>
<updated>
	<?php echo date(DATE_ATOM, $bookmark->time_updated); ?>
</updated>
<link rel="preview" type="image/png" href="<?php echo $bookmark->getIcon('small'); ?>" />
<link rel="alternate" type="text/html" href="<?php echo $bookmark->getURL(); ?>" />
<activity:object-type>bookmark</activity:object-type>
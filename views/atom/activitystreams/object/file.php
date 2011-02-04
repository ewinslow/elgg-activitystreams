<?php

$file = $vars['entity'];

?>

<id>
	<?php echo "{$vars['url']}$file->guid"; ?>
</id>
<title>
	<?php echo elgg_view('output/text', array('value' => $file->title)); ?>
</title>
<content type="html">
	<?php echo elgg_view('output/text', array('value' => $file->description)); ?>
</content>
<published>
	<?php echo date(DATE_ATOM, $file->time_created); ?>
</published>
<updated>
	<?php echo date(DATE_ATOM, $file->time_updated); ?>
</updated>
<activity:object-type>article</activity:object-type>
<link rel="preview" type="image/png" href="<?php echo $file->getIcon('small'); ?>" />
<link rel="alternate" type="text/html" href="<?php echo $file->getURL(); ?>" />
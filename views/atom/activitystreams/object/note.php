<?php

$note = $vars['entity'];

?>

<id>
	<?php echo "{$vars['url']}$note->guid"; ?>
</id>
<content><![CDATA[<?php 
	echo elgg_view('output/longtext', array('value' => $note->description)); 
?>]]></content>
<published>
	<?php echo date(DATE_ATOM, $note->time_created); ?>
</published>
<updated>
	<?php echo date(DATE_ATOM, $note->time_updated); ?>
</updated>
<link rel="preview" type="image/png" href="<?php echo $note->getIcon('small'); ?>" />
<link rel="alternate" type="text/html" href="<?php echo $note->getURL(); ?>" />
<activity:object-type>note</activity:object-type>
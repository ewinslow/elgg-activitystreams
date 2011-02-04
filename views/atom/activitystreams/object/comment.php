<?php

$comment = $vars['annotation'];

?>

<id>
	<?php echo "{$vars['url']}annotation/$comment->id"; ?>
</id>
<content><![CDATA[<?php 
	echo elgg_view('output/longtext', array('value' => $comment->value)); 
?>]]></content>
<thr:in-reply-to>
	<?php echo elgg_view_entity(get_entity($comment->entity_guid)); ?>
</thr:in-reply-to>
<published>
	<?php echo date(DATE_ATOM, $comment->time_created); ?>
</published>
<link rel="preview" type="image/png" href="<?php echo $comment->getIcon('small'); ?>" />
<link rel="alternate" type="text/html" href="<?php echo $comment->getURL(); ?>" />
<activity:object-type>comment</activity:object-type>
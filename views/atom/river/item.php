<?php
$item = $vars['item'];

$subject = $item->getSubjectEntity();
$object = $item->getObjectEntity();
$target = get_entity($object->container_guid);

$body = elgg_view($item->getView(), array('item' => $item), false, false, 'default');
?>

<id><?php echo ActivityStreams::getRiverAtomID($item); ?></id>

<published>
	<?php date(DATE_ATOM, $item->getPostedTime()); ?>
</published>

<title>
	<?php echo elgg_strip_tags($body); ?>
</title>

<content type="html">
	<?php echo elgg_view('output/text', array('value' => $body)); ?>
</content>

<author>
	<?php echo elgg_view_entity($subject); ?>
</author>

<activity:verb>
	<?php echo elgg_echo("activitystreams:verb:$item->action_type"); ?>
</activity:verb>

<activity:object>
	<?php echo elgg_view_entity($object); ?>
</activity:object>
<?php 

$object = $vars['entity'];

?>

<id><?php echo "{$vars['url']}$object->guid"; ?></id>
<link rel="preview" type="image/png" href="<?php echo $object->getIcon('small'); ?>" />
<link rel="alternate" type="text/html" href="<?php echo $object->getURL(); ?>" />
<published><?php echo date(DATE_ATOM, $object->time_created); ?></published>
<updated><?php echo date(DATE_ATOM, $object->time_updated); ?></updated>
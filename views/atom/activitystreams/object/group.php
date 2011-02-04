<?php

$group = $vars['entity'];

?>

<id><?php echo "{$vars['url']}$group->guid"; ?></id>
<title><?php echo elgg_view('output/text', array('value' => $group->name)); ?></title>
<summary><?php echo elgg_view('output/text', array('value' => $group->briefdescription)); ?></summary>
<link rel="preview" type="image/png" href="<?php echo $group->getIcon('small'); ?>" />
<link rel="alternate" type="text/html" href="<?php echo $group->getURL(); ?>" />
<?php

$person = $vars['entity'];

?>

<id><?php echo ActivityStreams::get_entity_atom_id($person); ?></id>
<name><?php echo elgg_view('output/text', array('value' => $person->name)); ?></name>
<summary><?php echo elgg_view('output/text', array('value' => $person->briefdescription)); ?></summary>
<link href="<?php echo $person->getIcon('small'); ?>" rel="preview" type="image/png" media:height="40" media:width="40" />
<link href="<?php echo $user->getIcon('small'); ?>" rel="avatar" type="image/png" media:height="40" media:width="40" />
<link href="<?php echo $person->getURL(); ?>" rel="alternate" type="text/html" />
<activity:object-type>person</activity:object-type>
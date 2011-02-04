<?php
/**
 * Profile info for user
 */

$user = elgg_get_page_owner_entity();

?>

<author>

<?php echo elgg_view_entity($user); ?>

</author>

<?php echo elgg_list_river(array('subject_guid' => $user->guid)); ?>
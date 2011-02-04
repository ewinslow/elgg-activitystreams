<?php

	$user = elgg_get_page_owner_entity();

?>
<link href="<?php echo $user->getIcon('topbar'); ?>" rel="avatar" type="image/png" media:height="16" media:width="16" />
<link href="<?php echo $user->getIcon('tiny'); ?>" rel="avatar" type="image/png" media:height="25" media:width="25" />
<link href="<?php echo $user->getIcon('medium'); ?>" rel="avatar" type="image/png" media:height="100" media:width="100" />
<link href="<?php echo $user->getIcon('large'); ?>" rel="avatar" type="image/png" media:height="200" media:width="200" />
<link href="<?php echo $user->getIcon('master'); ?>" rel="avatar" type="image/png" media:height="550" media:width="550" />

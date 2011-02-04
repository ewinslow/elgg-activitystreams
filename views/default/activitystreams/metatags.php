<?php

global $autofeed;


if (!$autofeed) {
	return;
}

$url = full_url();
if (substr_count($url,'?')) {
		$url .= "&view=atom";
} else {
		$url .= "?view=atom";
}
		
?>

<link rel="alternate" type="application/atom+xml" title="Atom/Ostatus/ActivityStreams" href="<?php echo $url; ?>" />

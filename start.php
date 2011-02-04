<?php

function activitystreams_init() {
	elgg_extend_view('metatags', 'activitystreams/metatags');
	
	elgg_register_viewtype_fallback('atom');
}

elgg_register_event_handler('init', 'system', 'activitystreams_init');
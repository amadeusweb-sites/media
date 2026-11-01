<?php
domain::add('media', __DIR__, false, new domain([
		'folder' => 'media/',
		'heading' => 'CM Flx',
		'local' => 'http://localhost/media/%subfol%/%site%/',
		'live' => 'https://%site%.cmflx.com/',
		'local-base' => 'http://localhost/media/%subfol%/',
		'live-base' => 'https://%subfol%.cmflx.com/',
	],
	['%folder%www', '%folder%india'], [
		'courses',
	]
));

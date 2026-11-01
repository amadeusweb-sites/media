<?php
domain::add('media/india', __DIR__, false, new domain([
		'folder' => 'media/india/',
		'heading' => 'CM Flx India',
		'local' => 'http://localhost/media/india/%subfol%/%site%/',
		'live' => 'https://%site%.in.cmflx.com/',
		'local-base' => 'http://localhost/media/india/%subfol%/',
		'live-base' => 'https://%subfol%.in.cmflx.com/',
	],
	['%folder%', '%folder%studios/vertical-studio'], [
		'studios',
	],
));

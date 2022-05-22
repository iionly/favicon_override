<?php

require_once(dirname(__FILE__) . '/lib/hooks.php');

return [
	'bootstrap' => \FaviconOverrideBootstrap::class,
	'views' => [
		'default' => [
			'favicon_override/' => __DIR__ . '/graphics',
		],
	],
];

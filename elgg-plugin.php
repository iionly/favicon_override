<?php

return [
	'plugin' => [
		'name' => 'Favicon Override',
		'version' => '4.0.0',
	],
	'hooks' => [
		'head' => [
			'page' => [
				'\FaviconOverrideHooks::favicon_override_head' => [],
			],
		],
	],
	'views' => [
		'default' => [
			'favicon_override/' => __DIR__ . '/graphics',
		],
	],
];

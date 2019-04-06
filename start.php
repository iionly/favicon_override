<?php

elgg_register_event_handler('init', 'system', 'favicon_override_init');

function favicon_override_init() {
	elgg_register_plugin_hook_handler('head', 'page', 'favicon_override_head');
}

function favicon_override_head(\Elgg\Hook $hook) {
	$data = $hook->getValue();

	$data['links']['apple-touch-icon'] = [
		'rel' => 'apple-touch-icon',
		'href' => elgg_get_simplecache_url('favicon_override/favicon-128.png'),
	];
	$data['links']['icon-ico'] = [
		'rel' => 'icon',
		'href' => elgg_get_simplecache_url('favicon_override/favicon.ico'),
	];
	$data['links']['icon-vector'] = [
		'rel' => 'icon',
		'sizes' => '16x16 32x32 48x48 64x64 128x128',
		'type' => 'image/svg+xml',
		'href' => elgg_get_simplecache_url('favicon_override/favicon.svg'),
	];
	$data['links']['icon-16'] = [
		'rel' => 'icon',
		'sizes' => '16x16',
		'type' => 'image/png',
		'href' => elgg_get_simplecache_url('favicon_override/favicon-16.png'),
	];
	$data['links']['icon-32'] = [
		'rel' => 'icon',
		'sizes' => '32x32',
		'type' => 'image/png',
		'href' => elgg_get_simplecache_url('favicon_override/favicon-32.png'),
	];
	$data['links']['icon-64'] = [
		'rel' => 'icon',
		'sizes' => '64x64',
		'type' => 'image/png',
		'href' => elgg_get_simplecache_url('favicon_override/favicon-64.png'),
	];
	$data['links']['icon-128'] = [
		'rel' => 'icon',
		'sizes' => '128x128',
		'type' => 'image/png',
		'href' => elgg_get_simplecache_url('favicon_override/favicon-128.png'),
	];

	return $data;
}

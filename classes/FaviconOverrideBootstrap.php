<?php

class FaviconOverrideBootstrap extends \Elgg\DefaultPluginBootstrap {

	public function init() {
		elgg_register_plugin_hook_handler('head', 'page', 'favicon_override_head');
	}
}
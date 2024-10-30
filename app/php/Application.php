<?php
namespace YaroChatOpener;

use YaroChatOpener\Loader;
use YaroChatOpener\Scripts;
use YaroChatOpener\Settings;
use YaroChatOpener\I18n;
use YaroChatOpener\MetaBoxes;
use YaroChatOpener\Extensions\MetaBox\Loader as MBLoader;

class Application {
    /**
     * Add all hook and filter
     * 
     * @return void
     */
    public function run()
    {
        $rwmb_loader = new MBLoader();
        $rwmb_loader->init();
        $loader = new Loader;
        $scripts = new Scripts;
        $loader->addAction('wp_enqueue_scripts', $scripts, 'enqueueScripts');
        $loader->addFilter('script_loader_tag', $scripts, 'setScriptAttrs', 10, 2);
        $loader->addAction('wp_footer', $scripts, 'customScript');
        $i18n = new I18n;
        $loader->addAction('plugins_loaded', $i18n, 'loadThemeTextDomain');
        $settings = new Settings;
        $loader->addAction('admin_menu', $settings, 'addMenu');
        $loader->run();
        new MetaBoxes;
    }
}
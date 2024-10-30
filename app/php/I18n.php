<?php

namespace YaroChatOpener;

use YaroChatOpener\Constant;

class I18n
{
    /**
     * Load the text domain for translation.
     *
     * @since    1.0.0
     */
    public function loadThemeTextDomain()
    {
        load_plugin_textdomain(Constant::PLUG_SLUG, FALSE, Constant::PLUG_DIR . '/languages/' );
    }
}

<?php
/*
Plugin Name:     Chat opener for Hubspot
Description:     This plugin calling Hubspot chat through a custom button. You can add chat opening to any HTML tag.
Author:          Konstantin Melnikov <cartman.zp@gmail.com>
Author URI:      http://yaro.info
Text Domain:     yaro-chat-opener
Domain Path:     /languages
Version:         1.0.0
*/
namespace YaroChatOpener;

use YaroChatOpener\Application;

require_once __DIR__ .'/vendor/autoload.php';

$app = new Application();
$app->run();
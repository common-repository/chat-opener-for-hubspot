<?php
namespace YaroChatOpener;

class Constant
{
    const PREFIX         = 'yco_';
    const PLUG_SLUG      = 'yaro-chat-opener';
    const PLUG_DIR       = __DIR__ . '/../..';
    const CONTENT_DIR    = self::PLUG_DIR . '/content';
    const TEMPLATES_DIR  = self::PLUG_DIR . '/templates';
    const CONFIG_DIR     = self::PLUG_DIR . '/config';
    const CACHE_DIR      = self::PLUG_DIR . '/../../pug_cache';

    const DEV_MODE = true;

}
<?php
use YaroChatOpener\Constant;

return [
    'id'             => Constant::PREFIX.'color-settins',
    'title'          => __('Chat settings', Constant::PLUG_SLUG),
    'post_types'     => Constant::PREFIX.'options',
    'context'        => 'normal',
    'isSettingsPage' => true,
    'priority'       => 'high',
    'autosave'       => true,
    'fields' => [
        [
            'type' => 'custom_html',
            'std'  => __('<p>You can get you Hubspot chat <a href="https://www.hubspot.com/products/crm/live-chat" target="_blank">here</a>.</p>', Constant::PLUG_SLUG),
        ],
        [
            'name'  => __('Chat ID', Constant::PLUG_SLUG),
            'id'    => Constant::PREFIX.'chat_id',
            'type'  => 'text',
            'desc'  => __('Fill JS file name from your "HubSpot Embed Code" for enable chat.', Constant::PLUG_SLUG),
        ],
        [
            'name'  => __('Css classes or id', Constant::PLUG_SLUG),
            'id'    => Constant::PREFIX.'chat_classes',
            'type'  => 'text',
            'desc'  => __('You can use the class ".chat-btn" or fill your CSS classes or id. Use CSS selectors for it.', Constant::PLUG_SLUG),
        ],
    ]
];
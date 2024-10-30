<?php
namespace YaroChatOpener;

use YaroChatOpener\Constant;

class Scripts
{

    public function enqueueScripts()
    {
        if ($jsName = get_option(Constant::PREFIX.'chat_id')) {
            wp_register_script(
                Constant::PREFIX.'chat_script',
                "//js.hs-scripts.com/{$jsName}.js",
                [],
                '',
                false
            );
            wp_enqueue_script(Constant::PREFIX.'chat_script');
        }
    }
    public function customScript()
    {
        if ($classes = get_option(Constant::PREFIX.'chat_classes')) {
            $classes = '.chat-btn, ' . $classes;
        } else {
            $classes = '.chat-btn';
        }
        echo "<script type='text/javascript'>
            $(document).ready(function() {
                $('{$classes}').on('click', () => {
                  if (window.hubspot_live_messages_running && window.hubspot && window.hubspot.messages) {
                    window.hubspot.messages.EXPERIMENTAL_API.requestWidgetOpen();
                  } else {
                    console.log('Please install HubSpot chat');
                  }
                });
            });
            </script>";
    }
    public function setScriptAttrs($tag, $handle)
    {
        if (Constant::PREFIX.'chat_script' !== $handle) {
            return $tag;
        }
        return str_replace(' src', ' async="async" defer="defer" id="hs-script-loader" src', $tag);
    }
}

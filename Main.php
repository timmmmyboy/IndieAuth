<?php

    namespace IdnoPlugins\IndiePub {

        class Main extends \Idno\Common\Plugin {
            function registerPages() {

                \Idno\Core\site()->addPageHandler('/indieauth/callback/?', '\IdnoPlugins\IndiePub\Pages\IndieAuth\Callback',true);

            }
        }

    }

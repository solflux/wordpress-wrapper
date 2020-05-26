<?php

namespace Solflux\WordPress;

use function add_action;
use function register_post_type;

class WordPress
{
    public function registerPostType(PostType $type)
    {
        add_action(
            Hooks::PLUGIN_INITIALIZATION,
            function () use ($type) {
                register_post_type($type->getName(), $type->asArray());
            }
        );
    }
}
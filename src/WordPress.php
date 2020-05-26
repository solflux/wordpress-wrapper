<?php

namespace Wordpress;

use Solflux\WordPress\PostType;

class WordPress
{
    public function registerPostType(PostType $type)
    {
        register_post_type($type->getName(), $type->asArray());
    }
}
<?php

namespace Wordpress;

use Wordpress\PostType\PostType;

class Wordpress
{
    public function registerPostType(PostType $type)
    {
        register_post_type($type->getName(), $type->asArray());
    }
}
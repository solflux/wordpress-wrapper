<?php

namespace Solflux\WordPress;

class WordPress
{
    public function registerPostType(PostType $type)
    {
        register_post_type($type->getName(), $type->asArray());
    }
}
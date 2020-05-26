<?php

namespace Solflux\WordPress;

use function add_action;
use function register_post_type;
use function register_taxonomy;

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

    public function registerTaxonomy(Taxonomy $taxonomy) {
        add_action(
            Hooks::PLUGIN_INITIALIZATION,
            function() use ($taxonomy) {
                register_taxonomy($taxonomy->getName(), $taxonomy->getType(), $taxonomy->toArray());
            }
        );
    }
}
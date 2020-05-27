<?php

namespace Solflux\WordPress;

use function add_action;
use function register_post_type;
use function register_taxonomy;
use function add_menu_page;
use function add_submenu_page;

class WordPress
{
    public function registerPostType(PostType $type)
    {
        add_action(
            Hooks::PLUGIN_INITIALIZATION,
            function () use ($type) {
                register_post_type($type->getName(), $type->asConfigArray());
            }
        );
    }

    public function registerTaxonomy(Taxonomy $taxonomy)
    {
        add_action(
            Hooks::PLUGIN_INITIALIZATION,
            function () use ($taxonomy) {
                register_taxonomy($taxonomy->getName(), $taxonomy->getType(), $taxonomy->asConfigArray());
            }
        );
    }

    public function registerMenuPage(MenuPage $page, array $context = [], string $parent = null)
    {
        if ($parent !== null) {
            $registrationFunction =
                function () use ($page, $context, $parent) {
                    add_submenu_page(
                        $parent,
                        $page->getPageTitle(),
                        $page->getMenuTitle(),
                        $page->getRequiredCapability(),
                        $page->getMenuSlug(),
                        $page->renderer($context),
                        $page->getMenuPosition()
                    );
                };
        } else {
            $registrationFunction =
                function () use ($page, $context) {
                    add_menu_page(
                        $page->getPageTitle(),
                        $page->getMenuTitle(),
                        $page->getRequiredCapability(),
                        $page->getMenuSlug(),
                        $page->renderer($context),
                        $page->getMenuPosition()
                    );
                };
        }

        add_action(Hooks::PLUGIN_INITIALIZATION, $registrationFunction);
    }
}
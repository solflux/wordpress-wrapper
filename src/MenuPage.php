<?php

namespace Solflux\WordPress;

use Closure;

/**
 * Interface ManagementPage
 *
 * This interface is for defining administration pages to be shown on the WordPress backend.
 * These are often used to either document or configure your plugin.
 *
 * @package Solflux\WordPress
 */
interface MenuPage
{
    /**
     * Return a functional responsible for rendering the page itself.
     *
     * @param array $context
     *
     * @return Closure
     */
    public function renderer(array $context = []): Closure;

    /**
     * Text to be displayed in the title tags of the page
     *
     * @return string
     */
    public function getPageTitle(): string;

    /**
     * Text to be used within the menu
     *
     * @return string
     */
    public function getMenuTitle(): string;

    /**
     * The slug name to reference this menu (must be unique)
     *
     * @return string
     */
    public function getMenuSlug(): string;

    /**
     * Position in the menu order this item should appear
     *
     * @return int
     */
    public function getMenuPosition(): int;

    /**
     * The "capability" a use must have associated with them to access this page
     *
     * @return string
     */
    public function getRequiredCapability(): string;

}
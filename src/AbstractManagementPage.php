<?php

namespace Solflux\WordPress;

abstract class AbstractManagementPage implements ManagementPage
{
    /**
     * @var string
     */
    protected $pageTitle;

    /**
     * @var string
     *
     */
    protected $menuTitle;

    /**
     * @var string
     */
    protected $menuSlug;

    /**
     * @var int
     */
    protected $menuPosition;

    /**
     * @var string
     */
    protected $requiredCapability;

    /**
     * @return string
     */
    public function getPageTitle(): string
    {
        return $this->pageTitle;
    }

    /**
     * @return string
     */
    public function getMenuTitle(): string
    {
        return $this->menuTitle;
    }

    /**
     * @return string
     */
    public function getMenuSlug(): string
    {
        return $this->menuSlug;
    }

    /**
     * @return int
     */
    public function getMenuPosition(): int
    {
        return $this->menuPosition;
    }

    /**
     * @return string
     */
    public function getRequiredCapability(): string
    {
        return $this->requiredCapability;
    }

}
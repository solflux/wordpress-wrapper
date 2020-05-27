<?php

namespace Solflux\WordPress;

use Solflux\WordPress\PostType\Labels;
use Solflux\WordPress\PostType\Supports;

class PostType
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var Labels
     */
    private $labels;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var bool
     */
    private $rewriteWithFront = false;

    /**
     * @var bool
     */
    private $hasArchive = true;

    /**
     * @var string
     */
    private $archiveName;

    /**
     * @var bool
     */
    private $isPublic = true;

    /**
     * @var string
     */
    private $menuIcon;

    /**
     * @var int
     */
    private $menuPosition = 20;

    /**
     * @var bool
     */
    private $showUi = true;

    /**
     * @var bool
     */
    private $showInMenu = true;

    /**
     * @var Supports
     */
    private $supports;

    /**
     * PostType constructor.
     *
     * @param string $name
     * @param string $slug
     * @param Supports $support
     * @param Labels $labels
     */
    public function __construct(string $name, string $slug, Supports $support, Labels $labels)
    {
        $this->name    = $name;
        $this->slug    = $slug;
        $this->supports = $support;
        $this->labels  = $labels;
    }

    /**
     * @param bool $rewriteWithFront
     */
    public function setRewriteWithFront(bool $rewriteWithFront): void
    {
        $this->rewriteWithFront = $rewriteWithFront;
    }

    /**
     * @param Labels $labels
     *
     * @return PostType
     */
    public function setLabels(Labels $labels): PostType
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * @param string $slug
     *
     * @return PostType
     */
    public function setSlug(string $slug): PostType
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @param bool $hasArchive
     *
     * @return PostType
     */
    public function setHasArchive(bool $hasArchive): PostType
    {
        $this->hasArchive = $hasArchive;

        return $this;
    }

    /**
     * @param string $archiveName
     *
     * @return PostType
     */
    public function setArchiveName(string $archiveName): PostType
    {
        $this->archiveName = $archiveName;

        return $this;
    }

    /**
     * @param bool $isPublic
     *
     * @return PostType
     */
    public function setIsPublic(bool $isPublic): PostType
    {
        $this->isPublic = $isPublic;

        return $this;
    }

    /**
     * @param string $menuIcon
     *
     * @return PostType
     */
    public function setMenuIcon(string $menuIcon): PostType
    {
        $this->menuIcon = $menuIcon;

        return $this;
    }

    /**
     * @param int $menuPosition
     *
     * @return PostType
     */
    public function setMenuPosition(int $menuPosition): PostType
    {
        $this->menuPosition = $menuPosition;

        return $this;
    }

    /**
     * @param bool $showUi
     *
     * @return PostType
     */
    public function setShowUi(bool $showUi): PostType
    {
        $this->showUi = $showUi;

        return $this;
    }

    /**
     * @param bool $showInMenu
     *
     * @return PostType
     */
    public function setShowInMenu(bool $showInMenu): PostType
    {
        $this->showInMenu = $showInMenu;

        return $this;
    }

    /**
     * @param Supports $supports
     *
     * @return PostType
     */
    public function setSupports(Supports $supports): PostType
    {
        $this->supports = $supports;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return PostType
     */
    public function setName(string $name): PostType
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function asConfigArray(): array
    {
        return [
            'labels' => $this->labels->toArray(),
            'has_archive' => $this->getHasArchive(),
            'public' => $this->isPublic,
            'rewrite' => [
                'slug' => $this->slug,
                'with_front' => $this->rewriteWithFront
            ],
            'capability_type' => 'post',
            'menu_position' => $this->menuPosition,
            'menu-icon' => $this->menuIcon,
            'show_in_menu' => $this->showInMenu,
            'show_ui' => $this->showUi,
            'supports' => $this->supports->toArray()
        ];
    }

    /**
     * @return bool|string
     */
    private function getHasArchive()
    {
        if (!$this->hasArchive) {
            return false;
        }

        if ($this->archiveName) {
            return $this->archiveName;
        }

        return true;
    }

}
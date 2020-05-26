<?php

namespace Solflux\WordPress\PostType;

use Solflux\WordPress\Internationalizer;

class Labels
{
    /**
     * @var Internationalizer
     */
    private $internationalizer;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $singularName;

    /**
     * @var string
     */
    private $menuName;

    /**
     * @var string
     */
    private $nameAdminBar;

    /**
     * @var string
     */
    private $addNew;

    /**
     * @var string
     */
    private $addNewItem;

    /**
     * @var string
     */
    private $newItem;

    /**
     * @var string
     */
    private $editItem;

    /**
     * @var string
     */
    private $viewItems;

    /**
     * @var string
     */
    private $allItems;

    /**
     * @var string
     */
    private $searchItems;

    /**
     * @var string
     */
    private $parentItemColon;

    /**
     * @var string
     */
    private $notFound;

    /**
     * @var string
     */
    private $notFoundInTrash;

    /**
     * Labels constructor.
     *
     * @param Internationalizer $internationalizer
     */
    public function __construct(Internationalizer $internationalizer)
    {
        $this->internationalizer = $internationalizer;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $singularName
     */
    public function setSingularName(string $singularName): void
    {
        $this->singularName = $singularName;
    }

    /**
     * @param string $menuName
     */
    public function setMenuName(string $menuName): void
    {
        $this->menuName = $menuName;
    }

    /**
     * @param string $nameAdminBar
     */
    public function setNameAdminBar(string $nameAdminBar): void
    {
        $this->nameAdminBar = $nameAdminBar;
    }

    /**
     * @param string $addNew
     */
    public function setAddNew(string $addNew): void
    {
        $this->addNew = $addNew;
    }

    /**
     * @param string $addNewItem
     */
    public function setAddNewItem(string $addNewItem): void
    {
        $this->addNewItem = $addNewItem;
    }

    /**
     * @param string $newItem
     */
    public function setNewItem(string $newItem): void
    {
        $this->newItem = $newItem;
    }

    /**
     * @param string $editItem
     */
    public function setEditItem(string $editItem): void
    {
        $this->editItem = $editItem;
    }

    /**
     * @param string $viewItems
     */
    public function setViewItems(string $viewItems): void
    {
        $this->viewItems = $viewItems;
    }

    /**
     * @param string $allItems
     */
    public function setAllItems(string $allItems): void
    {
        $this->allItems = $allItems;
    }

    /**
     * @param string $searchItems
     */
    public function setSearchItems(string $searchItems): void
    {
        $this->searchItems = $searchItems;
    }

    /**
     * @param string $parentItemColon
     */
    public function setParentItemColon(string $parentItemColon): void
    {
        $this->parentItemColon = $parentItemColon;
    }

    /**
     * @param string $notFound
     */
    public function setNotFound(string $notFound): void
    {
        $this->notFound = $notFound;
    }

    /**
     * @param string $notFoundInTrash
     */
    public function setNotFoundInTrash(string $notFoundInTrash): void
    {
        $this->notFoundInTrash = $notFoundInTrash;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'name'               => $this->internationalizer->translateWithContext($this->name, 'post type general name'),
            'singular_name'      => $this->internationalizer->translateWithContext($this->singularName, 'post type singular name'),
            'menu_name'          => $this->internationalizer->translateWithContext($this->menuName, 'admin menu'),
            'name_admin_bar'     => $this->internationalizer->translateWithContext($this->nameAdminBar, 'add new on admin bar'),
            'add_new'            => $this->internationalizer->translateWithContext($this->addNew, 'beerfest-drink'),
            'add_new_item'       => $this->internationalizer->translate($this->addNewItem),
            'new_item'           => $this->internationalizer->translate($this->newItem),
            'edit_item'          => $this->internationalizer->translate($this->editItem),
            'view_item'          => $this->internationalizer->translate($this->viewItems),
            'all_items'          => $this->internationalizer->translate($this->allItems),
            'search_items'       => $this->internationalizer->translate($this->searchItems),
            'parent_item_colon'  => $this->internationalizer->translate($this->parentItemColon),
            'not_found'          => $this->internationalizer->translate($this->notFound),
            'not_found_in_trash' => $this->internationalizer->translate($this->notFoundInTrash)
        ];
    }
}
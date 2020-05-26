<?php

namespace Solflux\WordPress;

class Taxonomy
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $label;

    /**
     * @var bool
     */
    private $public = true;

    /**
     * @var bool
     */
    private $hierarchical = false;

    /**
     * Taxonomy constructor.
     *
     * @param string $name
     * @param string $type
     * @param string $label
     */
    public function __construct(string $name, string $type, string $label)
    {
        $this->name  = $name;
        $this->type  = $type;
        $this->label = $label;
    }

    /**
     * @param bool $public
     *
     * @return Taxonomy
     */
    public function setPublic(bool $public): Taxonomy
    {
        $this->public = $public;

        return $this;
    }

    /**
     * @param bool $hierarchical
     *
     * @return Taxonomy
     */
    public function setHierarchical(bool $hierarchical): Taxonomy
    {
        $this->hierarchical = $hierarchical;

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
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return array
     */
    public function asConfigArray(): array
    {
        return [
            'label' => $this->label,
            'public' => $this->public,
            'hierarchical' =>  $this->hierarchical
        ];
    }

}
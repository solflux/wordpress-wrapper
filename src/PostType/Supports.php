<?php

namespace Solflux\WordPress\PostType;

class Supports
{
    /**
     * @var bool
     */
    private $title;

    /**
     * @var bool
     */
    private $editor;

    /**
     * @var bool
     */
    private $comments;

    /**
     * @var bool
     */
    private $revisions;

    /**
     * @var bool
     */
    private $trackbacks;

    /**
     * @var bool
     */
    private $author;

    /**
     * @var bool
     */
    private $excerpt;

    /**
     * @var bool
     */
    private $pageAttributes;

    /**
     * @var bool
     */
    private $thumbnail;

    /**
     * @var bool
     */
    private $customFields;

    /**
     * @var bool
     */
    private $postFormats;

    /**
     * @param bool $title
     *
     * @return Supports
     */
    public function setTitle(bool $title): Supports
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @param bool $editor
     *
     * @return Supports
     */
    public function setEditor(bool $editor): Supports
    {
        $this->editor = $editor;

        return $this;
    }

    /**
     * @param bool $comments
     *
     * @return Supports
     */
    public function setComments(bool $comments): Supports
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * @param bool $revisions
     *
     * @return Supports
     */
    public function setRevisions(bool $revisions): Supports
    {
        $this->revisions = $revisions;

        return $this;
    }

    /**
     * @param bool $trackbacks
     *
     * @return Supports
     */
    public function setTrackbacks(bool $trackbacks): Supports
    {
        $this->trackbacks = $trackbacks;

        return $this;
    }

    /**
     * @param bool $author
     *
     * @return Supports
     */
    public function setAuthor(bool $author): Supports
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @param bool $excerpt
     *
     * @return Supports
     */
    public function setExcerpt(bool $excerpt): Supports
    {
        $this->excerpt = $excerpt;

        return $this;
    }

    /**
     * @param bool $pageAttributes
     *
     * @return Supports
     */
    public function setPageAttributes(bool $pageAttributes): Supports
    {
        $this->pageAttributes = $pageAttributes;

        return $this;
    }

    /**
     * @param bool $thumbnail
     *
     * @return Supports
     */
    public function setThumbnail(bool $thumbnail): Supports
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * @param bool $customFields
     *
     * @return Supports
     */
    public function setCustomFields(bool $customFields): Supports
    {
        $this->customFields = $customFields;

        return $this;
    }

    /**
     * @param bool $postFormats
     *
     * @return Supports
     */
    public function setPostFormats(bool $postFormats): Supports
    {
        $this->postFormats = $postFormats;

        return $this;
    }

    /**
     * @return array|string[]
     */
    public function toArray(): array
    {
        return []
               + ($this->title ? ['title'] : [])
               + ($this->editor ? ['editor'] : [])
               + ($this->revisions ? ['revisions'] : [])
               + ($this->trackbacks ? ['trackbacks'] : [])
               + ($this->author ? ['author'] : [])
               + ($this->excerpt ? ['excerpt'] : [])
               + ($this->thumbnail ? ['thumbnail'] : [])
               + ($this->comments ? ['comments'] : [])
               + ($this->customFields ? ['custom-fields'] : [])
               + ($this->pageAttributes ? ['page-attributes'] : [])
               + ($this->postFormats ? ['post-formats'] : []);
    }
}
<?php

namespace Docker\API\Model;

class ImageDeleteResponseItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The image ID of an image that was untagged
     *
     * @var string|null
     */
    protected $untagged;
    /**
     * The image ID of an image that was deleted
     *
     * @var string|null
     */
    protected $deleted;
    /**
     * The image ID of an image that was untagged
     *
     * @return string|null
     */
    public function getUntagged() : ?string
    {
        return $this->untagged;
    }
    /**
     * The image ID of an image that was untagged
     *
     * @param string|null $untagged
     *
     * @return self
     */
    public function setUntagged(?string $untagged) : self
    {
        $this->initialized['untagged'] = true;
        $this->untagged = $untagged;
        return $this;
    }
    /**
     * The image ID of an image that was deleted
     *
     * @return string|null
     */
    public function getDeleted() : ?string
    {
        return $this->deleted;
    }
    /**
     * The image ID of an image that was deleted
     *
     * @param string|null $deleted
     *
     * @return self
     */
    public function setDeleted(?string $deleted) : self
    {
        $this->initialized['deleted'] = true;
        $this->deleted = $deleted;
        return $this;
    }
}
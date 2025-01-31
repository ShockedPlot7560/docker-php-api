<?php

namespace Docker\API\Model;

class TaskSpecContainerSpecConfigsItemFile extends \ArrayObject
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
     * Name represents the final filename in the filesystem.
     *
     * @var string|null
     */
    protected $name;
    /**
     * UID represents the file UID.
     *
     * @var string|null
     */
    protected $uID;
    /**
     * GID represents the file GID.
     *
     * @var string|null
     */
    protected $gID;
    /**
     * Mode represents the FileMode of the file.
     *
     * @var int|null
     */
    protected $mode;
    /**
     * Name represents the final filename in the filesystem.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Name represents the final filename in the filesystem.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * UID represents the file UID.
     *
     * @return string|null
     */
    public function getUID() : ?string
    {
        return $this->uID;
    }
    /**
     * UID represents the file UID.
     *
     * @param string|null $uID
     *
     * @return self
     */
    public function setUID(?string $uID) : self
    {
        $this->initialized['uID'] = true;
        $this->uID = $uID;
        return $this;
    }
    /**
     * GID represents the file GID.
     *
     * @return string|null
     */
    public function getGID() : ?string
    {
        return $this->gID;
    }
    /**
     * GID represents the file GID.
     *
     * @param string|null $gID
     *
     * @return self
     */
    public function setGID(?string $gID) : self
    {
        $this->initialized['gID'] = true;
        $this->gID = $gID;
        return $this;
    }
    /**
     * Mode represents the FileMode of the file.
     *
     * @return int|null
     */
    public function getMode() : ?int
    {
        return $this->mode;
    }
    /**
     * Mode represents the FileMode of the file.
     *
     * @param int|null $mode
     *
     * @return self
     */
    public function setMode(?int $mode) : self
    {
        $this->initialized['mode'] = true;
        $this->mode = $mode;
        return $this;
    }
}
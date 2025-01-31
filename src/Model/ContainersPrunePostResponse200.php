<?php

namespace Docker\API\Model;

class ContainersPrunePostResponse200 extends \ArrayObject
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
     * Container IDs that were deleted
     *
     * @var list<string>|null
     */
    protected $containersDeleted;
    /**
     * Disk space reclaimed in bytes
     *
     * @var int|null
     */
    protected $spaceReclaimed;
    /**
     * Container IDs that were deleted
     *
     * @return list<string>|null
     */
    public function getContainersDeleted() : ?array
    {
        return $this->containersDeleted;
    }
    /**
     * Container IDs that were deleted
     *
     * @param list<string>|null $containersDeleted
     *
     * @return self
     */
    public function setContainersDeleted(?array $containersDeleted) : self
    {
        $this->initialized['containersDeleted'] = true;
        $this->containersDeleted = $containersDeleted;
        return $this;
    }
    /**
     * Disk space reclaimed in bytes
     *
     * @return int|null
     */
    public function getSpaceReclaimed() : ?int
    {
        return $this->spaceReclaimed;
    }
    /**
     * Disk space reclaimed in bytes
     *
     * @param int|null $spaceReclaimed
     *
     * @return self
     */
    public function setSpaceReclaimed(?int $spaceReclaimed) : self
    {
        $this->initialized['spaceReclaimed'] = true;
        $this->spaceReclaimed = $spaceReclaimed;
        return $this;
    }
}
<?php

namespace Docker\API\Model;

class VolumesPrunePostResponse200 extends \ArrayObject
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
     * Volumes that were deleted
     *
     * @var list<string>|null
     */
    protected $volumesDeleted;
    /**
     * Disk space reclaimed in bytes
     *
     * @var int|null
     */
    protected $spaceReclaimed;
    /**
     * Volumes that were deleted
     *
     * @return list<string>|null
     */
    public function getVolumesDeleted() : ?array
    {
        return $this->volumesDeleted;
    }
    /**
     * Volumes that were deleted
     *
     * @param list<string>|null $volumesDeleted
     *
     * @return self
     */
    public function setVolumesDeleted(?array $volumesDeleted) : self
    {
        $this->initialized['volumesDeleted'] = true;
        $this->volumesDeleted = $volumesDeleted;
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
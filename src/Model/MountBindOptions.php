<?php

namespace Docker\API\Model;

class MountBindOptions extends \ArrayObject
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
     * A propagation mode with the value `[r]private`, `[r]shared`, or `[r]slave`.
     *
     * @var string|null
     */
    protected $propagation;
    /**
     * Disable recursive bind mount.
     *
     * @var bool|null
     */
    protected $nonRecursive = false;
    /**
     * Create mount point on host if missing
     *
     * @var bool|null
     */
    protected $createMountpoint = false;
    /**
     * A propagation mode with the value `[r]private`, `[r]shared`, or `[r]slave`.
     *
     * @return string|null
     */
    public function getPropagation() : ?string
    {
        return $this->propagation;
    }
    /**
     * A propagation mode with the value `[r]private`, `[r]shared`, or `[r]slave`.
     *
     * @param string|null $propagation
     *
     * @return self
     */
    public function setPropagation(?string $propagation) : self
    {
        $this->initialized['propagation'] = true;
        $this->propagation = $propagation;
        return $this;
    }
    /**
     * Disable recursive bind mount.
     *
     * @return bool|null
     */
    public function getNonRecursive() : ?bool
    {
        return $this->nonRecursive;
    }
    /**
     * Disable recursive bind mount.
     *
     * @param bool|null $nonRecursive
     *
     * @return self
     */
    public function setNonRecursive(?bool $nonRecursive) : self
    {
        $this->initialized['nonRecursive'] = true;
        $this->nonRecursive = $nonRecursive;
        return $this;
    }
    /**
     * Create mount point on host if missing
     *
     * @return bool|null
     */
    public function getCreateMountpoint() : ?bool
    {
        return $this->createMountpoint;
    }
    /**
     * Create mount point on host if missing
     *
     * @param bool|null $createMountpoint
     *
     * @return self
     */
    public function setCreateMountpoint(?bool $createMountpoint) : self
    {
        $this->initialized['createMountpoint'] = true;
        $this->createMountpoint = $createMountpoint;
        return $this;
    }
}
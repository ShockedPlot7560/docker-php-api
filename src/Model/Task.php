<?php

namespace Docker\API\Model;

class Task extends \ArrayObject
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
     * The ID of the task.
     *
     * @var string|null
     */
    protected $iD;
    /**
    * The version number of the object such as node, service, etc. This is needed
    to avoid conflicting writes. The client must send the version number along
    with the modified specification when updating these objects.
    
    This approach ensures safe concurrency and determinism in that the change
    on the object may not be applied if the version number has changed from the
    last read. In other words, if two update requests specify the same base
    version, only one of the requests can succeed. As a result, two separate
    update requests that happen at the same time will not unintentionally
    overwrite each other.
    
    *
    * @var ObjectVersion|null
    */
    protected $version;
    /**
     * 
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $updatedAt;
    /**
     * Name of the task.
     *
     * @var string|null
     */
    protected $name;
    /**
     * User-defined key/value metadata.
     *
     * @var array<string, string>|null
     */
    protected $labels;
    /**
     * User modifiable task configuration.
     *
     * @var TaskSpec|null
     */
    protected $spec;
    /**
     * The ID of the service this task is part of.
     *
     * @var string|null
     */
    protected $serviceID;
    /**
     * 
     *
     * @var int|null
     */
    protected $slot;
    /**
     * The ID of the node that this task is on.
     *
     * @var string|null
     */
    protected $nodeID;
    /**
    * User-defined resources can be either Integer resources (e.g, `SSD=3`) or
    String resources (e.g, `GPU=UUID1`).
    
    *
    * @var list<GenericResourcesItem>|null
    */
    protected $assignedGenericResources;
    /**
     * 
     *
     * @var TaskStatus|null
     */
    protected $status;
    /**
     * 
     *
     * @var string|null
     */
    protected $desiredState;
    /**
    * The version number of the object such as node, service, etc. This is needed
    to avoid conflicting writes. The client must send the version number along
    with the modified specification when updating these objects.
    
    This approach ensures safe concurrency and determinism in that the change
    on the object may not be applied if the version number has changed from the
    last read. In other words, if two update requests specify the same base
    version, only one of the requests can succeed. As a result, two separate
    update requests that happen at the same time will not unintentionally
    overwrite each other.
    
    *
    * @var ObjectVersion|null
    */
    protected $jobIteration;
    /**
     * The ID of the task.
     *
     * @return string|null
     */
    public function getID() : ?string
    {
        return $this->iD;
    }
    /**
     * The ID of the task.
     *
     * @param string|null $iD
     *
     * @return self
     */
    public function setID(?string $iD) : self
    {
        $this->initialized['iD'] = true;
        $this->iD = $iD;
        return $this;
    }
    /**
    * The version number of the object such as node, service, etc. This is needed
    to avoid conflicting writes. The client must send the version number along
    with the modified specification when updating these objects.
    
    This approach ensures safe concurrency and determinism in that the change
    on the object may not be applied if the version number has changed from the
    last read. In other words, if two update requests specify the same base
    version, only one of the requests can succeed. As a result, two separate
    update requests that happen at the same time will not unintentionally
    overwrite each other.
    
    *
    * @return ObjectVersion|null
    */
    public function getVersion() : ?ObjectVersion
    {
        return $this->version;
    }
    /**
    * The version number of the object such as node, service, etc. This is needed
    to avoid conflicting writes. The client must send the version number along
    with the modified specification when updating these objects.
    
    This approach ensures safe concurrency and determinism in that the change
    on the object may not be applied if the version number has changed from the
    last read. In other words, if two update requests specify the same base
    version, only one of the requests can succeed. As a result, two separate
    update requests that happen at the same time will not unintentionally
    overwrite each other.
    
    *
    * @param ObjectVersion|null $version
    *
    * @return self
    */
    public function setVersion(?ObjectVersion $version) : self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreatedAt() : ?string
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param string|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?string $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUpdatedAt() : ?string
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param string|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?string $updatedAt) : self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Name of the task.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Name of the task.
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
     * User-defined key/value metadata.
     *
     * @return array<string, string>|null
     */
    public function getLabels() : ?iterable
    {
        return $this->labels;
    }
    /**
     * User-defined key/value metadata.
     *
     * @param array<string, string>|null $labels
     *
     * @return self
     */
    public function setLabels(?iterable $labels) : self
    {
        $this->initialized['labels'] = true;
        $this->labels = $labels;
        return $this;
    }
    /**
     * User modifiable task configuration.
     *
     * @return TaskSpec|null
     */
    public function getSpec() : ?TaskSpec
    {
        return $this->spec;
    }
    /**
     * User modifiable task configuration.
     *
     * @param TaskSpec|null $spec
     *
     * @return self
     */
    public function setSpec(?TaskSpec $spec) : self
    {
        $this->initialized['spec'] = true;
        $this->spec = $spec;
        return $this;
    }
    /**
     * The ID of the service this task is part of.
     *
     * @return string|null
     */
    public function getServiceID() : ?string
    {
        return $this->serviceID;
    }
    /**
     * The ID of the service this task is part of.
     *
     * @param string|null $serviceID
     *
     * @return self
     */
    public function setServiceID(?string $serviceID) : self
    {
        $this->initialized['serviceID'] = true;
        $this->serviceID = $serviceID;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSlot() : ?int
    {
        return $this->slot;
    }
    /**
     * 
     *
     * @param int|null $slot
     *
     * @return self
     */
    public function setSlot(?int $slot) : self
    {
        $this->initialized['slot'] = true;
        $this->slot = $slot;
        return $this;
    }
    /**
     * The ID of the node that this task is on.
     *
     * @return string|null
     */
    public function getNodeID() : ?string
    {
        return $this->nodeID;
    }
    /**
     * The ID of the node that this task is on.
     *
     * @param string|null $nodeID
     *
     * @return self
     */
    public function setNodeID(?string $nodeID) : self
    {
        $this->initialized['nodeID'] = true;
        $this->nodeID = $nodeID;
        return $this;
    }
    /**
    * User-defined resources can be either Integer resources (e.g, `SSD=3`) or
    String resources (e.g, `GPU=UUID1`).
    
    *
    * @return list<GenericResourcesItem>|null
    */
    public function getAssignedGenericResources() : ?array
    {
        return $this->assignedGenericResources;
    }
    /**
    * User-defined resources can be either Integer resources (e.g, `SSD=3`) or
    String resources (e.g, `GPU=UUID1`).
    
    *
    * @param list<GenericResourcesItem>|null $assignedGenericResources
    *
    * @return self
    */
    public function setAssignedGenericResources(?array $assignedGenericResources) : self
    {
        $this->initialized['assignedGenericResources'] = true;
        $this->assignedGenericResources = $assignedGenericResources;
        return $this;
    }
    /**
     * 
     *
     * @return TaskStatus|null
     */
    public function getStatus() : ?TaskStatus
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param TaskStatus|null $status
     *
     * @return self
     */
    public function setStatus(?TaskStatus $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDesiredState() : ?string
    {
        return $this->desiredState;
    }
    /**
     * 
     *
     * @param string|null $desiredState
     *
     * @return self
     */
    public function setDesiredState(?string $desiredState) : self
    {
        $this->initialized['desiredState'] = true;
        $this->desiredState = $desiredState;
        return $this;
    }
    /**
    * The version number of the object such as node, service, etc. This is needed
    to avoid conflicting writes. The client must send the version number along
    with the modified specification when updating these objects.
    
    This approach ensures safe concurrency and determinism in that the change
    on the object may not be applied if the version number has changed from the
    last read. In other words, if two update requests specify the same base
    version, only one of the requests can succeed. As a result, two separate
    update requests that happen at the same time will not unintentionally
    overwrite each other.
    
    *
    * @return ObjectVersion|null
    */
    public function getJobIteration() : ?ObjectVersion
    {
        return $this->jobIteration;
    }
    /**
    * The version number of the object such as node, service, etc. This is needed
    to avoid conflicting writes. The client must send the version number along
    with the modified specification when updating these objects.
    
    This approach ensures safe concurrency and determinism in that the change
    on the object may not be applied if the version number has changed from the
    last read. In other words, if two update requests specify the same base
    version, only one of the requests can succeed. As a result, two separate
    update requests that happen at the same time will not unintentionally
    overwrite each other.
    
    *
    * @param ObjectVersion|null $jobIteration
    *
    * @return self
    */
    public function setJobIteration(?ObjectVersion $jobIteration) : self
    {
        $this->initialized['jobIteration'] = true;
        $this->jobIteration = $jobIteration;
        return $this;
    }
}
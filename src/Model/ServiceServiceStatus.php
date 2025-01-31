<?php

namespace Docker\API\Model;

class ServiceServiceStatus extends \ArrayObject
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
     * The number of tasks for the service currently in the Running state.
     *
     * @var int|null
     */
    protected $runningTasks;
    /**
    * The number of tasks for the service desired to be running.
    For replicated services, this is the replica count from the
    service spec. For global services, this is computed by taking
    count of all tasks for the service with a Desired State other
    than Shutdown.
    
    *
    * @var int|null
    */
    protected $desiredTasks;
    /**
    * The number of tasks for a job that are in the Completed state.
    This field must be cross-referenced with the service type, as the
    value of 0 may mean the service is not in a job mode, or it may
    mean the job-mode service has no tasks yet Completed.
    
    *
    * @var int|null
    */
    protected $completedTasks;
    /**
     * The number of tasks for the service currently in the Running state.
     *
     * @return int|null
     */
    public function getRunningTasks() : ?int
    {
        return $this->runningTasks;
    }
    /**
     * The number of tasks for the service currently in the Running state.
     *
     * @param int|null $runningTasks
     *
     * @return self
     */
    public function setRunningTasks(?int $runningTasks) : self
    {
        $this->initialized['runningTasks'] = true;
        $this->runningTasks = $runningTasks;
        return $this;
    }
    /**
    * The number of tasks for the service desired to be running.
    For replicated services, this is the replica count from the
    service spec. For global services, this is computed by taking
    count of all tasks for the service with a Desired State other
    than Shutdown.
    
    *
    * @return int|null
    */
    public function getDesiredTasks() : ?int
    {
        return $this->desiredTasks;
    }
    /**
    * The number of tasks for the service desired to be running.
    For replicated services, this is the replica count from the
    service spec. For global services, this is computed by taking
    count of all tasks for the service with a Desired State other
    than Shutdown.
    
    *
    * @param int|null $desiredTasks
    *
    * @return self
    */
    public function setDesiredTasks(?int $desiredTasks) : self
    {
        $this->initialized['desiredTasks'] = true;
        $this->desiredTasks = $desiredTasks;
        return $this;
    }
    /**
    * The number of tasks for a job that are in the Completed state.
    This field must be cross-referenced with the service type, as the
    value of 0 may mean the service is not in a job mode, or it may
    mean the job-mode service has no tasks yet Completed.
    
    *
    * @return int|null
    */
    public function getCompletedTasks() : ?int
    {
        return $this->completedTasks;
    }
    /**
    * The number of tasks for a job that are in the Completed state.
    This field must be cross-referenced with the service type, as the
    value of 0 may mean the service is not in a job mode, or it may
    mean the job-mode service has no tasks yet Completed.
    
    *
    * @param int|null $completedTasks
    *
    * @return self
    */
    public function setCompletedTasks(?int $completedTasks) : self
    {
        $this->initialized['completedTasks'] = true;
        $this->completedTasks = $completedTasks;
        return $this;
    }
}
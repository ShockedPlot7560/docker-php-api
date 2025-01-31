<?php

namespace Docker\API\Model;

class ContainersIdTopGetJsonResponse200 extends \ArrayObject
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
     * The ps column titles
     *
     * @var list<string>|null
     */
    protected $titles;
    /**
    * Each process running in the container, where each is process
    is an array of values corresponding to the titles.
    
    *
    * @var list<list<string>>|null
    */
    protected $processes;
    /**
     * The ps column titles
     *
     * @return list<string>|null
     */
    public function getTitles() : ?array
    {
        return $this->titles;
    }
    /**
     * The ps column titles
     *
     * @param list<string>|null $titles
     *
     * @return self
     */
    public function setTitles(?array $titles) : self
    {
        $this->initialized['titles'] = true;
        $this->titles = $titles;
        return $this;
    }
    /**
    * Each process running in the container, where each is process
    is an array of values corresponding to the titles.
    
    *
    * @return list<list<string>>|null
    */
    public function getProcesses() : ?array
    {
        return $this->processes;
    }
    /**
    * Each process running in the container, where each is process
    is an array of values corresponding to the titles.
    
    *
    * @param list<list<string>>|null $processes
    *
    * @return self
    */
    public function setProcesses(?array $processes) : self
    {
        $this->initialized['processes'] = true;
        $this->processes = $processes;
        return $this;
    }
}
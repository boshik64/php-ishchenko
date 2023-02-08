<?php

class Task
{
    private string $taskname;
    private string $taskdescription;
    private bool $isDone;
    private ?string $id;


    public function __construct(string $taskname, $taskdescription, $isDone = false, $id = null)
    {
        $this->taskname = $taskname;
        $this->taskdescription = $taskdescription;
        $this->isDone = $isDone;
        $this->id = $id;
    }


    public function getTaskId()
    {
        return $this->id;
    }


    public function getTaskname(): string
    {
        return $this->taskname;
    }

    public function getTaskdescription(): string
    {
        return $this->taskdescription;
    }

    public function getTaskStatus(): bool
    {
        return $this->isDone;
    }
}
<?php

;

class TaskProvider
{


    public function addTask(Task $task)
    {
        $_SESSION['tasks'][md5($task->getTaskname() . $task->getTaskdescription() . time())] = [
            'taskname' => $task->getTaskname(),
            'taskdescription' => $task->getTaskdescription(),
            'taskstatus' => $task->getTaskStatus(),
            'taskid' => $task->getTaskId()
        ];

    }


    public function getTasks()
    {
        $tasks = [];
        foreach ($_SESSION['tasks'] ?? [] as $key => $task) {
            if ($task['taskstatus'] == true) {
                $tasks[] = new Task($task['taskname'], $task['taskdescription'], $task['taskstatus'], $key);
            }
        }
        return $tasks;
    }

    public function delTask($id)
    {
        unset($_SESSION['tasks'][$id]);
    }

    public function updateTask($id, $params)
    {
        $task = $_SESSION['tasks'][$id];
        foreach ($params as $key => $value) {
            $task[$key] = $value;
        }
        $_SESSION['tasks'][$id] = $task;
    }

    public function getUndoneList()
    {
        $tasks = [];
        foreach ($_SESSION['tasks'] ?? [] as $key => $task) {
            if ($task['taskstatus'] == false) {
                $tasks[] = new Task($task['taskname'], $task['taskdescription'], $task['taskstatus'], $key);
            }
        }
        return $tasks;
    }

}
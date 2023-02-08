<?php

$todoList = [];

class User
{
    private string $firstName;
    private string $lastName;
    private int $age;

    public function __construct($firstName, $lastName, $age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getAge()
    {
        return $this->age;
    }
}


class Task
{
    private string $description;
    private string $dateCreated;
    private string $dateUpdated;
    private string $dateDone;
    private int $priority;
    private bool $isDone;
    private User $user;
    private array $comments = [];

    public function __construct($description, $priority, $user)
    {
        $this->description = $description;
        $this->dateCreated = date("Y-m-d H:i:s");
        $this->dateUpdated = date("Y-m-d H:i:s");
        $this->priority = $priority;
        $this->isDone = false;
        $this->user = $user;

    }

    public function addComment($comments)
    {
        $this->comments[] = $comments;
    }


    public function markAsDone(): void
    {
        $this->isDone = true;
        $this->dateUpdated = date("Y-m-d H:i:s");
        $this->dateDone = date("Y-m-d H:i:s");
    }

    public function getDescription(): string
    {
        return "Задача: " . $this->description;
    }

    public function getDateCreated(): string
    {
        return "Дата создания: " . $this->dateCreated;
    }
    public function getDateUdpdated(): string
    {
        return "Дата обновления: " . $this->dateUpdated;
    }
    public function getDateDone(): string
    {
        return "Дата выполнения: " . $this->dateDone;
    }

    public function getUser(): User
    {
        return $this->user;
    }


}



class Comment
{

    private User $user;
    private Task $task;
    private string $text;

    public function __construct($user, $task, $text)
    {
        $this->user = $user;
        $this->task = $task;
        $this->text = $text;
    }


    public function setText($text): string
    {
        return $this->text = $text;
    }

    public function getText(): string
    {
        return $this->text;
    }


}

class TaskService
{
    private User $user;
    private Task $task;
    private string $text;

    public static function addComment(User $user, Task $task, string $text)
    {
        $task->addComment(new Comment($user, $task, $text));
    }

}





$pasha = new User('Паша', 'Финогентов', 54);
$admin = new User('Admin', 'Admin', 99);

$newTask = new Task('Сделать домашнее задание', 5, $pasha);
sleep(1);
$todoList[] = $newTask;
TaskService::addComment($pasha, $newTask, "Сделал");
TaskService::addComment($admin, $newTask, "Переделывай");
TaskService::addComment($pasha, $newTask, "Принял");
TaskService::addComment($pasha, $newTask, "Переделал домашнее задание");
sleep(1);
$newTask->markAsDone() . PHP_EOL;
sleep(1);
var_dump($newTask);
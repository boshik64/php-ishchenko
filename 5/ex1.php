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

    public function __construct($description, $priority, $user)
    {
        $this->description = $description;
        $this->dateCreated = date("Y-m-d H:i:s");
        $this->dateUpdated = date("Y-m-d H:i:s");
        $this->priority = $priority;
        $this->isDone = false;
        $this->user = $user;

    }


    public function markAsDone(): void
    {
        $this->isDone = true;
        $this->dateUpdated = date("Y-m-d H:i:s");
        $this->dateDone = date("Y-m-d H:i:s");
    }

    public function setDescription($text): void
    {

        $this->description = $text;
        $this->dateUpdated = date("Y-m-d H:i:s");
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
$pasha = new User('Паша', 'Финогентов', 54);
$newTask = new Task('Убраться', 5, $pasha);
$todoList[] = $newTask;
sleep(2);
$newTask->setDescription('Провести генеральную уборку');
sleep(2);
$newTask->markAsDone() . PHP_EOL;
var_dump($todoList);
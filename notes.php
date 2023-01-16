<?php

// function find($start, $history, $target)
// {
//     if ($start == $target)
//         echo ("{$target}={$history}\n");
//     elseif ($start > $target)
//         return NULL;
//     else
//         return find($start + 5, "({$history}+5)", $target)
//             || find($start * 3, "({$history}*3)", $target);
//     return NULL;
// }

// find(1, 1, 99);



// $numbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];


// $divider = function ($number) {
//     if ($number % 2 == 0) {
//         return ("четное\n");
//     } else {
//         return ("нечетное\n");
//     }
// };



// $result = array_map(fn($number) => $number % 2 == 0 ? "четное" : "нечетное", $numbers);

// print_r($result);




// function someFunc(array $numbers): array
// {
//     $result[] = "max: " . max($numbers);
//     $result[] = "min: " . min($numbers);
//     $result[] = "avg: " . array_sum($numbers) / count($numbers);
//     return $result;
// }

// var_dump(someFunc([2, 4, 5, 1232, 5232, 2, 0]));

// class Inventory
// {
//     public array $items = [];
// }


// class Unit
// {
//     protected string $name;
//     public int $hp;
//     public int $strength;
//     public int $level;
//     private Inventory $inventory;


//     public function __construct($name, $hp, $strength, $level)
//     {
//         $this->inventory = new Inventory();
//         $this->name = $name;
//         $this->hp = $hp;
//         $this->strength = $strength;
//         $this->level = $level;

//     }

//     public function attack(Unit $target)
//     {
//         $damage = random_int(round($this->strength / 100 * 30), $this->strength);
//         $target->hp -= $damage;
//         echo "$this->name ($this->level) атакует $target->name($target->level) на $damage урона." . PHP_EOL;
//         echo "У $target->name($target->level) остается $target->hp hp" . PHP_EOL;
//     }
//     public function info()
//     {
//         echo "Я $this->name и у меня $this->hp HP" . PHP_EOL;
//     }

// }

// $player1 = new Unit("Геральд", 100, 14, 9);
// $player2 = new Unit("Ogrymage", 100, 21, 11);


// while ($player2->hp >= 0) {
//     $button = readline("Для удара введите '1'" . PHP_EOL);
//     if ($button == 1) {
//         $player1->attack($player2);
//     }
// }
// ;



// class Math
// {
//     const PI = 3.14;
//     static function add()
//     {

//     }
// }

// Math::add();
// echo Math::PI;



// $todoList = [];

// class User
// {
//     private string $firstName;
//     private string $lastName;
//     private int $age;

//     public function __construct($firstName, $lastName, $age)
//     {
//         $this->firstName = $firstName;
//         $this->lastName = $lastName;
//         $this->age = $age;
//     }

//     public function getFullName()
//     {
//         return $this->firstName . ' ' . $this->lastName;
//     }

//     public function getAge()
//     {
//         return $this->age;
//     }
// }


// class Task
// {
//     private string $description;
//     private string $dateCreated;
//     private string $dateUpdated;
//     private string $dateDone;
//     private int $priority;
//     private bool $isDone;
//     private User $user;
//     private array $comments = [];

//     public function __construct($description, $priority, $user)
//     {
//         $this->description = $description;
//         $this->dateCreated = date("Y-m-d H:i:s");
//         $this->dateUpdated = date("Y-m-d H:i:s");
//         $this->priority = $priority;
//         $this->isDone = false;
//         $this->user = $user;

//     }

//     public function addComment($comments)
//     {
//         $this->comments[] = $comments;
//     }


//     public function markAsDone(): void
//     {
//         $this->isDone = true;
//         $this->dateUpdated = date("Y-m-d H:i:s");
//         $this->dateDone = date("Y-m-d H:i:s");
//     }

//     public function getDescription(): string
//     {
//         return "Задача: " . $this->description;
//     }

//     public function getDateCreated(): string
//     {
//         return "Дата создания: " . $this->dateCreated;
//     }
//     public function getDateUdpdated(): string
//     {
//         return "Дата обновления: " . $this->dateUpdated;
//     }
//     public function getDateDone(): string
//     {
//         return "Дата выполнения: " . $this->dateDone;
//     }

//     public function getUser(): User
//     {
//         return $this->user;
//     }


// }



// class Comment
// {

//     private User $user;
//     private Task $task;
//     private string $text;

//     public function __construct($user, $task, $text)
//     {
//         $this->user = $user;
//         $this->task = $task;
//         $this->text = $text;
//     }


//     public function setText($text): string
//     {
//         return $this->text = $text;
//     }

//     public function getText(): string
//     {
//         return $this->text;
//     }


// }

// class TaskService
// {
//     private User $user;
//     private Task $task;
//     private string $text;

//     public static function addComment(User $user, Task $task, string $text)
//     {
//         $task->addComment(new Comment($user, $task, $text));
//     }

// }





// $pasha = new User('Паша', 'Финогентов', 54);

// $newTask = new Task('Сделать то-то', 5, $pasha);
// $todoList[] = $newTask;
// sleep(2);
// $newTask->markAsDone() . PHP_EOL;
// TaskService::addComment($pasha, $newTask, "лялляляля");
// var_dump($newTask);






class Product
{
    private string $title;
    private float $price;
    private array $components = [];

    public function __construct(string $title, float $price = 0, array $components = [])
    {
        $this->title = $title;
        $this->components = $components;

        if (empty($this->components)) {
            $this->price = $price;
        } else {
            $this->recalculate();
        }
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
    public function getTitle(): string
    {
        return $this->title;
    }
    public function recalculate()
    {
        if (empty($this->components)) {
            return false;
        }
        $this->price = array_reduce($this->components, function ($carry, Product $item) {
            return $carry + $item->getPrice();
        }, 0);
    }
    public function getPrice(): float
    {
        return $this->price;
    }


    public function addComponent(Product $product): bool
    {
        if (empty($product->components)) {
            $this->components[] = $product;
            $this->recalculate();
            return true;
        }
        return false;
    }
}


class Cart
{
    private array $items = [];

    public function getTotalPrice(): float
    {
        return array_reduce($this->items, function ($carry, Product $item) {
            return $carry + $item->getPrice();
        }, 0);
    }

    public function addProduct(Product $product)
    {
        $this->items[] = $product;
    }

    public function addProducts(array $products)
    {
        foreach ($products as $product) {
            $this->addProduct($product);
        }
    }
    public function remProduct(Product $product)
    {
        if (in_array($product, $this->items)) {
            unset($this->items[array_search($product, $this->items)]);
        } else {
            return false;
        }
    }


}


$keyBoard = new Product("keychron", 49.99);
$mouse = new Product("X7", 29.95);
$devices = new Product("Набор клавиатура + мышь", 0, [$keyBoard, $mouse]);
$hdmi = new Product('hdmi', 15);

// print_r($devices->getPrice() . PHP_EOL);
$devices->addComponent($hdmi);
// print_r($devices->getPrice() . PHP_EOL);
// var_dump($devices->addComponent($devices));
// print_r($devices->getPrice() . PHP_EOL);
var_dump($devices->getPrice());
$newCart = new Cart();
$newCart->addProducts([$keyBoard, $mouse, $devices]);
var_dump($newCart);
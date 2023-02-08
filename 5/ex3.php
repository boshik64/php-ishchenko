<?php


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
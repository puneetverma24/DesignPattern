<?php
interface FoodItem
{
    public function cost();
}


class Burger implements FoodItem
{
    public function cost () {
        return 4;
    }
}

class Cheese  implements FoodItem{
    private $item;

    public function __construct (FoodItem $item) {
        $this->item = $item;
    }

    public function cost ()
    {
        return $this->item->cost() + 0.25;
    }
}

// now decorate with patty
class Patty implements FoodItem
{
    private $item;
    public function __construct (FoodItem $item) {
        $this->item = $item;
    }    public function cost () {
    return $this->item->cost() + 1;
}
}



$b = new Burger();
echo $b->cost(); // burger cost
echo "\n";


$c = new Cheese($b); // passing burger
echo $c->cost(); // burger + cheese
echo "\n";

$pb = new Patty($b); // passing burger
echo $pb->cost(); //burger +patty
echo "\n";

$pc = new Patty($c); //burger+cheese+patty
echo $pc->cost(); // 5.25
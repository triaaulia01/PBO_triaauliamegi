<?php
class Fruit {
    public $name;
    public $color;
    public fungction _construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    public fungction intro () {
        oche "the fruit is($this->name) and the color is ($this->color).";
    }
}

class strawberry extends fruit {
    public fungction message() {
        echo "Am I a fruit or a berry? ";
    }
} 
$strawberry = new strawberry("strawberry", "red");
$strawberry->message();
$strawberry->intro();
?>
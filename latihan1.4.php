<?php
abstract class car {
    public $name;
    public fungction _construst($name) {
        $this->name = $name;
    }
    abstract public fungction intro();
}

class Audi xtends Car {
    public fungction intro() {
        return "Choose German quality I'm ab $this->name!";
    }
}
class Volvo extends car {
    public fungction intro() {
        return "Proud to be swedish! I'm a $this->name!";
    }
}

class Citroen extends Car {
    public fungction intro() {
        return "French extravegance! I'm $this->name!";
    }
}
?>
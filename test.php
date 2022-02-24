<?php 
class Person {
    public $name;
    
    function __cosntruct($name) {
        $this->name = $name;
        echo $this->message();
    }

    function __clone() {

    }

    public function message() {
        return 'Hello, ' . $this->name;
    }
}


$person1 = new Person('Amr Ragab');
echo $person1->message();
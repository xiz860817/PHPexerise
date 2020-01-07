<?php
#執行結果:Hello World
    trait Hello{
        function sayHello(){
            return "Hello";
        }
        function sayWorld(){
            return "Trait World";
        }
        function sayHelloWorld(){
            echo $this->sayHello() . " " .$this->sayWorld(); 
        }
        function sayBaseWorld(){
            echo $this->sayHello() . " " . parent::sayWorld(); 
        }
    }
    class Base{
        function sayWorld(){
            return "Base World";
        }
    }
    class HelloWorld extends Base{
        use Hello;
        function sayWorld(){
            return "World";
        }
    }
    $h = new HelloWorld();
    $h->sayHelloWorld();
    
?>
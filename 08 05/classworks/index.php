<?php
//Parašyti PHP klasę, kuri parašytų “Sveiki, mano vardas yra {vardas}”, kur {vardas} būtų metodo argumento vertė klasės viduje.(objektiškai)


class Person {
    private string $firstname;
    public function __construct($firstname) {
        $this->firstname = $firstname;
    }
    public function greet(): string
    {
        return "Hello, my name is".$this->firstname;
    }


}
$name = new Person(" Arunas", );
echo $name->greet();


       
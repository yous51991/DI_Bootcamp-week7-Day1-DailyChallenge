<?php

class User
{
    public string $firstName;

    public function __construct($name)
    {
        $this->firstName = $name;
    }

    public function hello()
    {
        echo "Hello " . $this->firstName;
    }
}

$user1 = new User("Roe");
$user1->hello();

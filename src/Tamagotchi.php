<?php
class Tamagotchi
{
    private $name;
    private $food;
    private $rest;


    function __construct($tam_name, $tam_food="25", $tam_rest="25")
    {
        $this->name = $tam_name;
        $this->food = $tam_food;
        $this->rest = $tam_rest;
    }

    function setName($new_name)
    {
        $this->name = $new_name;
    }

    function getName()
    {
        return $this->name;
    }

    function getFood()
    {
        return $this->food;
    }

    function getRest()
    {
        return $this->rest;
    }

    function save()
    {
        array_push($_SESSION['list_of_tamagotchis'], $this);
    }

    static function getAll()
    {
        return $_SESSION['list_of_tamagotchis'];
    }

    static function deleteAll()
    {
        $_SESSION['list_of_tamagotchis'] = array();
    }

}
?>

<?php
class Tamagotchi
{
    private $name;
    private $food;
    private $rest;
    private $time;


    function __construct($tam_name)
    {
        $this->name = $tam_name;
        $this->time = 0;
        $this->food = rand (2, 10);
        $this->rest = rand (2, 10);
    }

    // Getters & Setter
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

    // Functions
    function time()
    {


    }

    function loseFood()
    {

    }

    function loseRest()
    {

    }







    function feed()
    {
        $this->food += rand (1,5);
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

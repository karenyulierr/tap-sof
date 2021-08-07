<?php

class Competitor
{
    private $id;
    private $name;
    private $score;
    private $date_creat;

    function __construct($name = null, $score = null, $date_creat = null)
    {
        $this->name = $name;
        $this->score = $score;
        $this->date_creat = $date_creat;
    }

    function getId()
    {
        return $this->id;
    }
    function setId($id)
    {
        $this->id = $id;
    }

    function getName()
    {
        return $this->name;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function getScore()
    {
        return $this->score;
    }

    function setScore($score)
    {
        $this->score = $score;
    }

    function getDateCreat()
    {
        return $this->date_creat;
    }

    function setDateCreat($date_creat)
    {
        $this->created_at = $date_creat;
    }
}

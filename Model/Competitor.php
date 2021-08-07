<?php

class Competitor
{
    private $id;
    private $name;
    private $score;

    function __construct($name = null, $score = null, $created_at = null)
    {
        $this->name = $name;
        $this->score = $score;
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

    function getCreatedAt()
    {
        return $this->created_at;
    }

    function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }
}

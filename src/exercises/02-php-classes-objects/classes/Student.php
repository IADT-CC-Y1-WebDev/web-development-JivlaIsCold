<?php


class StudentAccount {
    protected $Name;
    protected $Number;


    public function __construct($name, $num = "") {
        $this->Name = $name;
        $this->Number = $num;

        if (!isset($this->Number) || $this->Number === "") {
            throw new Exception("Student must have a Number");
        }
    }

    public function getName() {
        return $this->Name;
    }
     public function getNumber() {
        return $this->Number;
    }
}
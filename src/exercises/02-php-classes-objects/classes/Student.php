<?php


class StudentAccount {
    private static $accounts = [];
    private static $count = 0;

    protected $Name;
    protected $Number;


    public function __construct($name, $num = "") {
        $this->Name = $name;
        $this->Number = $num;

        if (!isset($this->Number) || $this->Number === "") {
            throw new Exception("Student must have a Number");
        }

        self::$count++;
        self::$accounts[$num] = $this;

       
    }

    public function __toString() {
        $format = "Student: %s (%s)";
        return sprintf($format, $this->Name, $this->Number);
    }

    


    // public function __destruct() {
    //     echo "Closing account for {$this->Name}<br>";

    // }
    public function getName() {
        return $this->Name;
    }
    public function getNumber() {
        return $this->Number;
    }

    public static function findAll() {
        return self::$accounts;
    }
    public static function findByNumber($num) {
        return self::$accounts[$num] ?? null;
    }
    public static function getCount() {
        return self::$count;
    }
}



<?php

require_once __DIR__ . '/Student.php';

class postgrad extends StudentAccount {
    protected $supervisor;
    protected $topic;
    
    public function __Construct($name, $num, $Supervisor, $Topic) {
        echo "Constructing Profile <br>";
        parent::__construct($name, $num);
        $this->supervisor = $Supervisor;
        $this->topic = $Topic;

        
    }

    public function __toString() {
        return "Name: {$this->Name}, Number: {$this->Number}, Course: {$this->supervisor}, Year: {$this->topic}";
    }


     public function getSupervisor() {
        return $this->supervisor;
    }
    public function gettopic() {
        return $this->topic;
    }
}
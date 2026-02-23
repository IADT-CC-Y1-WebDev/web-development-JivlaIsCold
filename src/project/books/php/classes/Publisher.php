<?php

class Publisher
{
    // public properties for each database column
    public $id;
    public $Name;
    

    // private $db property for database connection
    private $db;

    // =========================================================================
    // Exercise 8: Book Class Basics
    // =========================================================================
    public function __construct($data = [])
    {
        // TODO: Get database connection from DB singleton
        // TODO: If $data is not empty, populate properties using null coalescing operator
        $this->db = DB::getInstance()->getConnection();
        
        if (!empty($data)) {
            $this->id = $data['id'] ?? null;
            $this->Name = $data['Name'] ?? null;
           
        }
    }

    // =========================================================================
    // Exercise 9: Finder Methods
    // =========================================================================
    public static function findAll()
    {
        $db = DB::getInstance()->getConnection();
        $stmt = $db->prepare("SELECT * FROM publishers ORDER BY name");
        $stmt->execute();

        $publishers = [];
        while ($row = $stmt->fetch()) {
            $publishers[] = new Publisher($row);
        }

        return $publishers;
    }

    // =========================================================================
    // Exercise 9: Finder Methods
    // =========================================================================
    public static function findById($id)
    {
        // TODO: Implement this method

        $db = DB::getInstance()->getConnection();
        $stmt = $db->prepare("SELECT * FROM publishers WHERE id = :id");
        $stmt->execute(["id" => $id]);

        $publishers = $stmt->fetch();
        if ($publishers) {
            return new Publisher($publishers);
        }

        return null;
    }


    public function toArray()
    {

        return [
            'id' => $this->id,
            'Name' => $this->Name,
            

        ];
    }
}

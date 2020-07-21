<?php


class DB
{
    public $db;
    public $stmt;
    public $row;
    public $arr = [];


    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=test', 'root','57447210');
    }

    public function select($sql)
    {
        $this->stmt = $this->db->prepare($sql);
        $this->stmt->execute();

        //var_dump($this->stmt->fetch(PDO::FETCH_OBJ));
        while($this->row = $this->stmt->fetch(PDO::FETCH_OBJ)){
            //$this->row->id." - ".$this->row->name." - ".$this->row->number."<br>";

            array_push($this->arr, $this->row->name, $this->row->number);

        }

    }


}
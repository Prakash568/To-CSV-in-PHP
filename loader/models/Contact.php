<?php
class Contact
{

    public $id;
    public $first_name;
    public $last_name;

    public function __construct($id, $fname, $lname)
    {
        $this->id = $id;
        $this->first_name = $fname;
        $this->last_name = $lname;
    }

    public function To_CSV(){
        return $this->id.','.$this->first_name.','.$this->last_name."\n";
    }
}
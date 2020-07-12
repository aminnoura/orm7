<?php
namespace orm;

class User extends DbTasks {
    private $id;
    private $firstname;
    private $lastname;
    private $age;
    private $gender;
    private $role;
    private $location;
    private $note;

    public function __construct(){
        // call parent constructor
        parent::__construct();
    }
}
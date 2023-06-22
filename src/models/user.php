<?php

require_once 'src/database/database.php';

class User{

    public function createUser(){
        $db = new Database;
        $connection = $db->getConnection();

        $hashedPassword = password_hash($this->getPassword(), PASSWORD_DEFAULT);




        $request = $connection->prepare('INSERT INTO users (firstName, lastName, email, password, username) VALUES (:firstName, :lastName, :email, :password, :username)');

        $request->bindParam(":firstName", $this->firstName);
        $request->bindParam(":lastName", $this->lastName);
        $request->bindParam(":email", $this->email);
        $request->bindParam(":password", $hashedPassword);
        $request->bindParam(":username", $this->username);

        if($request->execute()){
            return true;
        }
        return false;
    }

    public function setId($id):void{
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setFirstName($firstName):void{
        $this->firstName = $firstName;
    }

    public function getFirstName(){
        return $this->firstName;
    }

    public function setLastName($lastName):void{
        $this->lastName = $lastName;
    }

    public function getLastName(){
        return $this->lastName;
    }

    public function setEmail($email):void{
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setPassword($password):void{
        $this->password = $password;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setUsername($username):void{
        $this->username = $username;
    }

    public function getUsername(){
        return $this->username;
    }
}
?>
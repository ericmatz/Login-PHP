<?php
require 'Database.class.php';

class User
{

    private $uid;
    private $email;
    private $name;
    private $database;

    public function __construct(int $uid)
    {
        try {
            $this->database = new Database();
            $this->buildUser($uid);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    private function buildUser(int $uid)
    {
        try {
            //TODO: Add Error catching for each SQL step
            if ($sth = $this->database->connection->prepare("SELECT uid, email, name FROM Users WHERE uid = ?")) {
                $sth->bind_param("i", $uid);
                $sth->execute();
                $sth->bind_result($uid, $email, $name);
                $sth->fetch();

                $this->uid = $uid;
                $this->email = $email;
                $this->name = $name;
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function getUID()
    {
        return $this->uid;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setName(string $name)
    {
        //TODO: Implement
    }

    public function setPassword(string $password)
    {
        //TODO: Implement
    }
}

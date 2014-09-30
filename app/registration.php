<?php

class Registration
{
    const DB_NAME = 'youfree';
    const DB_HOST = '127.0.0.1';
    const DB_USER = 'root';
    const DB_PASS = 'gWm2_vrkA-@p';

    private $connection;

    public $first_name;
    public $last_name;
    public $phone;
    public $gender;
    public $email;
    public $birthdate;
    public $is_smoker;

    function __construct()
    {
        $this->connection = $this->getDbConnection();
    }

    /**
     * Return DB connection
     *
     * @return PDO
     */
    private function getDbConnection()
    {
        $dsn = "mysql:dbname=" . self::DB_NAME . ";host=" . self::DB_HOST.'';

        try {
            $conn = new PDO($dsn, self::DB_USER, self::DB_PASS);
        } catch (PDOException $e) {
            echo 'DB connection is invalid: ' . $e->getMessage();
        }

        return $conn;
    }

    /**
     * Save data in DB
     *
     * @return bool
     * @throws Exception
     */
    public function  save()
    {
        $sql = "INSERT INTO registration (first_name,last_name,phone,gender,email,birthdate,is_smoker) VALUES (:first_name,:last_name,:phone,:gender,:email,:birthdate,:is_smoker)";

        try {
            $q = $this->connection->prepare($sql);
            $q->execute(array(
                ':first_name' => $this->first_name,
                ':last_name'  => $this->last_name,
                ':phone'      => $this->phone,
                ':gender'     => $this->gender,
                ':email'      => $this->email,
                ':birthdate'  => date('Y-m-d', strtotime($this->birthdate)),
                ':is_smoker'  => $this->is_smoker
            ));
        } catch (Exception $e) {
            throw $e;
        }

        return true;
    }
}
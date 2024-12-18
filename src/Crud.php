<?php
//layer2
namespace G207\Crud;

use PDO;

abstract class Crud
{
    protected $connection;
    protected $stmt;

    public function __construct($dsn, $username, $password)
    {
        $this->connection = new PDO($dsn, $username, $password);
    }
    abstract public function index(string $table, string|array $columns = "*");
    abstract  public function create();
    abstract public function store();
    final public function execute()
    {
        $this->stmt->execute();
        return $this;
    }
    final public function all()
    {
        $data = $this->stmt->fetchAll();
        print_r($data);
    }
}

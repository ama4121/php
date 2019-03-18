<?php

class QueryBuilder
{
    protected $PDO;

    /**
     * QueryBuilder constructor.
     */
    public function __construct($PDO)
    {
        $this->PDO=$PDO;
    }

    public function selectAll($table){
        $statement = $this->PDO->prepare("select * from {$table}");
        $statement ->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}
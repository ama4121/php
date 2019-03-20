<?php
namespace App\Core\Database;
use PDO;

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
    
    public function insert($table, $parameters)
    {
//        insert into tasks (description, completed) VALUES ('', false);
        $sql = sprintf('insert into %s (%s) values (%s)',
            $table,
            implode(', ',array_keys($parameters)),
            ':' . implode(', :',array_keys($parameters))
        );

        $statement = $this->PDO->prepare($sql);

        $statement ->execute($parameters);

//        dd($sql);

    }
    
}
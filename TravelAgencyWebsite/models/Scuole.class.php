<?php



class Scuole
{




    private $db;

    /**
     * Scuole constructor.
     * @param $db
     */
    public function __construct()
    {
        $this->db = new Db();
    }



    public function getScuoleAdulti($citta, $adulto, $giovane)
    {
        $query = 'select * from scuola where 1=1';

        if ($citta) {
            $query .= ' and `citta`=:citta ';
        }
        if ($adulto) {
            $query .= ' and `adulto`=:adulto ';
        }
        if ($giovane) {
            $query .= ' and `giovane`=:giovane ';
        }



        $query .= ' ORDER BY nome ASC';

        $statement = $this->db->prepare($query);
        if ($citta) {
            $statement->bindParam(':citta', $citta);
        }
        if ($adulto) {
            $statement->bindParam(':adulto', $adulto);
        }
        if ($giovane) {
            $statement->bindParam(':giovane', $giovane);
        }

        $statement->execute();
        //var_dump($statement->errorInfo());
        if ($statement->rowCount() >= 1) {
            return $statement->fetchAll(PDO::FETCH_OBJ);
        }
        return 0;

    }


    public function getScuoleGiovani($citta, $adulto, $giovane)
    {
        $query = 'select * from scuola where 1=1';
        if ($citta) {
            $query .= ' and `citta`=:citta ';
        }
        if ($adulto) {
            $query .= ' and `adulto`=:adulto ';
        }
        if ($giovane) {
            $query .= ' and `giovane`=:giovane ';
        }

        $query .= ' ORDER BY nome ASC';

        $statement = $this->db->prepare($query);
        if ($citta) {
            $statement->bindParam(':citta', $citta);
        }
        if ($adulto) {
            $statement->bindParam(':adulto', $adulto);
        }
        if ($giovane) {
            $statement->bindParam(':giovane', $giovane);
        }

        $statement->execute();
        //var_dump($statement->errorInfo());
        if ($statement->rowCount() >= 1) {
            return $statement->fetchAll(PDO::FETCH_OBJ);
        }
        return 0;

    }


}

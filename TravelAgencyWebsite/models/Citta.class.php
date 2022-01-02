<?php


class Citta
{


    private $db;

    /**
     * Citta constructor.
     * @param $db
     */
    public function __construct()
    {
        $this->db = new Db();
    }



    public function getCittaAdulti($nazione, $adulto, $giovane)
    {
        $query = 'select * from citta where 1=1';
        if ($nazione) {
            $query .= ' and `nazione`=:nazione ';
        }
        if ($adulto) {
            $query .= ' and `adulto`=:adulto ';
        }
        if ($giovane) {
            $query .= ' and `giovane`=:giovane ';
        }


        $query .= ' ORDER BY nome ASC';

        $statement = $this->db->prepare($query);
        if ($nazione) {
            $statement->bindParam(':nazione', $nazione);
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



    public function getCittaGiovani($nazione, $adulto, $giovane)
    {
        $query = 'select * from citta where 1=1';
        if ($nazione) {
            $query .= ' and `nazione`=:nazione ';
        }
        if ($adulto) {
            $query .= ' and `adulto`=:adulto ';
        }
        if ($giovane) {
            $query .= ' and `giovane`=:giovane ';
        }


        $query .= ' ORDER BY nome ASC';

        $statement = $this->db->prepare($query);
        if ($nazione) {
            $statement->bindParam(':nazione', $nazione);
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

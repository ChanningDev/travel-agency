<?php


class Nazioni {



    private $db;

    /**
     * Nazioni constructor.
     * @param $db
     */
    public function __construct()
    {
        $this->db = new Db();
    }



    public  function getUnaNazione($id)
    {
        $query = 'select * from nazione where id=:id ';

//        $query .= ' and attivo=1';

        $statement = $this->db->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->execute();
        //var_dump($statement->errorInfo());
        if ($statement->rowCount() >= 1) {
            return $statement->fetch(PDO::FETCH_OBJ);
        }
        return 0;

    }


    public function getTutteLeNazioni($continente = null)
    {
        $query = 'select * from nazione where 1=1';
        if ($continente) {
            $query .= ' and `continente`=:continente ';
        }
        $query .= ' ORDER BY nome ASC';

        $statement = $this->db->prepare($query);
        if ($continente) {
            $statement->bindParam(':continente', $continente);
        }
        $statement->execute();
        //var_dump($statement->errorInfo());
        if ($statement->rowCount() >= 1) {
            return $statement->fetchAll(PDO::FETCH_OBJ);
        }
        return 0;

    }



    public function getNazioniAdulti($adulto, $giovane)
    {
        $query = 'select * from nazione where 1=1';
        if ($adulto) {
            $query .= ' and `adulto`=:adulto ';
        }
        if ($giovane) {
            $query .= ' and `giovane`=:giovane ';
        }

        $query .= ' ORDER BY nome ASC';

        $statement = $this->db->prepare($query);
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



    public function getNazioniGiovani($giovane, $adulto)
    {
        $query = 'select * from nazione where 1=1';
        if ($giovane) {
            $query .= ' and `giovane`=:giovane ';
        }
        if ($adulto) {
            $query .= ' and `adulto`=:adulto ';
        }

        $query .= ' ORDER BY nome ASC';

        $statement = $this->db->prepare($query);
        if ($giovane) {
            $statement->bindParam(':giovane', $giovane);
        }
        if ($adulto) {
            $statement->bindParam(':adulto', $adulto);
        }

        $statement->execute();
        //var_dump($statement->errorInfo());
        if ($statement->rowCount() >= 1) {
            return $statement->fetchAll(PDO::FETCH_OBJ);
        }
        return 0;

    }





//    public  function getNazioniAdulti()
//    {
//        $query = 'select * from nazione where adulto=1 ';
//
//        //$query .= ' and giovane=0';
//
//        $statement = $this->db->prepare($query);
//        $statement->bindParam('adulto', $adulto);
//        $statement->execute();
//        //var_dump($statement->errorInfo());
//        if ($statement->rowCount() >= 1) {
//            return $statement->fetch(PDO::FETCH_OBJ);
//        }
//        return 0;
//
//    }
//
//
//
//    public  function getNazioniGiovani()
//    {
//        $query = 'select * from nazione where giovane=1 ';
//
//        //$query .= ' and attivo=1';
//
//        $statement = $this->db->prepare($query);
//        $statement->bindParam('giovane', $giovane);
//        $statement->execute();
//        //var_dump($statement->errorInfo());
//        if ($statement->rowCount() >= 1) {
//            return $statement->fetch(PDO::FETCH_OBJ);
//        }
//        return 0;
//
//    }


}

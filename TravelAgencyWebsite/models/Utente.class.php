<?php

//include_once './Persona.class.php';


class Utente extends Persona {


    private $nomeUtente;
    private $attivo;
    private $admin;

    /**
     * Utente constructor.
     * @param $nomeUtente
     * @param $attivo
     * @param $admin
     */
//    public function __construct($nomeUtente, $attivo, $admin)
//    {
//        $this->nomeUtente = $nomeUtente;
//        $this->attivo = $attivo;
//        $this->admin = $admin;
//    }


    /**
     * @return mixed
     */
    public function getNomeUtente()
    {
        return $this->nomeUtente;
    }

    /**
     * @param mixed $nomeUtente
     */
    public function setNomeUtente($nomeUtente)
    {
        $this->nomeUtente = $nomeUtente;
    }

    /**
     * @return mixed
     */
    public function getAttivo()
    {
        return $this->attivo;
    }

    /**
     * @param mixed $attivo
     */
    public function setAttivo($attivo)
    {
        $this->attivo = $attivo;
    }

    /**
     * @return mixed
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * @param mixed $admin
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;
    }

    //____________________________________________________________________________________________________
    // Metodo che verifica l'esistenza dei dati utente sul DB e previene SQL injection
    static function verificaUtente($db, $username, $password)
    {
        $query = 'select * from utente where uname=:username and pwd=:password and attivo=1';

        $statement = $db->prepare($query);//preparo la query

        //i parametri della query vengono sostituiti per evitare SQL injection
        $statement->bindParam(':username', $username, PDO::PARAM_STR);
        //$password = sha1($password);
        $statement->bindParam(':password', $password, PDO::PARAM_STR);

        $statement->execute();
        // var_dump($statement->errorInfo());
        // var_dump($statement);
        if ($statement->rowCount() >= 1)
        {
            return 1;
        }
        return 0;
    }
    //____________________________________________________________________________________________________



}























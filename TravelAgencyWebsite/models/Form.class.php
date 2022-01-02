<?php

class Form
{

    public $name;
    public $action;
    public $method;
    public $class;


    public function __construct($name, $action='?', $method='POST',$class)
    {
        $this->name=$name;
        $this->action=$action;
        $this->method=$method;
        $this->class=$class;

    }

    //____________________________________________________________________________________________________
    //questi due metodi utilizzano gli attributi di classe
    //Metodo per l’apertura del form
    public function open_form()
    {
        echo '<form name="'.$this->name.'"  action="'.$this->action.'"  method="'.$this->method.'">';
    }

    //Metodo per la chiusura del form
    public function close_form()
    {
        echo '</form>';
    }
    //____________________________________________________________________________________________________


    //Classe per l’aggiunta di un campo di input,
    public function add_input($name, $type, $value=null, $class=null)
    {
        echo '</br>';
        echo '<input type="'.$type.'" id="'.$name.'" name="'.$name.'" value="'.$value.'  "class="'.$class.'">';
        echo '</br>';
    }
    //____________________________________________________________________________________________________


    //Classe per l’aggiunta di un’area di testo,
    public function add_textArea($name, $rows, $cols)
    {
        echo '</br>';
        echo '<textarea id="'.$name.'" name="'.$name.'" rows="'.$rows.'" cols="'.$cols.'">';
        echo '</textarea>';
        echo '</br>';
    }
    //____________________________________________________________________________________________________


    //Classe per la stampa di una select. Necessita di un vettore in input
    //(e di un ciclo per la stampa)
    public function add_select()
    {
//
//        echo '</br>';
//        echo '<select name="cars" id="cars">
//              <option value="volvo">Volvo</option>
//              <option value="saab">Saab</option>
//              <option value="mercedes">Mercedes</option>
//              <option value="audi">Audi</option>
//              </select>';
//        echo '</br>';

        //simple arary (eventualmente da popolare con dati presi dal DB)
        $cars = array('Volvo','Saab','Mercedes','Audi');

        echo '</br>';
        echo '<select name="cars" id="cars">';

        // Iterating through the product array
        foreach($cars as $item){
            echo "<option value='strtolower($item)'>$item</option>";
        }
        echo '</select>';
        echo '</br>';
        echo '</br>';

    }
    //____________________________________________________________________________________________________



    public function submitButton($value)
    {
        echo'<input type="submit" value="'.$value.'">';
        echo '</br>';
    }
    //____________________________________________________________________________________________________



}

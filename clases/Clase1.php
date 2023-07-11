<?php
    class Clase1{
        // 1.Atributos con modificadores de acceso
        // private, public, protected
        public $nombre;
        public $email ;
        public $celular ;

        //2. Contructor (metodo magico) 
        // Un método es una función que está dentro de una clase
        // ideal para iniciar valores de propiedades
        // Palabra reservada this (Objeto actual)
        // En ocasiones se inicializa con valores parametrizados
        public function __construct($nombre , $email, $celular){ 
            $this-> nombre = $nombre;
            $this-> email = $email ;
            $this-> celular = $celular ;
        }

        // 3.metodos (Getters and Setter)
        // get -> obtener valores de Atributos
        // set -> modificar valores de atributos

        // UN OBJETO ES LA INSTANCIA DE LA CLASE
        
    }
    
    // Instancia de la clase (OBJETO) --> Variable de instancia
    $clases = new Clase1("Hola" , "Email" , 21321);
    echo $clases->nombre . "<br>";
    echo $clases->email . "<br>" ;
    echo $clases->celular;

?>
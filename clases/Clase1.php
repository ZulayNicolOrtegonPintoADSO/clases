<?php
    class Clase1{
        // 1.Atributos con modificadores de acceso
        // private, public, protected
        private $nombre;
        private $email ;
        private $celular ;

        //2. Contructor (metodo magico) 
        // Un método es una función que está dentro de una clase
        // ideal para iniciar valores de propiedades
        // Palabra reservada this (Objeto actual)
        // En ocasiones se inicializa con valores parametrizados


        // public function __construct($nombre , $email, $celular){ 
        //     $this-> nombre = $nombre;
        //     $this-> email = $email ;
        //     $this-> celular = $celular ;
        // }

        
        // 3.metodos (Getters and Setter)
        // get -> obtener valores de Atributos
        public function getNombre(){
            return $this->nombre;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getCelular(){
            return $this->celular;
        }

        // set -> modificar valores de atributos
        // UN OBJETO ES LA INSTANCIA DE LA CLASE
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function setCelular($celular){
            $this->celular = $celular;
        }
     
    }
    
    // Instancia de la clase (OBJETO) --> Variable de instancia
    // $clases = new Clase1("Hola" , "Email" , 21321);
    $clases = new Clase1;

    $clases->setNombre("Siu");
    $clases->setEmail("correo");
    $clases->setCelular(21321);

    echo $clases->getNombre() . "<br>";
    echo $clases->getEmail() . "<br>" ;
    echo $clases->getCelular();

?>
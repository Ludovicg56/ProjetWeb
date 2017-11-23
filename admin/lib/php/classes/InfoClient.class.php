<?php

//InfoClient.class.php

class InfoClient {
    
    private $_attributs_de_bd = array();
    
    public function __construct(array $data) {
        $this->hydrate($data);
    }
    
    
    //fonction qui ajoute des valeurs 
    private function hydrate(array $data){
        foreach($data as $key => $value){
            $this->$key = $value;
        }
    }
    
    //getter
    public function __get($name){
        if(isset($this->_attributs_de_bd[$name])){
            return $this->_attributs_de_bd[$name];
        }
    }
    
    public function __set($nom, $valeur) {
        $this->_attributs_de_bd[$nom] = $valeur;
    }
    
    public function faireQqch(){
        print "";
    }
}

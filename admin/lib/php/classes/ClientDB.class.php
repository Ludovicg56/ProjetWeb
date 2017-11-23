<?php

class ClientDB extends Client{

    private $_db;
    private $_clientArray = array();

    public function __construct($cnx) {
        $this->_db = $cnx;
    }
    
    public function getClient($email){
        $query="select * from gt_client where email_client=:email_client";
        try {
        $resultset = $this->_db->prepare($query);
        $resultset->bindValue(':email_client',$email, PDO::PARAM_STR);
        $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            try {
                //$_clientArray[] = new Client ($data);
                $_clientArray[]=$data;
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_clientArray;
    }
    
   
    
    public function addClient(array $data) {
//en commentaire : appel d'une fonction plpgsql stockée dans Postgresql, avec récupération
//de la valeur retournée
        /*$query="select ajout_client (:nom_client,:prenom_client,:email_client,:telephone,:adresse_client,"
                . ":numero,:codepostal,:localite) as retour";
         */
        $query = "insert into gt_client (nom_client,prenom_client,email_client,telephone,adresse_client,numero,codepostal,localite)"
                . " values (:nom_client,:prenom_client,:email_client,:telephone,:adresse_client,:numero,:codepostal,:localite)";

        try {
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':nom_client',$data['nom'], PDO::PARAM_STR);
            $resultset->bindValue(':prenom_client',$data['prenom'], PDO::PARAM_STR);
            $resultset->bindValue(':email_client',$data['email1'], PDO::PARAM_STR);
            $resultset->bindValue(':telephone',$data['telephone'], PDO::PARAM_STR);
            $resultset->bindValue(':adresse_client',$data['adresse'], PDO::PARAM_STR);
            $resultset->bindValue(':numero',$data['numero'], PDO::PARAM_STR);
            $resultset->bindValue(':codepostal',$data['codepostal'], PDO::PARAM_STR);
            $resultset->bindValue(':localite',$data['localite'], PDO::PARAM_STR);   
            $resultset->execute();
            //$retour = $resultset->fetchColumn(0);
            
            //return $retour;
        }catch(PDOException $e){
            print "<br/>Echec de l'insertion";
            print $e->getMessage();
        }        
    }
}

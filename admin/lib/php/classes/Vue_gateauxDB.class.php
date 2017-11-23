<?php

class Vue_GateauxDB {
    private $_db;
    function __construct($_db) {
        $this->_db = $_db;
    }
    
    //liste des gâteaux correspondant au choix du type dans liste déroulante
    function getVue_gateauxType($id){
         try {            
            $query = "SELECT * FROM VUE_GATEAUX where ID_GT_TYPE_GATEAU=:id_gt_type_gateau";
            $resultset = $this->_db->prepare($query);  
            $resultset->bindValue(':id_gt_type_gateau',$id);
            $resultset->execute();
            $data = $resultset->fetchAll();
            //var_dump($data);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            try {
                $_infoArray[] = $data;
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_infoArray;
    }
    

    function getVue_gateau(){
         try {
            $query = "SELECT * FROM VUE_GATEAUX order by type_gateau,nom_gateau";
            $resultset = $this->_db->prepare($query);  
            $resultset->execute();
            $data = $resultset->fetchAll();
            //var_dump($data);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            try {
                $_infoArray[] = $data;
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_infoArray;
    }
    
    function getVue_gateauProduit($id){
         try {            
            $query = "SELECT * FROM VUE_GATEAUX where id_gt_gateau=:id_gt_gateau";
            $resultset = $this->_db->prepare($query);  
            $resultset->bindValue(':id_gt_gateau',$id);
            $resultset->execute();
            $data = $resultset->fetchAll();
            //var_dump($data);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            try {
                $_infoArray[] = $data;
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_infoArray;
    }
}

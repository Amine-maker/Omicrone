<?php

class PdoOmi extends PDO {   		
      	private static $serveur='pgsql:host=localhost';
      	private static $bdd='dbname=omicrone';   		
      	private static $user='postgres';    		
      	private static $mdp='test';	
	private static $monPdo;
	private static $monPdoOmi=null;
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	public function __construct(){
    	PdoOmi::$monPdo = parent::__construct(PdoOmi::$serveur.';'.PdoOmi::$bdd, PdoOmi::$user, PdoOmi::$mdp); 
		//PdoOmi::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdoOmi::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe
 
 * Appel : $instancePdoOmi = PdoOmi::getPdoOmi();
 
 * @return l'unique objet de la classe PdoOmi
 */
	public  static function getPdoOmi(){
		if(PdoOmi::$monPdoOmi==null){
			PdoOmi::$monPdoOmi= new PdoOmi();
		}
		return PdoOmi::$monPdoOmi;  
	}
        
//        public function getlistecontrat(){ //liste de contrat
//        $req="select idcontrat, typecontrat, datedebut, datefin, raisonsocial from contrat join client on contrat.idclient=client.idclient";
//        print_r($req);
//        //$lesContrats = array(); 
//        $rs= PdoOmi::$monPdo->query($req);
//        $ligne= $rs->fetchAll(PDO::FETCH_ASSOC);
//        return $ligne;
//        }
    
        
}
?>
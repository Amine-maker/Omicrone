<?php
require_once 'model/class.php';
include("vues/v_entete.php");
session_start();
$pdo = PdoOmi::getPdoOmi();
$contrat = new daoContrat();
$client = new DaoClient();
$contact = new DaoContact();
//var_dump($contrat);
if(!isset($_REQUEST['uc'])){
     $_REQUEST['uc'] = 'contrat';
}	 
$uc = $_REQUEST['uc'];
switch($uc){
	case 'contrat':{
            include("controleurs/c_contrat.php");
            break;
	}
        case 'client':{
            include 'controleurs/c_client.php';
            break;
        }
}
?>

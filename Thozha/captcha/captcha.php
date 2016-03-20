<?php 
session_start();


if($_REQUEST['action']=='captacha'){
 
	
if(isset($_SESSION['atm_j_captura'])) 
{
 if(empty($_POST['atm_j_captura']) === false) {
      if($_SESSION['atm_j_captura'] === $_POST['atm_j_captura']) {
                        echo 'ok';
                    }
			}
    }
	
	}

?>
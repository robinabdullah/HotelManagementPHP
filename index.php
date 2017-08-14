
<?php

	//var_dump($GLOBALS);
	define('APP_ROOT', "$_SERVER[DOCUMENT_ROOT]/Webtech/projectHotelManagement");
	$_SERVER['APP_ROOT'] = "/Webtech/projectHotelManagement";
	
	$_GET['person_login'] = 'view';
	
	$hasError=true;
	
		if(count($_GET)>0){
			$key = array_keys($_GET)[0]; //ex: person_add
			
			$path = explode("_", $key);
			if(count($path)==2){
				$hasError = false;
				
				$controller = $path[0]; //ex: person
				$view = $path[1]; //ex: add
				
				$isDispatchedByFrontController=true;
				include_once(APP_ROOT."/app/controller/".$controller."_controller.php");				
			}
		}
		if($hasError){
			include_once(APP_ROOT."/app/error.php");
		}

?>

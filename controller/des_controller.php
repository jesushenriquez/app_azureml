<?php

class des_controller{

	function index_forest(){
		$Carrera = '';
		$Sexo = '';
		$FechaNacimiento = '';
		$Edad = '';
		$Semestre = '';
		$AsignaturasCursadas = '';
		$AsignaturasAprobadas = '';
		$CreditosCursados = '';
		$CreditosAprobados = '';
		$PromedioUltimoPeriodo = '';
		$PromedioAcumulado = '';
		$Duracion = '';
		$estado ="";

		$title = "Multiclass Logistic Forest";
		require_once 'view/header.php';
		require_once 'view/forest/index.php';
		require_once 'view/footer.php';
	}

	function forest(){
			$Carrera = $_REQUEST['Carrera'];
			$Sexo = $_REQUEST['Sexo'];
			$FechaNacimiento = $_REQUEST['FNacimiento'];
			$Edad = $_REQUEST['Edad'];
			$Semestre = $_REQUEST['Semestre'];
			$AsignaturasCursadas = $_REQUEST['ACursadas'];
			$AsignaturasAprobadas = $_REQUEST['AAprobadas'];
			$CreditosCursados = $_REQUEST['CCursados'];
			$CreditosAprobados = $_REQUEST['CAprobados'];
			$PromedioUltimoPeriodo = $_REQUEST['PUPeriodo'];
			$PromedioAcumulado = $_REQUEST['PAcumulado'];
			$Duracion = $_REQUEST['Duracion'];

		error_reporting(E_ALL);
		ini_set('display_errors', 1);

		$url = 'https://ussouthcentral.services.azureml.net/workspaces/84f487abb46e4226bfce534dc272a055/services/9a319898506c40c1b4cec7ec1df58fed/execute?api-version=2.0&details=true';
		$api_key = 'BFn2zcgBH2UfOC/ZnQK+Xv6Ifwazp92Er97Vbv/+a+66umDsMt6BijHoLodnmyLOR2lS8aUMAX4jFKz0uH6dHA==';


		
			
		


		$data = array(
		  'Inputs'=> array(
		      'input1'=> array(
		          'ColumnNames' => array("Carrera", "Sexo", "FechaNacimiento", "Edad", "Semestre", "AsignaturasCursadas", "AsignaturasAprobadas", "CreditosCursados", "CreditosAprobados", "PromedioUltimoPeriodo", "PromedioAcumulado", "Duracion", "Estado"),
		          'Values' => array( array($Carrera, $Sexo, $FechaNacimiento, $Edad, $Semestre, $AsignaturasCursadas, $AsignaturasAprobadas, $CreditosCursados, $CreditosAprobados, $PromedioUltimoPeriodo, $PromedioAcumulado, $Duracion, "."))
		      ),
		  ),
		  'GlobalParameters'=> null
		);

		$body = json_encode($data);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Bearer '.$api_key, 'Accept: application/json'));
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

		$response  = json_decode(curl_exec($ch), true);
		//echo 'Curl error: ' . curl_error($ch);
		curl_close($ch);
		//var_dump($response);
		$estado = $response['Results']['output1']['value']['Values'][0][11];
		$title = "Multiclass Logistic Forest";
		require_once 'view/header.php';
		require_once 'view/forest/index.php';
		require_once 'view/footer.php';
	}

	function index_neural(){
		$Carrera = '';
		$Sexo = '';
		$FechaNacimiento = '';
		$Edad = '';
		$Semestre = '';
		$AsignaturasCursadas = '';
		$AsignaturasAprobadas = '';
		$CreditosCursados = '';
		$CreditosAprobados = '';
		$PromedioUltimoPeriodo = '';
		$PromedioAcumulado = '';
		$Duracion = '';
		$estado ="";

		$title = "Multiclass Neural Network";
		require_once 'view/header.php';
		require_once 'view/neural/index.php';
		require_once 'view/footer.php';
	}

	function neural(){
			$Carrera = $_REQUEST['Carrera'];
			$Sexo = $_REQUEST['Sexo'];
			$FechaNacimiento = $_REQUEST['FNacimiento'];
			$Edad = $_REQUEST['Edad'];
			$Semestre = $_REQUEST['Semestre'];
			$AsignaturasCursadas = $_REQUEST['ACursadas'];
			$AsignaturasAprobadas = $_REQUEST['AAprobadas'];
			$CreditosCursados = $_REQUEST['CCursados'];
			$CreditosAprobados = $_REQUEST['CAprobados'];
			$PromedioUltimoPeriodo = $_REQUEST['PUPeriodo'];
			$PromedioAcumulado = $_REQUEST['PAcumulado'];
			$Duracion = $_REQUEST['Duracion'];

		error_reporting(E_ALL);
		ini_set('display_errors', 1);

		$url = 'https://ussouthcentral.services.azureml.net/workspaces/84f487abb46e4226bfce534dc272a055/services/6ff409aea3ee45bbae71e13ba7e0a60a/execute?api-version=2.0&details=true';
		$api_key = 'I/dUGQbgG9vKnZhFqPudHt192FbeNvqIjg+TPvJLTqVb43LtQzIhXZS1njjbZ+x8jfW6HuM5ybs6wSpjdRmeDQ==';


		
			
		


		$data = array(
		  'Inputs'=> array(
		      'input1'=> array(
		          'ColumnNames' => array("Carrera", "Sexo", "FechaNacimiento", "Edad", "Semestre", "AsignaturasCursadas", "AsignaturasAprobadas", "CreditosCursados", "CreditosAprobados", "PromedioUltimoPeriodo", "PromedioAcumulado", "Duracion", "Estado"),
		          'Values' => array( array($Carrera, $Sexo, $FechaNacimiento, $Edad, $Semestre, $AsignaturasCursadas, $AsignaturasAprobadas, $CreditosCursados, $CreditosAprobados, $PromedioUltimoPeriodo, $PromedioAcumulado, $Duracion, "."))
		      ),
		  ),
		  'GlobalParameters'=> null
		);

		$body = json_encode($data);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Bearer '.$api_key, 'Accept: application/json'));
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

		$response  = json_decode(curl_exec($ch), true);
		//echo 'Curl error: ' . curl_error($ch);
		curl_close($ch);
		//var_dump($response);
		$estado = $response['Results']['output1']['value']['Values'][0][11];
		$title = "Multiclass Neural Network";
		require_once 'view/header.php';
		require_once 'view/neural/index.php';
		require_once 'view/footer.php';
	}

	function index_rules(){
		$Carrera = '';
		$Sexo = '';
		$FechaNacimiento = '';
		$Edad = '';
		$Semestre = '';
		$AsignaturasCursadas = '';
		$AsignaturasAprobadas = '';
		$CreditosCursados = '';
		$CreditosAprobados = '';
		$PromedioUltimoPeriodo = '';
		$PromedioAcumulado = '';
		$Duracion = '';
		$estado ="";

		$title = "Association Rules";
		require_once 'view/header.php';
		require_once 'view/rules/index.php';
		require_once 'view/footer.php';
	}

	function rules(){
		$Carrera = $_REQUEST['Carrera'];
		$Sexo = $_REQUEST['Sexo'];
		$FechaNacimiento = $_REQUEST['FNacimiento'];
		$Edad = $_REQUEST['Edad'];
		$Semestre = $_REQUEST['Semestre'];
		$AsignaturasCursadas = $_REQUEST['ACursadas'];
		$AsignaturasAprobadas = $_REQUEST['AAprobadas'];
		$CreditosCursados = $_REQUEST['CCursados'];
		$CreditosAprobados = $_REQUEST['CAprobados'];
		$PromedioUltimoPeriodo = $_REQUEST['PUPeriodo'];
		$PromedioAcumulado = $_REQUEST['PAcumulado'];
		$Duracion = $_REQUEST['Duracion'];
		$estado = '';

		#Reglas de Asociación

		#Activo
		if ($AsignaturasAprobadas > 14.7 && $AsignaturasAprobadas < 29.3) {
			$estado = 'ACTIVO';
		} elseif ($CreditosCursados > 49.2 && $CreditosCursados <97.3) {
			$estado = 'ACTIVO';
		}

		#Desertor
		if ($Semestre >= 1.0 && $Semestre <= 2.5 ) {
			$estado = 'DESERTOR';
		} elseif ($AsignaturasAprobadas >= 0.0 && $AsignaturasAprobadas <= 14.7) {
			$estado = 'DESERTOR';
		} elseif ($CreditosAprobados >= 0.0 && $CreditosAprobados <= 36.8) {
			$estado = 'DESERTOR';
		} elseif ($AsignaturasCursadas >= 1.0 && $AsignaturasCursadas <= 17.8) {
			$estado = 'DESERTOR';
		} elseif ($CreditosCursados >= 1.0 && $CreditosCursados <= 49.2) {
			$estado = 'DESERTOR';
		}

		#Graduado
		if ($Semestre >= 8.5 && $Semestre <= 10.0) {
			$estado = 'GRADUADO';
		} elseif ($AsignaturasCursadas >= 51.5 && $AsignaturasCursadas <= 68.3) {
			$estado = 'GRADUADO';
		} elseif ($AsignaturasAprobadas >= 44.0 && $AsignaturasAprobadas <= 58.7) {
			$estado = 'GRADUADO';
		} elseif ($CreditosCursados >= 145.5 && $CreditosCursados <= 193.7) {
			$estado = 'GRADUADO';
		}

		$title = "Association Rules";
		require_once 'view/header.php';
		require_once 'view/rules/index.php';
		require_once 'view/footer.php';
	}

}
?>
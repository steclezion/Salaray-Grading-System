<?php
/*
Site : http:www.vetbossel.in
Author :vetripandi
*/
require_once 'config.php';

if( isset($_POST['type']) && !empty($_POST['type'] ) ){
	$type = $_POST['type'];
	
	switch ($type) {
		case "save_user":
			save_user($mysqli);
			break;
		case "delete_user":
			delete_user($mysqli, $_POST['id']);
			break;
		case "getUsers":
			getUsers($mysqli);
			break;
		default:
			invalidRequest();
	}
}else{
	invalidRequest();
}

/**
 * This function will handle user add, update functionality
 * @throws Exception
 */
function save_user($mysqli){
	try{
		
		$data = array();
		$name = $mysqli->real_escape_string(isset( $_POST['user']['name'] ) ? $_POST['user']['name'] : '');
		
		$id = $mysqli->real_escape_string( isset( $_POST['user']['id'] ) ? $_POST['user']['id'] : '');
	
		if($name == '' ){
			throw new Exception( "Required fields missing, Please enter and submit" );
		}
	
	
		if(empty($id)){
			$query = "INSERT INTO paramaters (`id`, `Change_Factor`) VALUES (NULL, '$name' )";
		}else{
			$query = "UPDATE paramaters SET `Change_Factor` = '$name'  WHERE `paramaters`.`id` = $id";
		}
	
		if( $mysqli->query( $query ) ){
			$data['success'] = true;
			if(!empty($id))$data['message'] = 'Parameter updated successfully.';
			else $data['message'] = 'Parameter inserted successfully.';
			if(empty($id))$data['id'] = (int) $mysqli->insert_id;
			else $data['id'] = (int) $id;
		}else{
			throw new Exception( $mysqli->sqlstate.' - '. $mysqli->error );
		}
		$mysqli->close();
		echo json_encode($data);
		exit;
	}catch (Exception $e){
		$data = array();
		$data['success'] = false;
		$data['message'] = $e->getMessage();
		echo json_encode($data);
		exit;
	}
}

/**
 * This function will handle user deletion
 * @param string $id
 * @throws Exception
 */
function delete_user($mysqli, $id = ''){
	try{
		if(empty($id)) throw new Exception( "Invalid User." );
		$query = "DELETE FROM `paramaters` WHERE `id` = $id";
		if($mysqli->query( $query )){
			$data['success'] = true;
			$data['message'] = 'User deleted successfully.';
			echo json_encode($data);
			exit;
		}else{
			throw new Exception( $mysqli->sqlstate.' - '. $mysqli->error );
		}
		
	
	}catch (Exception $e){
		$data = array();
		$data['success'] = false;
		$data['message'] = $e->getMessage();
		echo json_encode($data);
		exit;
	}
}
	
/**
 * This function gets list of users from database
 */
function getUsers($mysqli){
	try{
	
		$query = "SELECT * FROM `paramaters` order by id desc limit 8";
		$result = $mysqli->query( $query );
		$data = array();
		while ($row = $result->fetch_assoc()) {
			$row['id'] = (int) $row['id'];
			$data['data'][] = $row;
		}
		$data['success'] = true;
		echo json_encode($data);exit;
	
	}catch (Exception $e){
		$data = array();
		$data['success'] = false;
		$data['message'] = $e->getMessage();
		echo json_encode($data);
		exit;
	}
}
	
	


function invalidRequest()
{
	$data = array();
	$data['success'] = false;
	$data['message'] = "Invalid request.";
	echo json_encode($data);
	exit;
}






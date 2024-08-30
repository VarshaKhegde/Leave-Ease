<?php

require_once("dbconfig.php");
session_start();

if(!isset($_SESSION["username"])){
	header("Location: index");
  }
else{

	$eid = $_GET['RequestID'];
	$descr = $_GET['StudentID'];

	$add_to_db = mysqli_query($conn,"UPDATE leaverequests SET Requeststatus='Accepted' WHERE RequestID='".$eid."' AND StudentID='".$descr."'");

				if($add_to_db){	
					echo 'Saved!!';
					header("Location: requesthistory");
				}
				else{
					echo "Query Error : " . "UPDATE leaverequests SET RequestStatus='Accepted' WHERE RequestID='".$eid."' AND StudentID='".$descr."'" . "<br>" . mysqli_error($conn);
				}
	}

	ini_set('display_errors', true);
	error_reporting(E_ALL);  
         
?>

<?php 


if(isset($_POST['save_call_log'])){
	include("model.php");
	$pdo = new Query();

	$callerName = htmlspecialchars($_POST['_callerName']);
	$phone = $_POST['_phone'];
	$date = $_POST['_date'];
	$time = $_POST['_time'];
	$address = htmlspecialchars($_POST['_address']);
	$county = htmlspecialchars($_POST['_county']);
	$landMark = htmlspecialchars($_POST['_landMark']);
	$case_cat = htmlspecialchars($_POST['_case_cat']);
	$call_cat = htmlspecialchars($_POST['_call_cat']);
	$shift = $_POST['_shift'];
	$supervisor = $_POST['_supervisor'];
	$recordBy = $_POST['_recordBy'];
	$_caseDescription = htmlspecialchars($_POST['_caseDescription']);
	

	if($pdo->save_callog($callerName, $phone, $date, $time, $address, $county, $landMark, $case_cat, $call_cat, $shift, $supervisor, $_caseDescription, $recordBy)){
		echo "success";
	}else{
		echo "error";
	}
}
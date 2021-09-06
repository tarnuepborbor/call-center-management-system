
<?php 

include("model.php");

$id = $_POST['call_id'];

$pdo = new Query();
$data = $pdo->view_call_detail($id);
$da = array();

while($row = $data->fetch()) {

	array_push($da, $row['id']);
	array_push($da, $row['callerName']);
	array_push($da, $row['phone']);
	array_push($da, $row['_date']);
	array_push($da, $row['_time']);
	array_push($da, $row['address']);
	array_push($da, $row['county']);
	array_push($da, $row['landMark']);
	array_push($da, $row['case_cat']);
	array_push($da, $row['call_cat']);
	array_push($da, $row['shift']);
	array_push($da, $row['recordBy']);
	array_push($da, $row['caseDescription']);
	array_push($da, $row['supervisor']);
}

echo  json_encode($da);
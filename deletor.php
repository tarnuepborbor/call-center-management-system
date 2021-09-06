
<?php 
session_start();


if(isset($_SESSION['isLogin']) !== "" && $_GET['id'] !== ""){
	

	include("includes/model.php");

	$table = $_GET['table'];
	$id = $_GET['id'];

	$pdo = new Query();

	if($pdo->delete($table, $id)){
		if($table == 'users'){
			echo "<script>window.location = 'users.php?message=You deleted an user from the system'</script>";
		}else{
			echo "<script>window.location = 'dashboard.php?message=You successfully deleted a call log record from the database'</script>";
		}
	}
}
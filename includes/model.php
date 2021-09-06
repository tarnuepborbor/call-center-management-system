<?php 

include 'connect.php'; // include the file that connects to the database

Class Query extends Dbh {


// this method varify if the person is a ligetimate login user

	public function login($email, $password){

		$stmt = $this->connection()->prepare('SELECT * FROM users WHERE email = ? AND password=?'); 
		$stmt->execute([$email, $password]); 
		$count = $stmt->rowCount();
		return $count;

	}


	public function load_user_details($email){

		$stmt = $this->connection()->prepare('SELECT * FROM users WHERE email = ?'); 
		$stmt->execute([$email]); 
		return $stmt;

	}


	public function save_user(){
		$sql = "INSERT INTO users (name, phoneNo, email, password, shift, userType, pic, address, sex ) 
         VALUES (:name, :phoneNo, :email, :password, :shift, :userType, :pic, :address, :sex)";

         $stmt = $this->connection()->prepare($sql);
         return $stmt;
	}

	public function delete($table, $id){
		$stmt = $this->connection()->prepare("DELETE FROM $table WHERE id = ?");
		$stmt->execute([$id]);
		return $stmt;
	}// this will delete any item in any table base on the table name and id passed


	public 	function save_callog($callerName, $phone, $date, $time, $address, $county, $landMark, $case_cat, $call_cat, $shift, $supervisor, $caseDescription, $recordedBy){
		$sql = "INSERT INTO call_log(callerName, phone, _date, _time, address, county, landMark, case_cat, call_cat, shift, supervisor, caseDescription, recordBy) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$callerName, $phone, $date, $time, $address, $county, $landMark, $case_cat, $call_cat, $shift, $supervisor, $caseDescription, $recordedBy]);
		return $stmt;
}// this method save a payment in database 


public function load_agent_log(){
	$stmt = $this->connection()->query("SELECT * FROM call_log");
	return $stmt;

}

public function load_users(){
	$stmt = $this->connection()->query("SELECT * FROM users");
	return $stmt;

}




public function view_call_detail($id){
	$stmt = $this->connection()->prepare("SELECT * FROM call_log WHERE id = ?"); 
	$stmt->execute([$id]);
	return $stmt;
}// this method will select and load all sale record in the admin table 




}

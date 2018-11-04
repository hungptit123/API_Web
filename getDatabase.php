<?php 
// // connect database
// /*
// 	4 paramas [localhost, name_user, password_user, name_database]
// */ 
// $connect = mysqli_connect("localhost","root","","SinhVien");

// // query database
// mysqli_query($connect,"SET NAME 'utf8'");

require "DBConnect.php";

// start query
$query = "SELECT * FROM Student";
// GET DATA
$data = mysqli_query($connect, $query);

class Student{
		function Student($id, $name, $date, $address) {
			$this->id = $id;
			$this->name = $name;
			$this->date = $date;
			$this->address = $address;
		} 
	} 
	// init array student
	$array_student = array();

while($row = mysqli_fetch_assoc($data)) {
	array_push($array_student, new Student($row['id'], $row['name'], $row['date'], $row['address']));
}

echo json_encode($array_student);

?>
<?php 
	class Student{
		function Student($name, $date, $address) {
			$this->Name = $name;
			$this->Date = $date;
			$this->Address = $address;
		} 
	} 
	// init array student
	$array_student = array();
	array_push($array_student, new Student("Dinh Van Hung","18/05/1998","Me Linh"));
	// convert array into Json
	echo json_encode($array_student);
?>
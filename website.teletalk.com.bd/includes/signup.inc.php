<?php
	include_once 'dbh.inc.php';
	
	$nameoforganization = $_POST['nameoforganization'];
	$department = $_POST['department'];
	$nameofministry = $_POST['nameofministry'];
	$nameofcontactperson = $_POST['nameofcontactperson'];
	$designationofcontactperson = $_POST['designationofcontactperson'];
	$mobileno = $_POST['mobileno'];
	$confirmmobile = $_POST['confirmmobile'];
	$Email = $_POST['Email'];
	$applicationstartdate = $_POST['applicationstartdate'];
	$applicationenddate = $_POST['applicationenddate'];
	$agelimit = $_POST['agelimit'];
	$postno = $_POST['postno'];
	
	
	$sql = "INSERT INTO loginsystem (Org_name, Department, Ministry, Contact, Designation, Mobile, Confirm, Email, Start_date, Last_date, Age_limit, No_of_post) VALUES ('$nameoforganization', '$department', '$nameofministry', '$nameofcontactperson', '$designationofcontactperson', '$mobileno', '$confirmmobile', '$Email', '$applicationstartdate','$applicationenddate', '$agelimit', '$postno');";
	mysqli_query($conn,$sql);
	
	header("Location: ../sucmsg.html"); 
	

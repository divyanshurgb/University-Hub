<?php 

$link = mysqli_connect("localhost", "root", "", "upload");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


if (isset($_POST['upload'])) {
	$select=$_REQUEST['select'];
	$subject =$_REQUEST['subject'];
	$topic = $_REQUEST['topic'];
	$email = $_REQUEST['email'];
	$file_name=$_FILES['file']['name'];
	$file_type=$_FILES['file']['type'];
	$file_size=($_FILES['file']['size'])/100000;
	$file_tem_loc=$_FILES['file']['tmp_name'];
	$file_store="upload/".$file_name;
	$ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
	$allowed = array("pdf","doc","docx" );
	for ($x = 0; $x <= 2; $x++){
	if ($ext== $allowed[$x]) {
		$a=1;
	}
	// else{
	// 	$a=0;
	// }
	}	
	if ($file_size>150) {
		$b=0;
	}else {
		$b=1;
	}
	if($a==0){
		echo "submited file only pdf and doc formate";
	}
	if ($b==0) {
		echo "size of file must be lass than 150mb";
	}

	if ($a==1&&$b==1) {
	move_uploaded_file($file_tem_loc,$file_store);
	// Attempt insert query execution
	$sql = "INSERT INTO persons (type,subject,topic, email, file_name,size,file_type) VALUES ('$select','$subject', '$topic', '$email','$file_name','$file_size','$file_type')";
	if(mysqli_query($link, $sql)){
	    echo "Records added successfully.";
	} else{
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
}
	}	

?>	

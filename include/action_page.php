<?php 
/* attempt Mariadb server connection. */
/* This will need to be change when moving to production server */
$link = mysqli_connect("localhost", "eyh", "horizon", "EYH");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


// User inputs with security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$state = mysqli_real_escape_string($link, $_REQUEST['state']);
$zip = mysqli_real_escape_string($link, $_REQUEST['zip']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$grade = mysqli_real_escape_string($link, $_REQUEST['grade']);
$size = mysqli_real_escape_string($link, $_REQUEST['size']);
$attend = mysqli_real_escape_string($link, $_REQUEST['attend']);
$troop = mysqli_real_escape_string($link, $_REQUEST['troop']);
$school = mysqli_real_escape_string($link, $_REQUEST['school']);
$teacher = mysqli_real_escape_string($link, $_REQUEST['teacher']);
$topic1 = mysqli_real_escape_string($link, $_REQUEST['topic1']);
$topic2 = mysqli_real_escape_string($link, $_REQUEST['topic2']);


//Attempt inset execution
$sql = "INSERT INTO student (name, address, city, state, zip, email, grade, size, attend, troop, school, teacher, topic1, topic2 ) VALUES ('$name', '$address', '$city', '$state', '$zip', '$email', '$grade', '$size', '$attend', '$troop', '$school', '$teacher', '$topic1', '$topic2')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{ 
    echo "ERROR: Could not connect to database $sql. " .
    mysqli_error($link);   
}


//Close database connection
mysqli_close($link);
?>
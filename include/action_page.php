<?php
require_once "Database.php";

/* Initialize Database class (host, user, pass, dbname) */
$db = new Database("localhost", "eyh", "horizon", "EYH");

/* Query */
$sql = "INSERT INTO student (name, address, city, state, zip, email, grade, size, attend, troop, school, teacher, topic1, topic2)
VALUES (:name, :address, :city, :state, :zip, :email, :grade, :size, :attend, :troop, :school, :teacher, :topic1, :topic2)";

/* Initiate query */
$db->query($sql);

/* Prepare statements */
$db->bind(':name', $_REQUEST['name']);
$db->bind(':address', $_REQUEST['address']);
$db->bind(':city', $_REQUEST['city']);
$db->bind(':state', $_REQUEST['state']);
$db->bind(':zip', $_REQUEST['zip']);
$db->bind(':email', $_REQUEST['email']);
$db->bind(':grade', $_REQUEST['grade']);
$db->bind(':size', $_REQUEST['size']);
$db->bind(':attend', $_REQUEST['attend']);
$db->bind(':troop', $_REQUEST['troop']);
$db->bind(':school', $_REQUEST['school']);
$db->bind(':teacher', $_REQUEST['teacher']);
$db->bind(':topic1', $_REQUEST['topic1']);
$db->bind(':topic2', $_REQUEST['topic2']);

/* Execute query */
try {
	$db->execute();
}
catch(PDOException $e){
	echo "PDO Error: ". $e->getMessage();
}

?>

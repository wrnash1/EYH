<?php require_once 'connect.php';

try {
    $dbh = new PDO("mysql:host=$servername;db=$db,$username,$password);

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line 


$sql = "INSERT INTO student (first_name)
VALUES
('".$_POST["first_name"]."'

)" 


if ($dbh->query($sql)) {
    echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully'); </script>";
    }
    else{
    echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.'); </script>";
    }
    
    $dbh = null;
    }
    catch(PDOException $e)
    {
    echo $e->getMessage();
    }
    
    }
?>

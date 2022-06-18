<?php
error_reporting(0);
if (isset($_POST['team_name'])){

   $servername= "localhost";
   $username= "root";
   $password= "";
   $databse= "team";

   $con= mysqli_connect( $servername, $username, $password,$databse );

   if (!$con){
    die ("connection to the database failed due to " . mysqli_connect_error());
   }
    //echo "success connecting to the db";

    $team_name = $_POST['team_name'];
    $member1 = $_POST['member1'];
    $member2 = $_POST['member2'];
    $member3 = $_POST['member3'];
    $member4 = $_POST['member4'];


    $sql="INSERT INTO `team` (`team_name`, `member 1`, `member 2`, `member 3`, `member 4`) VALUES ('$team_name', '$member1', '$member2', '$member3', '$member4');";
//echo $sql;

if ($con->query($sql)==true){
    echo "successfully submitted";
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the competetion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3> Welcome to the competetion </h3>
        <p>Enter the details of your team</p>
        
       
        

        <form action="index.php" method="post">
            <input type="text" name="team_name"  placeholder="Enter your team name">
            <input type="text" name="member1"  placeholder="Enter member 1">
            <input type="text" name="member2"  placeholder="Enter member 2">
            <input type="text" name="member3"  placeholder="Enter member 3">
            <input type="text" name="member4"  placeholder="Enter member 4">
            <button class="btn">Submit</button>
        </form> 
            
    </div>
    <script src="index.js"></script>
   
</body>
</html>


    
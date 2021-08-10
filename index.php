


<?php
 $insert = false;
 $server = "localhost";
 $username = "root";
 $password = "";

 $con = mysqli_connect($server, $username, $password);

 if(!$con){
     die("connection to this database failed due to". mysqli_connect_error());
 }
//  echo "sucess connection to the db";

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$desc = $_POST['desc'];

$sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `phone`, `email`, `desc`, `dt`) VALUES ('$name', '$age', '$gender', '$phone', '$email', '$desc', current_timestamp());";
// echo $sql;


if($con->query($sql) == true){
    // echo "sucessfully inserted";
    $insert = true;

}else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();



 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IM+Fell+Double+Pica+SC&family=Ubuntu&display=swap" rel="stylesheet">
    <title>travel form for trip</title>
</head>
<body>
    <img class="bg" src="1431622.jpg" alt="ballon">
    <div class="container">
        <h1>welcome to iit kharakpur us trip</h1>
        <p>enter To conforrm particpate in the trip</p>
        <?php
        if($insert == true){
        echo "<p class='submitmsg'>thanks for submitting form. we are happy to see you joing for US Trip</p>";
    }
        ?>

        <form action="index.php" method="POST">
            <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
            <input type="number" name="age" id="age" placeholder="enter your age" required >
            <input type="text" name="gender" id="gender" placeholder="Enter Your gender" required>


            <input type="number" name="phone" id="phone" placeholder="enter your phone number" required>
            <input type="email" name="email" id="email" placeholder="enter your email" required>
            <textarea name="desc" id="desc" cols="30" rows="10"
            placeholder="Enter any information here" required></textarea>
            <button class="btn">submit</button>
            
            
            


        </form>

    </div>
   
</body>
</html>

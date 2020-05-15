<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>
<?php

// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//       $email = $_POST['email'];
//       $pass = $_POST['pass'];

//       echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
//       <strong>Hiii!</strong>Name : '.$email.'PAssword'.$pass.'
//       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//         <span aria-hidden="true">&times;</span>
//       </button>
//     </div>';
// }

$servername = "localhost";
$username = "root";
$passsword = "";
$database = "first";

$conn = mysqli_connect($servername,$username,$passsword,$database);

// echo "Connnection was successful";

//  $sql = "CREATE TABLE `jaffar` ( `id` INT NOT NULL , `Name` VARCHAR(30) NOT NULL , `password` VARCHAR(30) NOT NULL , PRIMARY KEY (`id`(1))) ENGINE = InnoDB;
// ";
 $sql = "INSERT INTO `jaffar` (`id`,`Name`, `password`) VALUES ('3','fsdf','sdfsdfsd')";
$result = mysqli_query($conn,$sql);

if($result){
     echo "Table inserted";
}
else{
    echo "Error". mysqli_error($conn);
}
 ?>
<form action="/PHP_WORK_BY_DARKLORD/first.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"  name="pass" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
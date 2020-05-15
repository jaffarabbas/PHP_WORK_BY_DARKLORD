<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<title>Crud App</title>
</head>
<body>
    <?php
     //connection to database
     $insert  = false;
     $servername = "localhost";
     $username = "root";
     $passsword = "";   
     $database = "crud";
     $conn = mysqli_connect($servername,$username,$passsword,$database);   
     if(!$conn){
         die("Sorry Connection failed!!!!" . mysqli_connect_error()); 
     }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $title = $_POST['title'];
        $message = $_POST['message'];

        $sql = "INSERT INTO `notetable` (`title`,`message`) VALUES ('$title','$message')";
        $result = mysqli_query($conn,$sql);
        
        if($result){
             $insert  = true;
             echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data entered Successfully</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
        }
        else{
            echo "Error". mysqli_error($conn);
        }
    }
    ?>
    <section>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">CRUD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse ml-auto" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
    <section class="container">
<form action="/PHP_WORK_BY_DARKLORD/crud.php" method="POST" class="mt-4">
  <div class="form-group mt-6">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Note</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Add Note</button>
</form>
    <br><br>
    <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php   
    $sql = "SELECT *FROM `notetable`";
    $result = mysqli_query($conn,$sql);
    $id = 0;
    while($row = mysqli_fetch_assoc($result)){
        $id = $id +1;
        echo "<tr>
        <th scope='row'>".$id."</th>
        <td>".$row['title']."</td>
        <td>".$row['message']."</td>
        <td>Action</td>
      </tr>";
    }  ?>
  </tbody>
</table>
    
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>


</body>
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

</html>
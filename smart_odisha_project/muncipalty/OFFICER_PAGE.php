<?php
session_start();
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Officer Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <style>
      .a1{
        text-decoration:none;
        color:white;
      }
    </style>
</head>

<body>
    <div class="container">
     <div class="text-center">
        <h1>OFFICER PAGE</h1><hr>
      </div>
     
      <div> <button type="button" class="btn btn-danger "><a class="a1" href="log-out.php">Logout</a></button>
      </div><br>
      <div class="row">
        <div class="col-md-4" style=" height:200px;width:150px;float:right;"><img src="..\profile-image\2141013024.jpg" alt="" height="100%" width="100%"></div>
        
       <div class="col-md-4"> <p><strong>Name: </strong><span><?php echo $_SESSION['ofname'] ?></span></p>
        <p><strong>Email: </strong><span><?php echo $_SESSION['email'] ?></span></p>
        <p><strong>DOB: </strong><span><?php echo $_SESSION['dob'] ?></span></p>
        <p><strong>Department: </strong><span><?php echo $_SESSION['dept'] ?></span></p>
        <p><strong>phone: </strong><span><?php echo $_SESSION['phone'] ?></span></p></div>
        <div class="container col-md-4" style="float:right;">
        <h1>WORK BALANCE PROGRESS</h1>
          <div class="progress">
          <div class="progress-bar progress-bar-animated progress-bar-striped" style="width:7%">7%</div>
          </div><br>
          <div class="progress">
          <div class="progress-bar progress-bar-animated progress-bar-striped bg-success" style="width:14%">14%</div>
          </div><br>
          <div class="progress">
          <div class="progress-bar progress-bar-animated progress-bar-striped bg-danger" style="width:21%">21%</div>
          </div>
          </div> 
      
    </div>
       
 </div>
<br>
<hr>
<div class="container" > <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Total work Pending</th>
        <th scope="col">Total work Completed</th>
       
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        
      </tr>
     
    </tbody>
  </table>
</div>
<div class="container text-center">
    <div class="row ">
      <div class="col-md-6" ><a href="Public_Work_page.php" class="btn btn-info">Public work</a></div>
      <div class="col-md-6"><button class="btn btn-danger">Employee work</button></div>
    </div>
    <br>
    <br>
    <div class="row">
      <div class="col-md-6"><a href="pppworktable_for_offocer.php" class="btn btn-info">PPP work</a></div>
      <div class="col-md-6"><a href="health_care_data_for_officer.php" class="btn btn-danger">Health Data</a></div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-md-6"><a href="public_complaint.php" class="btn btn-info">public complaint</a></div>
        <div class="col-md-6"><button class="btn btn-danger">Government message</button></div>
      </div>
    <hr>
  </div>



                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
                    crossorigin="anonymous"></script>
</body>

</html>
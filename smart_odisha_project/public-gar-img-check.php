<?php
 include 'connection.php';
 session_start();

 $id = $_SESSION['id'];

//  echo $id;

 if (isset($_POST['upload'])) {
 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./public-garbage-image/" . $filename;

    $_SESSION['file'] = $filename;
 
    // Get all the submitted data from the form
    $sql = "INSERT INTO public_work (id,image,status)VALUES('$id','$filename','pending')";
 
    // Execute query
    mysqli_query($conn, $sql);
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
       
        header('Location:get-location.php');
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }

}

 

?>
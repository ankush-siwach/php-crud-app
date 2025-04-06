<?php
include('bcon.php'); 
if(isset($_POST['add_button'])){
   
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $age=$_POST['age'];

    if($fname== ""||empty($fname)){
      header('location:home.php?message=fill your first name');
    }
    else{
      $query = "INSERT INTO `students` (`FirstName`, `LastName`, `Age`) VALUES ('$fname', '$lname', '$age')";
    
     $result = mysqli_query($connection,$query);
     if(!$result){
     die("query faile".mysqli_error($connection));
     }
     else{
      header('location:home.php?message=your data has been added sucessfully');
     }
    }

}
?>
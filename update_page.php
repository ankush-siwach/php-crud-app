<?php
include('bcon.php');
include('header.php');

if(isset($_GET['Student_ID'])){
    $id=$_GET['Student_ID'];


$query = "select  * from `students` where `Student ID`='$id'";
$result =mysqli_query($connection,$query);

if(!$result){
    die('connection failed'.mysqli_error());

}
else{
    $row = mysqli_fetch_assoc($result);
  

}}
?>
<?php
if(isset($_POST['update'])){
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $age= $_POST['age'];

    if(isset($_GET['id_new'])){
        $newid=$_GET['id_new'];
    }

    $query = "update `students` set `FirstName` ='$fname',`LastName` ='$lname',`Age` ='$age' where `Student ID`= '$newid' ";

    $result =mysqli_query($connection,$query);

    if(!$result){
        die('connection failed'.mysqli_error());

    }
    else{
       header('location:home.php?update_msg=you have succesfully updated the data');
    

    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1 id="abc">CRUD Application by PHP</h1>

<form action="update_page.php?id_new=<?php echo $id?>" method="post">
<div class="form-group">
            <label for="fname">First name</label>
            <input type="text"name="fname" class="form-control" value=<?php echo $row ['FirstName']?>>
    </div>
        <div class="form-group">
            <label for="fname">last name</label>
            <input type="text" name="lname"class="form-control" value=<?php echo $row ['LastName']?>>
    </div>
    <div class="form-group">
            <label for="fname">Age</label>
            <input type="text" name="age"class="form-control" value=<?php echo $row ['Age']?>>
            <div>
            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" name="update">Update</button>
</body>
</form><?php
include('footer.php');
?>
</html>
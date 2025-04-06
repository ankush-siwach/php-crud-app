<?php
include('header.php');
include('bcon.php');
?>

<h1 id="abc">CRUD Application by PHP</h1>
<div class="box1">
<h3>Students</h3>
<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add Students</button>
</div>
<table class="table table-hover table-borderd table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>First_name</th>
            <th>Last_name</th>
            <th>Age</th>
            <th>update</th>
            <th>delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "select  * from `students`";
        $result =mysqli_query($connection,$query);

        if(!$result){
            die('connection failed');

        }
        else{
           while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $row['Student ID'];?></td>
            <td><?php echo $row['FirstName'];?></td>
            <td><?php echo $row['LastName'];?></td>
            <td><?php echo $row['Age'];?></td>
            <td><a href="update_page.php?Student_ID=<?php echo $row['Student ID'];?>" class="btn btn-success">Update</a> </td>
            <td><a href="delete_page.php?Student_ID=<?php echo $row['Student ID'];?>" class="btn btn-danger">Delete</a> </td>

        </tr>
        <?php
           }
        }
        
        ?>
       
       
    </tbody>
    

</table>
<?php
    if(isset($_GET['message'])){
        echo "<h6>" .$_GET['message']. "</h6>";
    }
    ?>
    <?php
    if(isset($_GET['d_msg'])){
      echo "<h6>" .$_GET['d_msg']. "</h6>";
  }
    ?>
     <?php
    if(isset($_GET['update_msg'])){
      echo "<h6>" .$_GET['update_msg']. "</h6>";
  }
    ?>
<form action="insert_data.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Students</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
    <div class="form-group">
            <label for="fname">First name</label>
            <input type="text"name="fname" class="form-control">
    </div>
        <div class="form-group">
            <label for="fname">last name</label>
            <input type="text" name="lname"class="form-control">
    </div>
    <div class="form-group">
            <label for="fname">Age</label>
            <input type="text" name="age"class="form-control">
            <div>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" name="add_button"></input>
      </div>
    </div>
  </div>
</div>
</form>
<?php

include('footer.php');
?>

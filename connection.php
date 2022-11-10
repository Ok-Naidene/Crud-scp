<?php

//Database credentials 
$user = "a30057884_user";
$pw = "Toiohomai1234";
$db = "a30057884_SCP";

//Database connection object (address, user, pw, db)
$connection = new mysqli('localhost', $user, $pw, $db) or die(mysqli_error($connection));

//create variable that stores records from our database 
$result = $connection->query("select * from SCP") or die($connection->error());


// process data from form.php (post submit)
if(isset($_POST['submit']))
{
    // create form variables
    $pg = mysqli_real_escape_string($connection, $_POST['pg']);
    $h1 = mysqli_real_escape_string($connection, $_POST['h1']);
    $h2 = mysqli_real_escape_string($connection, $_POST['h2']);
    $p1 = mysqli_real_escape_string($connection, $_POST['p1']);
    $p2 = mysqli_real_escape_string($connection, $_POST['p2']);
    $p3 = mysqli_real_escape_string($connection, $_POST['p3']);
    $img = mysqli_real_escape_string($connection, $_POST['img1']);
    
    // create sql insert command and then insert above form data
    $insert = "insert into SCP(pg, h1, h2, p1, p2, p3, img1)
    values('$pg', '$h1', '$h2', '$p1', '$p2', '$p3', '$img1')";
    
    if($connection->query($insert) === TRUE)
    {
        echo "
            <h1>Record submitted successfully</h1>
            <p><a href='index.php'>Return to index page</a></p>
        ";
    }
    else
    {
        // check connection
        if($connection->connect_errno)
        {
            printf("Connection failed", $connection->connect_error);
        }
        
        echo "
            <h1>Error submitting record into the database</h1>
            <p><a href='form.php'>Return to form page</a></p>
        ";
    }
} // end of form.php code
  // delete record
    if(isset($_GET['delete']))
    {
        $id =$_GET['delete'];
        
        // delete sql command
        $del = "delete from SCP where id=$id";
        
        if($connection->query($del) === TRUE)
        {
            echo "
                <p>Record Deleted. <a href='index.php'>Return to index page</a></p>
            ";
        }
        else
        {
             echo "
               <p>Error deleting record</p>
               <p>{$connection->error}</p>
               <p><a href='index.php'>Return to index page</a></p>
            ";
      }
    }
?>
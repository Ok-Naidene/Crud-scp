<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
 
    <title>SCP</title>
  </head>
  <body class="container">

<?php include "connection.php"; ?>

    <!-- menu row -->
<div class="row">

<div class="col">
<ul class="nav navbar-light bg-light border">

<a href="index.php" class="container">Return to Index</a>

<!-- run php loop through database and display page names here -->
<?php foreach($result as $page): ?>

  <li class="nav-item active">

  <a href="index.php?page='<?php echo $page['pg']; ?>'" class="nav-link"><?php echo $page['pg']; ?></a>
  </li>

  <?php endforeach; ?>

  <li class="nav-item active">

    <a href="form.php" class="nav-link">Enter a new SCP record</a>
  </li>

  </ul>

  </div>

  </div>
  <!-- database content here -->
  <div class="row mt-3">

  <div class="col">
  <?php 
 
  if(isset($_GET['page']))
  {
     // trim quotes from the page get value
     $scp = trim($_GET['page'], "'");
     
     // run sql command to retrieve record based on GET value
     $record = $connection->query("select * from SCP where pg = '$scp'");
     
     // turn record into an associate array
     $array = $record->fetch_assoc();
     
      //variables to hold update/delete url strings 
    $id = $array['id'];
    $update = "update.php?update=" . $id;
    $delete = "connection.php?delete=" . $id;
     
     // display elements from the above array in html
     echo "
      <div class='p-3 border rounded shadow'>
        <h1>{$array['h1']}</h1>
        <h2>{$array['h2']}</h2>
        <p><img src='{$array['img1']}'></p>
        <p>{$array['p1']}</p>
        <p>{$array['p2']}</p>
        <p>{$array['p3']}</p>
         <p>
        <a href='{$update}' class=' btn btn-warning'>Update</a>
        <a href='{$delete}' class=' btn btn-danger'>Delete</a>
        </p>
      </div>
     ";
  }
   //display update and delete buttons
  else
  {
     echo "
     
     <h1 class='text-center'>Welcome to the SCP Database</h1>
     <p class='text-center'>Use the menu above to view content, create, update or delete SCP records.</p>
     <p class='text-center'><img src='../images/scp.png'</p>
     
     ";
  }
 
  ?>

 </div>

 </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
 </html>
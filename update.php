<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Create a Record</title>
  </head>
  <body class="container">
    <h1>Update SCP Record</h1>
    <p><a href="index.php" class="btn btn-primary">Back to index page</a></p>
    
    <?php
    
        include "connection.php";
        
        $id = $_GET['update'];
        $record = $connection->query("select * from SCP where id=$id");
        $row = $record->fetch_assoc();
    
    ?>
    
    <form method="post" action="connection.php" class="form-group">
        
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        
        <label>Page Name</label>
        <br>
        <input type="text" name="pg" placeholder="pg" class="form-control" value="<?php echo $row['pg']; ?>">
        <br><br>
        <label>Heading One</label>
        <br>
        <input type="text" name="h1" placeholder="Heading One" class="form-control" value="<?php echo $row['h1']; ?>">
        <br><br>
        <label>Heading Two</label>
        <br>
        <input type="text" name="h2" placeholder="Heading Two" class="form-control" value="<?php echo $row['h2']; ?>">
        <br><br>
        <label>Paragraph One</label>
        <br>
        <input type="text" name="p1" placeholder="Paragraph One" class="form-control" value="<?php echo $row['p1']; ?>">
        <br><br>
        <label>Paragraph Two</label>
        <br>
        <input type="text" name="p2" placeholder="Paragraph One" class="form-control" value="<?php echo $row['p2']; ?>">
        <br><br>
        <label>Paragraph Three</label>
        <br>
        <input type="text" name="p3" placeholder="Paragraph One" class="form-control" value="<?php echo $row['p3']; ?>">
        <br><br>
        <label>Image</label>
        <br>
        <input type="text" name="img1" placeholder="images/nameOfImage.jpg or similar" class="form-control" value="<?php echo $row['img1']; ?>">
        <br><br>
        <input type="submit" name="update" value="Update record" class="btn btn-dark">
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
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
    <h1>Use form below to create a record in our SCP database</h1>
    <p><a href="index.php" class="btn btn-primary">Back to index page</a></p>
    
    <form method="post" action="connection.php" class="form-group">
        <label>Page Name</label>
        <br>
        <input type="text" name="pg" placeholder="pg" class="form-control">
        <br><br>
        <label>Heading One</label>
        <br>
        <input type="text" name="h1" placeholder="Heading One" class="form-control">
        <br><br>
        <label>Heading Two</label>
        <br>
        <input type="text" name="h2" placeholder="Heading Two" class="form-control">
        <br><br>
        <label>Pragraph One</label>
        <br>
        <input type="text" name="p1" placeholder="p1" class="form-control">
        <br><br>
        <label>Pragraph Two</label>
        <br>
        <input type="text" name="p2" placeholder="p2" class="form-control">
        <br><br>
        <label>Pragraph Three</label>
        <br>
        <input type="text" name="p3" placeholder="p3" class="form-control">
        <br><br>
        <label>Enter Image Address</label>
        <br>
        <input type="text" name="img1" placeholder="images/nameOfImage.jpg or similar" class="form-control">
        <br><br>
        <input type="submit" name="submit" value="Submit record" class="btn btn-dark">
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
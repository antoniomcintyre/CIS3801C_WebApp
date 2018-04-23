<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"><img src="logo.gif" alt="Logo" width=365px height=65px</a>
      </div>
      <div><p><h1>The Cultural Mix of Martial Arts</h1></p></div>
    </div>
  </nav>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"></a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="#">Kung Fu</a></li>
        <li><a href="#">Karate</a></li>
        <li><a href="#">Capoeira</a></li>
        <li><a href="#">Boxing</a></li>
        <li><a href="masterscontact.php">Masters Contact</a></li>
      </ul>
    </div>
  </nav>

  <div class="jumbotron">
    <h2>
      Masters Contact
    </h2>
    <p>
      A list of professional Martial Artists in your area!
    </p>

  </div>
  <div class="row">
    <div class="col-md-4">
      <?php
    include 'mod3_config.php';
    include 'mod3_opendb.php';

    $sql= "SELECT fname, lname, email FROM `artists` LIMIT 10";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "First Name: " . $row["fname"]. "<br>";
            echo "Last name: " . $row["lname"]. "<br>";
            echo "Email: " . $row["email"]. "<br><hr>";
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);

    ?>
    </div>

</body>
</html>

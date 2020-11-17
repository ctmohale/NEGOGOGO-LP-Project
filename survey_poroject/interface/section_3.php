<?php include '../php/retrivedata.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/stylesheet.css">
  <title>Survey!</title>
</head>

<body class="jumbotron">
  <section class="mainSurveySection">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h3>Survey results!</h3>
        <hr>
        <div>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Total number of surveys:
              <span class="badge badge-primary badge-pill"><?php echo $totalNumOfS; ?> </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Average age:
              <span class="badge badge-primary badge-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Oldest person who participated in survey
              <span class="badge badge-primary badge-pill">1</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Youngest person who participated in survey
              <span class="badge badge-primary badge-pill">1</span>
            </li>
          </ul>
          <hr>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Percentage of people who like Pizza:
              <span class="badge badge-primary badge-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Percentage of people who like Pasta:
              <span class="badge badge-primary badge-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Percentage of people who like Pap and Wors:
              <span class="badge badge-primary badge-pill">1</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Youngest person who participated in survey
              <span class="badge badge-primary badge-pill">1</span>
            </li>
          </ul>
          <hr>
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              People like to eat out:
              <span class="badge badge-primary badge-pill">14%</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              People like to watch movies:
              <span class="badge badge-primary badge-pill">2%</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              People like to watch TV:
              <span class="badge badge-primary badge-pill">1%</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              People like to listen to the radio:
              <span class="badge badge-primary badge-pill">1%</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>
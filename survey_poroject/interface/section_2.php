<?php include '../php/writedata.php'; ?>
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
    <div class="formSection">
      <h3>Take our Survey</h3>
      <hr>
      <form method="POST">
        <div class="form-group row">
          <label for="Surname" class="col-sm-2 col-form-label">Surname</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="Surname" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="First_Names" class="col-sm-2 col-form-label">First Names</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="First_Names" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="Contact_number" class="col-sm-2 col-form-label">Contact number</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="Contact_number" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="Date" class="col-sm-2 col-form-label">Date</label>
          <div class="col-sm-10">
            <input type="datetime-local" class="form-control" name="Date" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="Age" class="col-sm-2 col-form-label">Age</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" name="Age" required>
          </div>
        </div>
        <!--//////////////////////////////////////////////////////////////////////////////////////////-->
        <br>
        <p>What is your favourite food? (You can choose more than 1 answer)</p>
        <hr>
        <div class="form-group row">
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="Pizza" value="1">
              <label class="form-check-label" for="defaultCheck1">
                Pizza
              </label>
            </div>
          </div>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="Pasta" value="1">
              <label class="form-check-label" for="defaultCheck1">
                Pasta
              </label>
            </div>
          </div>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="Pap_and_Wors" value="1">
              <label class="form-check-label" for="defaultCheck1">
                Pap and Wors
              </label>
            </div>
          </div>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="Chicken_stir_fry" value="1">
              <label class="form-check-label" for="defaultCheck1">
                Chicken stir fry
              </label>
            </div>
          </div>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="Beef_stir_fry" value="1">
              <label class="form-check-label" for="defaultCheck1">
                Beef stir fry
              </label>
            </div>
          </div>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="Other" value="1">
              <label class="form-check-label" for="defaultCheck1">
                Other
              </label>
            </div>
          </div>
        </div>
        <br>
        <p>On a scale of 1 to 5 indicate whether you strongly agree to strongly disagree</p>
        <hr>
        <!--/////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div class="row">
          <div class="col-sm-7">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">.</h5>
                <ul class="list-group list-group-flush">
                  <li>I like to eat out</li>
                  <li>I like to watch movies</li>
                  <li>I like to watch TV</li>
                  <li>I like to listen to the radio </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-1">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Strongly Agree(1)</h5>
                <div class="form-check">
                  <input class="RowA form-check-input position-static" type="radio" name="RowA0" id="blankRadio1" value="5" aria-label="...">
                </div>
                <div class="form-check">
                  <input class="RowA form-check-input position-static" type="radio" name="RowA1" id="blankRadio2" value="4" aria-label="...">
                </div>
                <div class="form-check">
                  <input class="RowA form-check-input position-static" type="radio" name="RowA2" id="blankRadio3" value="3" aria-label="...">
                </div>
                <div class="form-check">
                  <input class="RowA form-check-input position-static" type="radio" name="RowA3" id="blankRadio" value="2" aria-label="...">
                </div>
                <div class="form-check">
                  <input class="RowA form-check-input position-static" type="radio" name="RowA4" id="blankRadio" value="1" aria-label="...">
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-1">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Agree(1)</h5>
                <div class="form-check">
                  <input class="form-check-input position-static" type="radio" name="RowA0" value="5" aria-label="...">
                </div>
                <div class="form-check">
                  <input class="form-check-input position-static" type="radio" name="RowA1" value="4" aria-label="...">
                </div>
                <div class="form-check">
                  <input class="form-check-input position-static" type="radio" name="RowA2" value="3" aria-label="...">
                </div>
                <div class="form-check">
                  <input class="form-check-input position-static" type="radio" name="RowA3" value="2" aria-label="...">
                </div>
                <div class="form-check">
                  <input class="form-check-input position-static" type="radio" name="RowA4" value="1" aria-label="...">
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-1">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Neutral(3)</h5>
                <div class="form-check">
                  <input class="form-check-input position-static" type="radio" name="RowA0" id="blankRadio1" value="5" aria-label="...">
                </div>
                <div class="form-check">
                  <input class="form-check-input position-static" type="radio" name="RowA1" id="blankRadio1" value="4" aria-label="...">
                </div>
                <div class="form-check">
                  <input class="form-check-input position-static" type="radio" name="RowA2" id="blankRadio1" value="3" aria-label="...">
                </div>
                <div class="form-check">
                  <input class="form-check-input position-static" type="radio" name="RowA3" id="blankRadio1" value="2" aria-label="...">
                </div>
                <div class="form-check">
                  <input class="form-check-input position-static" type="radio" name="RowA4" id="blankRadio1" value="1" aria-label="...">
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-1">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Disagree(4)</h5>
                <div class="form-check">
                  <input class="form-check-input position-static" type="radio" name="RowA0" id="blankRadio1" value="option1" aria-label="...">
                </div>
                <div class="form-check">
                  <input class="form-check-input position-static" type="radio" name="RowA1" id="blankRadio1" value="option1" aria-label="...">
                </div>
                <div class="form-check">
                  <input class="form-check-input position-static" type="radio" name="RowA2" id="blankRadio1" value="option1" aria-label="...">
                </div>
                <div class="form-check">
                  <input class="form-check-input position-static" type="radio" name="RowA3" id="blankRadio1" value="option1" aria-label="...">
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-1">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Strongly disagree(5)</h5>
                <div class="form-check">
                  <input class="form-check-input position-static" type="radio" name="RowA0" id="blankRadio1" value="option1" aria-label="...">
                </div>
                <div class="form-check">
                  <input class="form-check-input position-static" type="radio" name="RowA1" id="blankRadio1" value="option1" aria-label="...">
                </div>
                <div class="form-check">
                  <input class="form-check-input position-static" type="radio" name="RowA2" id="blankRadio1" value="option1" aria-label="...">
                </div>
                <div class="form-check">
                  <input class="form-check-input position-static" type="radio" name="RowA3" id="blankRadio1" value="option1" aria-label="...">
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="form-group row" id="mainSubmitBtn">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-info" name="btnSubmit">Submit</button>
          </div>
        </div>
        <hr>
      </form>
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
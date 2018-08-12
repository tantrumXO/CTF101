<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Fake Collision</title>

  </head>
  <body>

    <form name="form1" method="POST" action="PHPmd5.php" style="padding: 100px;">
      <div class="alert alert-info" role="alert">
  Enter 2 different strings which produce the 'same' MD5 hash.
</div>
  <div class="form-row" style="padding-bottom: 10px;width:50%;margin: 0 auto;">
    <div class="col">
      <input type="text" name="str1" class="form-control" placeholder="First String">
    </div>
    <div class="col">
      <input type="text" name="str2" class="form-control" placeholder="Second String">
    </div>
  </div>
  <button type="Submit" class="btn btn-primary btn-lg btn-block" style="width: 25%;margin: 0 auto;">Submit</button>
</form>

<?php

      $string1 = $_POST['str1'];
      //echo md5($string1);

      //echo ("  ");

      $string2 = $_POST['str2'];
      //echo md5($string2);

      if (md5($string1)===md5($string2)) {
        echo "<div class='alert alert-danger'>Incorrect, enter two different strings.</div>";
      }
      elseif (md5($string1)==md5($string2)) {
        echo "<div class='alert alert-success'>Correct! Your flag: flag{d0ubL3_3qu4ls_1s_tr4sh}</div>";
      }
      else {
        echo "<div class='alert alert-danger'>Incorrect</div>";
      }
    ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <style media="screen">
    .column {
          float: left;
          width: 33.33%;
            }
    </style>

    <title>Calculator and GCD</title>
  </head>
  <body>
    <div class="row">
      <div style="margin-top:300px;" class="column">
        <h1><center>Christian Elvin Bangga</h1>
      </div>

      <div style="margin-top:200px;" class="column">
        <h2>Calculator</h2>
        <form  method="post" attribute="post" action="index.php">
          <p>Input first number:<br/><br>
          <input type="number" name="num1" value""></p>
          <p>Input second number:<br/><br>
          <input type="number" name="num2" value""></p>

          <input type="submit" name="add" value="+">
          <input type="submit" name="min" value="-">
          <input type="submit" name="mul" value="*">
          <input type="submit" name="div" value="/">
          <br><br>
        </form>
        <?php
          if (!empty($_POST))
          {
            echo "ANSWER ::  ";
            if (isset($_POST['add']))
            {
              echo $_POST['num1'] + $_POST['num2'];
            }
            else if (isset($_POST['min']))
            {
              echo $_POST['num1'] - $_POST['num2'];
            }
            else if (isset($_POST['mul']))
            {
              echo $_POST['num1'] * $_POST['num2'];
            }
            else if (isset($_POST['div']))
            {
              echo $_POST['num1'] / $_POST['num2'];
            }
          }
          ?>
      </div>

    <div style="margin-top:200px;" class="column">
      <h2>Finding GCD</h2>
      <form class="" action="" method="post">
        <p>Input first number:<br/><br>
        <input type="number" name="number1" value""></p>
        <p>Input second number:<br/><br>
        <input type="number" name="number2" value""></p>

        <input type="submit" name="submit" value="Submit">
        <br><br>
      </form>
      <?php
        if (!empty($_POST))
        {
          echo "ANSWER ::  ";
            $gcd = 0;
            for ($i=1; $i <= $_POST['number1'] && $i <= $_POST['number2'] ; $i++)
            {
              if($_POST['number1'] % $i == 0 && $_POST['number2'] % $i == 0)
                $gcd = $i;
            }
            echo $gcd;
        }
      ?>
    </div>

  </div>

  </body>
</html>

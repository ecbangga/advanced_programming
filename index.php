<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
            class User
            {
              public $name;
              public $username;
              public $email;

              function addFriend($name){
                echo "$name"." ."."Added a friend <br>";
              }
              function postStatus($name){
                echo "$name"." ."."Posted a status <br>";
              }
            }
            $example = new User();
            echo "<br>";
            echo $example->addFriend('Elvin Christian');
            echo "<br>";
            echo $example->postStatus('Elvin Christian');

      ?>
  </body>
</html>

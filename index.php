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
                echo "$name"." ."."Added a friend";
                echo "<br>";
              }
              function postStatus($name){
                echo "$name"." ."."Posted a status <br>";
                echo "<br>";
              }
            }
            $users1 = new User();
            echo "<br>";
            echo $users1->addFriend('Elvin Christian');
            echo "<br>";
            echo $users1->postStatus('Elvin Christian');

      ?>
  </body>
</html>

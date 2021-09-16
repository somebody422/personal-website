<!DOCTYPE html>

<html>
  <body>
    <?php

    echo 'Cookies:<br>';
    foreach ($_COOKIE as $key => $value) {
      echo "  * $key: $value<br>";
    }
    echo '<hr>';


      echo 'Value: ' . $COOKIE['key'] . '<br>';
      if (isset($COOKIE['key'])) {
        echo "cookie found!";
      } else {
        echo "cookie not found. Creating it..";
        setcookie('key', 'check it out! this is the value!!', time()+1000);
      }
    ?>
  </body
</html>

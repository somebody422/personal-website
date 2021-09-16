<!DOCTYPE html>
<html>

  <head>
      <title>Hello World</title>
  </head>

   <body>


      <?php
        $var1 = 50;
        define("CONST1", 55);
        echo "<p>const: " . CONST1 . "</p>";
        echo "<p>var1: $var1</p>";

        $arr1[0] = 100;
        $arr1[1] = 200;
        //$arr1 = array(100, 200);
        echo "Arr: ";
        foreach ($arr1 as $val1) {
          echo "$val1 ";
        }

        $aarr = array("key1" => "val1", "key2" => 4, 3 => "val3");
        echo "<p>associative array:  ";
        echo $aarr['key1'] . ' ';
        echo $aarr['key2'] . ' ';
        echo $aarr[3];
        echo "</p>";

        echo $_SERVER['HTTP_USER_AGENT'];
        echo $_SERVER['SITE_HTMLROOT'];
        echo $_SERVER['PATH'];

        // Note: we can avoid using brackets if it is a one-line statement
        if (TRUE)
          echo "<p>TRUE</p>";
        if (FALSE)
          echo "<p>FALSE</p>";
        if (!FALSE) {
          echo "<p>!FALSE</p>";
        }
        if (1-1) {
          echo "<p>1-1</p>";
        }
        if (1+1) {
          echo "<p>1+1</p>";
        }
        if ("0") {
          echo "\"0\"";
        }
        if ("1") {
          echo "\"1\"";
        }

        if (FALSE) {
          echo "<p>one</p>";
        } elseif(TRUE) {
          echo "<p>two</p>";
        }

        if (TRUE):
          echo "first thing";
          echo "second thing";
        endif;

        if ($madeuparrayname['notfound']) {
          echo "<p>invalid key evals to true</p>";
        } else {
          echo "<p>invalid key evals to false</p>";
        }

        function add($num1, $num2) {
          return $num1 + $num2;
        }
        /* Pass as reference instead of as value */
        function addone(&$num) {
          $num++;
        }
        /* A default value */
        function justReturn($num = 100) {
          return $num;
        }
        $sum = add(2, 3);
        $sum2 = add($sum, 4);
        echo "<p>2 + 3 + 4 = $sum2 </p>";




      ?>


   </body>

</html>

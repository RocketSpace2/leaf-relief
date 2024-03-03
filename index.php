<!DOCTYPE html>
<html>
    <head>
        <title>Test</title>
    </head>
    <body>
        Testing web-page
        <p>
            <?php
            $a = 1;
            $b = 5;
            $c = 1;
            
            $delta = $b * $b - 4*$a*$c;

            echo "Hello world !!!";

            echo"Number is: $delta";

            if ($delta > 0) {
                $x1 = (sqrt($delta) - $b) / (2* $a);
                echo"Pierwiastki: $x1";
            }

            echo"Something new";
            ?>
        </p>
    </body>
</html>

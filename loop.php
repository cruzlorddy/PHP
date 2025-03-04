<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // loop is repeating an action over and over again

        // for each loop: it ios useed to loop through an array
        echo "<h1>FOR EACH LOOP</h1>";
        $car = array(1,2,3,4,5,6,7,8,9,"q","we");
        foreach ($car as $cars){
            echo $cars."</br>";
        }

        // for loop: it is useed to know how many times the code will run

        echo "<h1>FOR  LOOP</h1>";
        for  ($x =0; $x<21; $x++){
            echo $x;
        }

         // for loop: it is useed to know how many times the code will run

         echo "<h1>WHILE  LOOP</h1>";
        $y = 2;
        while ($y < 10){
            echo $y * 2 ."</br>";
            $y++;
        }
 
    ?>
</body>
</html>
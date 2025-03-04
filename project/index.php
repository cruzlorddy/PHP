
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $W = "<h1><b>welcome to php</b></h1>";
        echo $W;
        echo "<hr>";
        
        // another variable 
        $X = "<div style='color:yellow; font-size:80px;'> <b>Destiny designs</b></div>";
        echo $X;
        echo strlen($W); // to know the length of a string
        echo "<br/>";

        echo str_word_count($W); // count words
        echo "<br/>";

        echo str_replace("php", "Python", $W); // replace word
        echo "<br/>";

        echo str_shuffle($W); // random selecting
        echo "<br/>";

        echo substr($W,0,5);
        echo "<br/>";
        
        $char = "abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        echo strlen($char);
        echo "<br/>";
        $shuffle = str_shuffle($char);
        echo $shuffle;
        echo "<br/>";
    echo "Your WalletID" .substr($shuffle, 0, 30);
    echo "<br/>";
    

    $date = date("D d, Y h:i:s A");
    echo $date;
    echo "<br/>";
    $d = date("Y-m-d h:i:s A");
    echo $d;
    //// nb &nbsp for space

    echo "<br/>";
    $m1 = "Goodluck love";
    $m1 .= "Money";
    $m1 .= "fuck "; 
        

    ?>
    <!-- <h1>Welcome to PHP tutorial</h1> -->
</body>
</html>
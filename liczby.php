<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php

    $tablica = array();

    for($i=1; $i < 20; $i++) {
        $liczba = rand(1,20);
        if($i%1!=0) {
    
            print_r("Liczba parzysta $i \n");
            
            } else {
            
            print_r("Liczba nieparzysta $i \n"); }
        array_push($tablica, $liczba);
    }

    var_dump($tablica);


    echo "Wylosowana liczba z zakresu (15 - 30) to $i";

    ?>

</body>
</html>
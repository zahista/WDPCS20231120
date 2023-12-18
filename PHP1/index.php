<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // toto je komentář 

    /*
        toto je víceřádkový komentář 
        toto je víceřádkový komentář 
        toto je víceřádkový komentář 
        toto je víceřádkový komentář 
        toto je víceřádkový komentář 
    */

    $todo1 = "Úkol ke zpracování"; // to je string 
    $todo2 = "Jsem druhé todo";

    echo "Vypisuji:" . $todo1 . " " . $todo2 . "<br>";

    echo "Vypisuje {$todo1} {$todo2} <br>";


    $int = 3; // too je číslo 
    $bool = true; // too je boolean 
    $bool2 = false; // too je boolean 

    $float = 2.4; // to to je číslo s desetinou čárkou neboli float 

    $null = null; // prázdno

    $pole = [
        "string1",
        "string2",
        "string3",
        "string4",
    ];

    $pole2 = array('string1', 'string2'); // toto je taky poleů

    if (1 === 1) 
    {
        // tady se vykoná kód pokud podmínka platí 
    } else if (11 === 1) 
    {
        // tady pokud ne 
    }


    ?>
</body>

</html>
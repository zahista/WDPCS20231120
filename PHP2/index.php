<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        $cisla = [
            "1",
            "2",
            "3",
            "4",
        ];

        echo $cisla[1]. "<br>" ;


        $auta = 
        [
            "auto1"=>"BMW",
            "auto2"=>"Mercedes",
           "auto3"=>"Porche",
        ];

        echo $auta["auto1"];


        $pole_poli = [
            [
                "klic"=>"hodnota",
                "klic2"=>"hodnota2",
            ],
            [
                "klic"=>"hodnota",
                "klic2"=>"hodnota2",
            ],
            [
                "klic"=>"hodnota",
                "klic2"=>"hodnota2",
            ],
        ];

        echo $pole_poli[0]['klic2'];

        $pole_poli[2] = "string";

        echo "<pre>";
        print_r($pole_poli);
        echo "</pre>";


       echo "<ul>";
       foreach($auta as $key => $auto){
           echo" <li id=".$key.">".$auto."</li>";
        }
        echo "</ul>";


        for($i= 1; $i <= 10; $i++)
        {
            echo "Iterace číslo: $i <br>";
        }

        /*

        while(1 == 1)
        {
            echo "Ahoj";
        }

        */

        /*
        do{
         echo "Jsem první";
        }while(1 === 1);
        */


        function addNumber(int $a,  int $b) : int 
        {
            return $a + $b;
        }


        echo addNumber(524908, 10);

        echo "<pre>";
        var_dump ($_SERVER);
        echo "</pre>";
    ?>


</body>
</html>
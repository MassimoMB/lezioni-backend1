<!DOCTYPE html>
<html>
    <head>
        <title>"Mo'Sono Cannoli Tuoi"</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta name="author" content="Massimo Maria Borlandelli">
        <meta name="description" content="Pasticceria Romana di antica tradizione">
        <link href="stili.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>Pasticceria Musa </h1>
        </header>

        
            <?php

                           
                function welcolme($nameParam, $surnameParam){
                    echo "Benvenuto alla Pasticceria Musa ". $nameParam. " ". $surnameParam. "!"; 
                }

                welcolme("Marco", "Della Vacca");
            
                function listino($dolce1, $dolce2, $dolce3, $prezzo1, $prezzo2, $prezzo3){
                    echo "<h2>Ecco cosa serviamo:</h2>
                    
                    
                    <section class='flexConteiner'>
                    
                    <article1 class='articleConteiner'>
                        <p>Il nostro fantastico ($dolce1), fatto con i più pregiati canditi estratti...</p>
                        <div class='divContainer'>
                            <img src='../lezione_2/immagini_progetto/panettone.jpg' alt='Panettone de merda' class='responsiveImage'>
                        </div>
                        <form>
                            <input type='submit' value='$prezzo1'>
                        </form>
                    </article1>
                    
                    <article2 class='articleConteiner'>
                        <p>Il nostro fantastico ($dolce2), fatto con i più pregiati canditi estratti...</p>
                        <div class='divContainer'>
                            <img src='../lezione_2/immagini_progetto/semifreddo.jpg' alt='Panettone de merda'class='responsiveImage'>
                            
                        </div>
                        <form>
                            <input type='submit' value='$prezzo2'>
                        </form>
                    </article2>

                    <article3 class='articleConteiner'>
                        <p>Il nostro fantastico ($dolce3), fatto con i più pregiati canditi estratti...</p>
                        <div class='divContainer'>
                            <img src='../lezione_2/immagini_progetto/Torrone.jpg' alt='Panettone de merda' class='responsiveImage'>
                            
                        </div>
                        <form>
                            <input type='submit' value='$prezzo3'>
                        </form>
                    </article3>

                    
                    </section>";
                                      
                }

                listino("Panettone", "Torrone", "Ciambellone", "15 Euro", "7 Euro", "4 Euro");

                //Qui inserisco data e ora

            function dataEora($orario, $data) {
                echo "<p>Il tuo ultimo accesso risale alle " . $orario . " del giorno " . $data . "</p>";
                }
    
                dataEora(date('H:i'), date('d/m/Y'));

             ?>
    </body>
</html>
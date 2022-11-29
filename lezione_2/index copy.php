<html>
    <head>
        <title><?php echo "Particceria Da Borla";?></titel>
    </head>
    <body>
        <?php
         $name = "Marco";
         $testo1 ="Benvenuto ";
         $testo2 ="Sei nella pasticceria da Borla!"
         echo $testo1. $name. $testo2;
         function print_my_name($name){
            echo "<strong> Ciao" . $name . "!</strong>";
         }
         print_my_name($name);
         ?>
    </body>
</html>
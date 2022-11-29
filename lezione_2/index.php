<html>
    <head>
        <title><?php echo "Nome pagina";?></titel>
    </head>
    <body>
        <?php
         $name = "Massimo";
         $testo ="il mio nome è";
         echo $testo. $name;
         function print_my_name($name){
            echo "<strong> Ciao" . $name . "!</strong>";
         }
         print_my_name($name);
         ?>
    </body>
</html>
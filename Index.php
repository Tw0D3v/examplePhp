<?php 
/* for($tablas =3; $tablas <=7; $tablas++) {
    echo "</br>";
    for($valores =1; $valores<=10; $valores++) {
        echo "</br>";
        echo "$tablas x $valores = ";
        echo $tablas * $valores; 
    }
} */

    /* $nombre = 'Brando felipe';
    print_r($nombre);
        $vocales = ['a', 'e', 'i', 'o', 'u'];
        print_r($vocales);
        echo "<br>";
        
        $result = "numero de veces que se repite las vocales";
            for($i = 0; $i < count($vocales); $i++) {
            $result = $result . 'vocal ' . '' . $vocales[$i]. ' ' . substr_count($nombre, $vocales[$i]) . ' veces.<br/>';
            }
        print_r($result);
 */





   

        $nom = 'brando felipe cortes';
        $cont =0;
        
        for($i=0; $i < count(); $i++){
            echo $i;
        }

        for($i=0; $i < strlen($nom); $i++){

            switch($nom[$i]){
                case 'a':$cont++;
                    
                break;

                case 'e':$cont++;
                    
                break;

                case 'i':$cont++;
                    
                break;

                case 'o':$cont++;
                    
                break;

                case 'u':$cont++;
                    
                break;
                    default:
            }
        }
            if($cont == 1){
                echo "el nombre $nom tiene $cont no vocales";
            }else{
                echo "el nombre $nom contien $cont vocales";
            }

            
?>

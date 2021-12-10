<?php
// función para mostrar el menú principal
function menuSelectivas() {
    return "<h1>Bienvenido a ejemplos sencillos de PHP</h1>"            
            . '<p style="color:blue">Este sitio fue creado con la finalidad de mostrar con ejemplos lo siguiente:</p>'
            . '<p style="color:green">Ingrese el literal del menú que desea escoger</p>'
            . "a) Acceder a estructuras de control" . "<br>"
            . "b) Acceder a funciones" . "<br>"
            . "c) Acceder a array o matriz" . "<br>"
            . "d) Acceder a función de cadenas";
}

// función para mostrar el menú de sección básica de funciones Iterativas
function menuIterativas() {
    return "<h1>Bienvenido a la sección básica de funciones Iterativas" . "<br>"
            . "Ingrese el literal del menú que desea escoger</h1>" . "<br>" . "<br>"
            . "a) Acceder a while, mostrar en pantalla del 1 al 10" . "<br>"
            . "b) Acceder a do_while, mostrar en pantalla del 1 al 5" . "<br>"
            . "c) Acceder a for, mostrar en pantalla del 1 al 20" . "<br>"
            . "d) Acceder a foreach, mostrar en pantalla del 1 al 15";
}

// función para mostrar el menú de funciones
function menuFunciones() {
    return "<h1>Bienvenido a la sección básica de funciones" . "<br>"
            . "Ingrese el texto que desea mostrar</h1>" . "<br>" . "<br>"
            . "Funcion para mostrar en pantalla el texto ingresado" . "<br>";
}

// función para mostrar el menú de sección básica de arrays
function menuArrays() {
    return "<h1>Bienvenido a la sección básica de arrays" . "<br>"
            . "Ingrese el literal del menú que desea escoger</h1>" . "<br>" . "<br>"
            . "a) Crear un Array en el se inserta un número" . "<br>"
            . "b) Crear un Array de tipo Asociativo" . "<br>"
            . "c) Crear un Array con nombres de vehículos" . "<br>"
            . "d) Crear un Array con indices mixtos" . "<br>"
            . "e) Crear un Array multidimensionales" . "<br>"
    ;
}

// función para mostrar el menú de sección básica de función de cadenas
function menuCadenas() {
    return "<h1>Bienvenido a la sección básica de función de cadenas" . "<br>"
            . "Ingrese el texto que será aplicado para el manejo de cadenas con funciones</h1>" . "<br>" . "<br>"
            . 'Texto sugerido: ' . '<br>'
            . '<br>'.'<p style="color:blue">"En ecuador existen diversas regiones con climas muy variados, por referirse a la siguiente imagén:'
            . '<br>'.'<img>Fotos de ecuador</>'
            . '<br>'.'O siga la siguiente ruta: \\\carpetas1\\carpeta2"' . '</p><br>';
}

// Condicional de ingreso al menú estructuras de control
if (isset($_POST['form1'])) {

    $seleccion = strip_tags($_POST["seleccion"], ENT_QUOTES);

    
    //Estructura de control switch
    switch ($seleccion) {
        case "a":
            include("../menu/a.php");
            echo 'Seleccionado A (Estructura de control switch)' . '<br>' . '<br>';
            break;
        case "b":
            include("../menu/b.php");
            echo 'Seleccionado B (Estructura de control switch)' . '<br>' . '<br>';
            break;
        case "c":
            include("../menu/c.php");
            echo 'Seleccionado C (Estructura de control switch)' . '<br>' . '<br>';
            break;
        case "d":
            include("../menu/d.php");
            echo 'Seleccionado D (Estructura de control switch)' . '<br>' . '<br>';
            break;

        default:
            echo 'No escogió ninguna opción (Estructura de control switch)' . '<br>';
            break;
    }
    
    //Esrtructura de control if
    if ($seleccion == "a") {
        echo 'Seleccionado A (Estructura de control if)' . '<br>'. '<br>';
    } elseif ($seleccion == "b") {
        echo 'Seleccionado B (Estructura de control elseif)' . '<br>'. '<br>';
    } elseif ($seleccion == "c") {
        echo 'Seleccionado C (Estructura de control elseif)' . '<br>'. '<br>';
    } elseif ($seleccion == "d") {
        echo 'Seleccionado D (Estructura de control elseif)' . '<br>'. '<br>';
    } else {
        echo 'No escogió ninguna opción (Estructura de control else)' . '<br>'. '<br>';
    }
}

// Condicional de ingreso al menú estructuras de control
if (isset($_POST['form2'])) {
    /* Función strip_tags para elimitar etiquetas HTML y PHP */
    $seleccion = strip_tags($_POST["seleccion"], ENT_QUOTES);


    if ($seleccion == "a") {
        echo '<b>Ejemplo de estructura iterativa While (mostrar del 1 al 10)' . '</b><br>';
        $i = 1;
        while ($i <= 10) {
            echo $i . '<br>';
            $i ++;
        }
    }

    if ($seleccion == "b") {
        echo '<b>Ejemplo de estructura iterativa do_while (mostrar del 1 al 5)' . '</b><br>';
        $i = 1;
        do {
            echo $i . '<br>';
            $i ++;
        } while ($i <= 5);
    }

    if ($seleccion == "c") {
        echo '<b>Ejemplo de estructura iterativa for (mostrar del 1 al 20)' . '</b><br>';
        for ($i = 1; $i <= 20; $i++) {
            echo $i . '<br>';
        }
    }

    if ($seleccion == "d") {
        echo '<b>Ejemplo de estructura iterativa foreach (mostrar del 1 al 15)' . '</b><br>';
        $array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15);
        foreach ($array as &$valor) {
            echo $valor . '<br>';
        }
    }
}

// Condicional de ingreso al menú funciones
if (isset($_POST['form3'])) {
    $seleccion = strip_tags($_POST["seleccion"], ENT_QUOTES);

    //Aplicación de función
    function imprimeLiteral($literal) {
        $texto = '<b style="color:orange">El texto ingresado es: </b>' . $literal . "<br>";
        return $texto;
    }

    echo '<b>Se llama a la función imprimeLiteral($literal) y se imprime el texto ingresado' . '</b><br>';
    $textoLiteral = imprimeLiteral($seleccion);
    echo $textoLiteral;
}

// Condicional de ingreso al menú array o matriz
if (isset($_POST['form4'])) {
    $seleccion = strip_tags($_POST["seleccion"], ENT_QUOTES);

    if ($seleccion == "a") {
        echo '<b>Ejemplo de un Array en el se inserta un número' . '</b><br>';
        echo '<b>Se crea el Array con un valor de 10' . '</b><br>';
        echo '<b>Se imprime el valor del Array en la posición [0]' . '</b><br>';

        $arrayVar [] = 10;
        echo '<b style="color:orange">Valor del Array en la posición [0]: </b>' . $arrayVar[0];
    }

    if ($seleccion == "b") {
        echo '<b>Ejemplo de un Array asociativo' . '</b><br>';
        echo '<b>Se crea el Array con el indice "marcaVehículo" y se le asigan el valor de "porsche" ' . '</b><br>';
        echo '<b>Se imprime el valor del Array con el indice "marcaVehículo"' . '</b><br>';

        $arrayVar ["marcaVehículo"] = "porsche";
        echo '<b style="color:orange">Valor del Array con el indice "marcaVehículo": </b>' . $arrayVar["marcaVehículo"];
    }

    if ($seleccion == "c") {
        echo '<b>Ejemplo de un Array con nombres de vehículos' . '</b><br>';
        echo '<b>Se crea el Array con nombres de vehículos' . '</b><br>';
        echo '<b>Se imprime el valor del Array con todos los nombres de vehículos"' . '</b><br>';

        $arrayVar = array("porsche", "mazda", "toyota");
        echo '<b style="color:orange">Valor del Array con el indice [0]: </b>' . $arrayVar[0] . '<br>';
        echo '<b style="color:orange">Valor del Array con el indice [1]: </b>' . $arrayVar[1] . '<br>';
        echo '<b style="color:orange">Valor del Array con el indice [2]: </b>' . $arrayVar[2] . '<br>';
    }

    if ($seleccion == "d") {
        echo '<b>Ejemplo de un Array con índeces mixtos' . '</b><br>';
        echo '<b>Se crea el Array con índeces mixtos' . '</b><br>';
        echo '<b>Se imprime el valor del Array con índeces mixtos"' . '</b><br>';

        $arrayVar = array(
            0 => "porsche",
            1 => "mazda",
            2 => "toyota",
            "valorPorsche" => "$ 100.000,00",
            "valorMazda" => "$ 30.000,00",
            "valortoyota" => "$ 20.000,00"
        );
        echo '<b style="color:orange">Valor del Array con el indice [0]: </b>' . $arrayVar[0] . '<br>';
        echo '<b style="color:orange">Valor del Array con el indice [1]: </b>' . $arrayVar[1] . '<br>';
        echo '<b style="color:orange">Valor del Array con el indice [2]: </b>' . $arrayVar[2] . '<br>';
        echo '<b style="color:orange">Valor del Array con el indice "valorPorsche": </b>' . $arrayVar["valorPorsche"] . '<br>';
        echo '<b style="color:orange">Valor del Array con el indice "valorMazda": </b>' . $arrayVar["valorMazda"] . '<br>';
        echo '<b style="color:orange">Valor del Array con el indice "valortoyota": </b>' . $arrayVar["valortoyota"] . '<br>';
    }

    if ($seleccion == "e") {
        echo '<b>Ejemplo de un Array multidimensionales' . '</b><br>';
        echo '<b>Se crea el Array multidimensionales' . '</b><br>';
        echo '<b>Se imprime el valor del Array multidimensionales"' . '</b><br>';

        $arrayVar = array(
            0 => array(
                0 => "porsche",
                1 => "mazda",
                2 => "toyota"
            ),
            1 => array(
                "valorPorsche" => "$ 100.000,00",
                "valorMazda" => "$ 30.000,00",
                "valortoyota" => "$ 20.000,00"
            )
        );
        echo '<b style="color:orange">Valor del Array con el indice [0][0]: </b>' . $arrayVar[0][0] . '<br>';
        echo '<b style="color:orange">Valor del Array con el indice [0][1]: </b>' . $arrayVar[0][1] . '<br>';
        echo '<b style="color:orange">Valor del Array con el indice [0][2]: </b>' . $arrayVar[0][2] . '<br>';

        echo '<b style="color:orange">Valor del Array con el indice [0]["valorPorsche"]: </b>' . $arrayVar[0]["valorPorsche"] . '<br>';
        echo '<b style="color:orange">Valor del Array con el indice [0]["valorMazda"]: </b>' . $arrayVar[0]["valorMazda"] . '<br>';
        echo '<b style="color:orange">Valor del Array con el indice [0]["valortoyota"]: </b>' . $arrayVar[0]["valortoyota"] . '<br>';
    }
}

// Condicional de ingreso al menú función de cadenas
if (isset($_POST['form5'])) {
    $texto = $_POST["seleccion"];

    echo '<h1>PHP proporciona funciones para trabajar con las cadenas de forma sencilla.</h1>'.'<br>'.'<br>';


    $ascii = chr(046);
    echo '<b>chr(int $ascii): Devuelve una cadena con el carácter especificado en $ascii: </b>'
    . '<br><p style="color: blue;">' . $texto . " $ascii " . $texto . '</p><br>';

    echo '<br><p style="color: green;">' . '----------------------------------------------------------------------------------------------------------------------------------------------------------------' . '</p><br>' . '<br>';

    echo '<b>ord(string $unaCadena): Devuelve el código ASCII del primer carácter de la cadena: </b>'
    . '<br><p style="color: blue;">' . '"' . $texto . '"' . '<br>' . 'código ASCIIord: ' . ord($texto) . '</p><br>';

    echo '<br><p style="color: green;">' . '----------------------------------------------------------------------------------------------------------------------------------------------------------------' . '</p><br>' . '<br>';

    echo '<b>(string $unaCadena) : Quita los espacios en blanco (y algunos de los caracteres de escape) del principio de $unaCadena: </b>'
    . '<br><p style="color: blue;">' . ltrim($texto) . '</p><br>';

    echo '<br><p style="color: green;">' . '----------------------------------------------------------------------------------------------------------------------------------------------------------------' . '</p><br>' . '<br>';

    echo '<b>rtrim(string $unaCadena) : Quita los espacios en blanco (y algunos de los caracteres de escape) del final de $unaCadena: </b>'
    . '<br><p style="color: blue;">' . rtrim($texto) . '</p><br>';

    echo '<br><p style="color: green;">' . '----------------------------------------------------------------------------------------------------------------------------------------------------------------' . '</p><br>' . '<br>';

    echo '<b>str_repeat(string $unaCadena, int $num): Devuelve una cadena con el contenido de $unaCadena, repetido $num veces eneste caso 2 veces: </b>'
    . '<br><p style="color: blue;">' . str_repeat($texto, 2) . '</p><br>';

    echo '<br><p style="color: green;">' . '----------------------------------------------------------------------------------------------------------------------------------------------------------------' . '</p><br>' . '<br>';

    echo '<b>str_replace(string $buscar, string $reemplazar, string $unaCadena): devuelve una cadena de caracteres con el contenido </b>'
    . '<br>' . '<b>de $unaCadena, donde todas las apariciones de $buscar has sido reemplazadas por el valor indicado en $reemplazar: </b>'
    . '<br><p style="color: blue;">' . str_replace("a", "_", $texto). '</p><br>';

    echo '<br><p style="color: green;">' . '----------------------------------------------------------------------------------------------------------------------------------------------------------------' . '</p><br>' . '<br>';

    echo '<b>strcmp(string $cad1, string $cad2): compara estrictamente las dos cadenas especificadas en $cad1 y $cad2. </b>'
    . '<br>' . '<b>Devuelve < 0 si $cad1 es menor que $cad2; </b>'
    . '<br>' . '<b>Devuelve > 0 si $cad2 es menor que $cad1; </b>'
    . '<br>' . '<b>Devuelve 0, si son iguales:</b>'
    . '<br>' . '<br>' . '<b>$cad2: "Texto a comparar"</b>'
    . '<br><p style="color: blue;">' . strcmp($texto, "Texto a comparar"). '</p><br>';

    echo '<br><p style="color: green;">' . '----------------------------------------------------------------------------------------------------------------------------------------------------------------' . '</p><br>' . '<br>';

    echo '<b>strip_tags(string $unaCadena, string $noQuitar): devuelve una cadena donde se han eliminado todas las </b>'
    . '<br>' . '<b>etiquetas HTML y PHP de $unaCadena, salvo las especificadas, opcionalmente, en $noQuitar:</b>'
    . '<br><p style="color: blue;">' . strip_tags($texto). '</p><br>';

    echo '<br><p style="color: green;">' . '----------------------------------------------------------------------------------------------------------------------------------------------------------------' . '</p><br>' . '<br>';

    echo '<b>stripslashes(string $unaCadena): devuelve una cadena donde se han eliminado las barras de escape de $unaCadena:</b>'
    . '<br><p style="color: blue;">' . stripslashes($texto). '</p><br>';

    echo '<br><p style="color: green;">' . '----------------------------------------------------------------------------------------------------------------------------------------------------------------' . '</p><br>' . '<br>';

    echo '<b>strlen(string $unaCadena): devuelve la longitud de $unaCadena:</b>'
    . '<br><p style="color: blue;">' . strlen($texto). '</p><br>';

    echo '<br><p style="color: green;">' . '----------------------------------------------------------------------------------------------------------------------------------------------------------------' . '</p><br>' . '<br>';

    echo '<b>strtolower(string $unaCadena): devuelve una cadena donde todos los caracteres de $unaCadena están en minúscula:</b>'
    . '<br><p style="color: blue;">' . strtolower($texto). '</p><br>';

    echo '<br><p style="color: green;">' . '----------------------------------------------------------------------------------------------------------------------------------------------------------------' . '</p><br>' . '<br>';

    echo '<b>strtoupper(string $unaCadena): devuelve una cadena donde todos los caracteres de $unaCadena están en mayúscula:</b>'
    . '<br><p style="color: blue;">' . strtoupper($texto). '</p><br>';

    echo '<br><p style="color: green;">' . '----------------------------------------------------------------------------------------------------------------------------------------------------------------' . '</p><br>' . '<br>';

    echo '<b>ucfirst(string $unaCadena): devuelve una cadena donde se ha convertido el primer carácter de $unaCadena en mayúscula:</b>'
    . '<br><p style="color: blue;">' . ucfirst($texto). '</p><br>';

    echo '<br><p style="color: green;">' . '----------------------------------------------------------------------------------------------------------------------------------------------------------------' . '</p><br>' . '<br>';

    echo '<b>ucwords(string $unaCadena): devuelve una cadena donde se ha convertido el primer carácter de todas las palabras </b>'
    . '<br>' . '<b>de $unaCadena en mayúscula:</b>'
    . '<br><p style="color: blue;">' . ucwords($texto). '</p><br>';

    echo '<br><p style="color: green;">' . '----------------------------------------------------------------------------------------------------------------------------------------------------------------' . '</p><br>' . '<br>';

    echo '<b>substr(string $unaCadena, int $inicio, int $longitud): devuelve una subcadena de $unaCadena, tal que:</b>'
    . '<br>' . '<b>Si $inicio es positivo, comienza en la posición indicada en dicho parámetro.</b>'
    . '<br>' . '<b>Si $inicio es negativo, la posición de inicio se contará desde el final de la cadena. o Si la longitud de $unaCadena es menor que $inicio, devuelve FALSE</b>'
    . '<br>' . '<b>Si se especifica el parámetro $longitud y este es positivo, este será el número máximo de caracteres que tendrá la cadena devuelta.</b>'
    . '<br>' . '<b>Si se especifica el parámetro $longitud y este es negativo, ese número de caracteres se omite al final de la cadena.</b>'
    . '<br>' . '<b>Si se especifica el parámetro $longitud y este es 0, FALSE o NULL, se devuelve una cadena vacía.</b>'
    . '<br><p style="color: blue;">' . substr($texto, 0, 10). '</p><br>';
}
?>


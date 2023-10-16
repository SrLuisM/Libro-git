<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Exercise 3.1 (1)</h1>

        <!-- FORM FOR USER -->
        <form method="post" action="functions.php">
            
            <label for="date">Enter a Date (yyyy-mm-dd) : </label>
            <input type="text" id="date" name="date" required>
            <input type="submit" value="Send">
        </form>

    <?php
    
        // year % 4 == 0 -< 2004, 2008, 2012 
        function leapYear($year) { 
            return (($year % 4 == 0 && $year % 100 !=0) || ($year % 400 ==0)); 
        }


        function checkContactDate($date) {
            list($year, $month, $day) = explode('-', $date);

            // Year 1900 and 2100 || Month 1 and 12 || Date valid for 31 days
            if ($year >= 1900 && $year <= 2100 && $month >= 1 && $month <=12) {
                if (($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 8
                || $month == 10 || $month == 12) && ($day >= 1 && $day <= 31)) {
                    return true;
                } elseif (($month == 4 || $month == 6 || $month == 9 || $month == 11) && ($day >= 1 && $day  <= 30)) {
                    return true; //Date valid for 30 days
                } elseif ($month == 2) {
                    return ($day >= 1 && ($day <= 29 || ($day == 29 && leapYear($year))));

                }
            }
            return false;
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $date = $_POST['date'];

            if (checkContactDate($date)) {
                echo "Date $date is Valid";
            } else {
                echo "Date $date is not Valid";
            }
        }


        function isValidDate($fecha) {
            return (bool) preg_match('/^\d{4}-\d{2}-\d{2}$/', $fecha);
        }
        
        /**
         * Función para calcular el número de días hasta el cumpleaños.
         *
         * @param string $fechaNacimiento La fecha de cumpleaños en formato "yyyy-mm-dd".
         * @return int|null Número de días hasta el cumpleaños o null si la fecha de entrada no es válida.
         */
        function checkBirthday($fechaNacimiento) {
            // Verificar si la fecha de entrada es válida
            if (!isValidDate($fechaNacimiento)) {
                return null;
            }
        
            // Obtener la fecha de hoy
            $hoy = date("Y-m-d");
        
            // Calcular la diferencia en días entre el cumpleaños y hoy
            $diferencia = strtotime($fechaNacimiento) - strtotime($hoy);
            $diasHastaCumpleaños = floor($diferencia / (60 * 60 * 24));
        
            return $diasHastaCumpleaños;
        }
        


        



    ?>

</body>
</html>
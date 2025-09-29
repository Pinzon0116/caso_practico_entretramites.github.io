<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros Primos - Array</title>
</head>

<body>
    <div style="text-align: center; list-style-position: inside;">

        <h2>Ejercicio 7</h2>
        <p>Implementa un código php que devuelva los n primeros números primos como un array. Siendo n un número entero
            que se le pueda pasar a la función que lo implemente.</p>

        <form method="post">
            <label for="cantidad">Introduce n:</label>
            <input type="number" name="cantidad" id="cantidad" min="1" required>
            <button type="submit">Generar</button>
        </form>

        <?php
        function si_es_primo($num)
        {
            if ($num < 2)
                return false;
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0)
                    return false;
            }
            return true;
        }

        function numeros_primos($n)
        {
            $primos = [];
            $numero = 2;
            while (count($primos) < $n) {
                if (si_es_primo($numero)) {
                    $primos[] = $numero;
                }
                $numero++;
            }
            return $primos;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $n = intval($_POST["cantidad"]);
            $resultado = numeros_primos($n);

            echo "<h3>Los primeros $n números primos son:</h3>";
            echo "<ol>";
            foreach ($resultado as $primo) {
                echo "<li>$primo</li>";
            }
            echo "</ol>";
        }
        ?>

    </div>
</body>

</html>
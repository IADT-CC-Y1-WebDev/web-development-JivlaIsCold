<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions Exercises - PHP Introduction</title>
    <link rel="stylesheet" href="/exercises/css/style.css">
</head>
<body>
    <div class="back-link">
        <a href="index.php">&larr; Back to PHP Introduction</a>
        <a href="/examples/01-php-introduction/05-functions.php">View Example &rarr;</a>
    </div>

    <h1>Functions Exercises</h1>

    <!-- Exercise 1 -->
    <h2>Exercise 1: Temperature Converter</h2>
    <p>
        <strong>Task:</strong> 
        Create a function called celsiusToFahrenheit() that takes a Celsius temperature as a parameter and returns the Fahrenheit equivalent. Formula: F = (C × 9/5) + 32. Test it with a few values.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here

        function celsiusToFahrenheit($C) {
            return ($C * 9/5) + 32;
        }

        for ($i = 10; $i <= 30; $i++) {
            $F = celsiusToFahrenheit($i);
            echo "Fahrenheit of $i is $F <br>";
        }
        ?>
    </div>

    <!-- Exercise 2 -->
    <h2>Exercise 2: Rectangle Area</h2>
    <p>
        <strong>Task:</strong> 
        Create a function called calculateRectangleArea() that takes width
         and height as parameters. It should return the area. If only one 
         parameter is provided, assume it's a square (both dimensions equal).
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here
        function calculateRectArea($x , $y = null) {
            $type = gettype($x);
            if ($type != "integer") {
                print_r("Error wrong type.");
                return;
            }
            if ($y === null) {
                return $x * $x;
            }
            else {
                return $x * $y;
            }
        }

        $val = calculateRectArea(10,3);
        print_r($val)

        ?>
    </div>

    <!-- Exercise 3 -->
    <h2>Exercise 3: Even or Odd</h2>
    <p>
        <strong>Task:</strong>
        Create a function called checkEvenOdd() that takes a number and returns 
        "Even" if the number is even, or "Odd" if it's odd. Use the modulo 
        operator (%).
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here
        function checkEvenOdd($number) {
            $modulo = $number % 2;

            if ($modulo == 0) {
                return "even";
            }
            else {
                return "odd";
            }
        }

        $fnc = checkEvenOdd(10);
        print_r($fnc);
        ?>
    </div>

    <!-- Exercise 4 -->
    <h2>Exercise 4: Array Statistics</h2>
    <p>
        <strong>Task:</strong> 
        Create a function called getArrayStats() that takes an array of numbers 
        and returns an array with three values: minimum, maximum, and average. 
        Use array destructuring to display the results.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here

        function getArrayStats($array) {
            $Min = null;
            $Max = null;
            $avg = 0;
            

            for ($i = 0; $i < count($array); $i++) {
                // if ($i == 0) {
                //     $Min = $array[0];
                //     $Max = $array[0];
                // }

                // if ($Min >= $array[$i]) {
                //     $Min = $array[$i];
                // }
                // if ($Max <= $array[$i]) {
                //     $Max = $array[$i];
                // }

                $Min = min($array);
                $Max = max($array);
               
               
            }
            $avg = array_sum($array) / count($array);
            return [$Min, $Max, $avg];
        }


        $ar = [10,200,3,5,102];
        $func = getArrayStats($ar);
        print_r($func);
        ?>
    </div>

</body>
</html>

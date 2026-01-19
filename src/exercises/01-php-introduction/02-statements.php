<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statements Exercises - PHP Introduction</title>
    <link rel="stylesheet" href="/exercises/css/style.css">
</head>
<body>
    <div class="back-link">
        <a href="index.php">&larr; Back to PHP Introduction</a>
        <a href="/examples/01-php-introduction/02-statements.php">View Example &rarr;</a>
    </div>

    <h1>Statements Exercises</h1>

    <!-- Exercise 1 -->
    <h2>Exercise 1: Age Classifier</h2>
    <p>
        <strong>Task:</strong> 
        Create a variable for age. Use if/else statements to classify and 
        display the age group: "Child" (0-12), "Teenager" (13-19), "Adult" 
        (20-64), or "Senior" (65+).
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here
        $age = 19;
        $ageGroup = "";

        if ($age >= 0 && $age  <= 12) {
            $ageGroup = "Child";
        }
        elseif ($age  >= 13 && $age  <= 19) {
            $ageGroup = "Teenager";
        }
        elseif ($age  >= 20 && $age <= 64) {
            $ageGroup = "Adult";
        }

        elseif ($age <= 65) {
            $ageGroup = "Senior";
        }

        echo $ageGroup;
        ?>
    </div>

    <!-- Exercise 2 -->
    <h2>Exercise 2: Day of the Week</h2>
    <p>
        <strong>Task:</strong> 
        Create a variable for the day of the week (use a number 1-7). Use 
        a switch statement to display whether it's a "Weekday" or "Weekend", 
        and the day name.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        $day = 2;

        switch ($day) {
            case 1:
                echo "Weekday Day: Monday";
                break;
            case 2:
                echo "Weekday Day: Tuesday";
                break;
            case 3:
                echo "Weekday Day: Wednesday";
                break;
            case 4:
                echo "Weekday Day: Thursday";
                break;
            case 5:
                echo "Weekday Day: Friday";
                break;
            case 6:
                echo "Weekday Day: Saturday";
                break;
            case 7:
                echo "Weekend Day: Sunday";
                break;
        }
        ?>
    </div>

    <!-- Exercise 3 -->
    <h2>Exercise 3: Multiplication Table</h2>
    <p>
        <strong>Task:</strong> 
        Use a for loop to create a multiplication table for a number of your 
        choice (1 through 10). Display each line in the format "X × Y = Z".
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here
        $X = 4;
        for ($Y = 1; $Y <= 10; $Y++){
            $Z = $X * $Y;
            echo "$X x $Y = $Z ";
        }
        ?>
    </div>

    <!-- Exercise 4 -->
    <h2>Exercise 4: Countdown Timer</h2>
    <p>
        <strong>Task:</strong> 
        Create a countdown from 10 to 0 using a while loop. Display each number, 
        and when you reach 0, display "Blast off!"
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here
        $Number = 10;
        while ($Number >= 0) {
            echo "$Number";
            $Number--;
            if ($Number <= 0) {
                echo "Blast off!";
            }
        }
        ?>
    </div>

</body>
</html>

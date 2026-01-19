<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables Exercises - PHP Introduction</title>
    <link rel="stylesheet" href="/exercises/css/style.css">
</head>
<body>
    <div class="back-link">
        <a href="index.php">&larr; Back to PHP Introduction</a>
        <a href="/examples/01-php-introduction/01-variables.php">View Example &rarr;</a>
    </div>

    <h1>Variables Exercises</h1>

    <!-- Exercise 1 -->
    <h2>Exercise 1: Personal Information</h2>
    <p>
        <strong>Task:</strong> 
        Create variables for your first name, last name, age, and city. 
        Then output a sentence using these variables that says "My name 
        is [first] [last], I am [age] years old and I live in [city]."
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        $First = "Ben ";
        $Last = "OConnor";
        $Age = 19;
        $City = "Dublin";

        echo "My Name is $First $Last, i am $Age years old and I live in $City";
        ?> 
    </div>

    <!-- Exercise 2 -->
    <h2>Exercise 2: Shopping Calculator</h2>
    <p>
        <strong>Task:</strong> 
        Create variables for three product prices and their quantities. 
        Calculate the subtotal for each product (price × quantity), then 
        calculate the total cost. Apply a 10% discount and display the 
        final price.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here
        $Product1 = 20;
        $Product2 = 12;
        $Product3 = 30;

        $Quantity1 = 1;
        $Quantity2 = 3;
        $Quantity3 = 10;

        $FinalPrice = ($Product1 * $Quantity1) + ($Product2 * $Quantity2) + ($Product3 * $Quantity3);

        echo $FinalPrice * 0.9;

        ?>
    </div>

    <!-- Exercise 3 -->
    <h2>Exercise 3: User Status</h2>
    <p>
        <strong>Task:</strong> 
        Create boolean variables for isStudent, hasDiscount, and isPremiumMember. 
        Use the ternary operator to display "Yes" or "No" for each status.
    </p>

    <p class="output-label">Output:</p>
    <div class="output">
        <?php
        // TODO: Write your solution here

        $IsStudent = true;
        $HasDiscount = true;
        $IsPremiumMember = false;
        
        if ($IsStudent) {
            echo "Is Student: Yes";
        
        }
        else {
            echo "Is Student: No";
        }

        if ($HasDiscount) {
            echo " Has Discount: Yes";
        }
        else {
            echo " Has Discount: No";
        }
        if ($IsPremiumMember) {
            echo " Is Premium Member: Yes";
        }
        else {
            echo " Is Premium Member: No";
        }
        ?>
    </div>

</body>
</html>

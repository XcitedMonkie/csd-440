
<?php
/*
    Daniel Fryer
    Assignment 3
    10/31/2026
*/

// Get the exterinal PHP file I'll use require_once so it will limit the number of times its brought in.
require_once 'FryerFunction.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daniel PHP Table 3</title>
    <!-- Adding in my css to make it look nicer -->
    <link rel="stylesheet" href="fryer.css">
</head>
<body>

<h1>Fryer's Table of Randomness Version 2</h1>

    <?php
        // Set the number of rows and columns making a table of 10 x 5
        $rows = 10;
        $columns = 5;
    ?>

    <table>

        <?php
        // Looping through the rows 
        for ($i = 0; $i < $rows; $i++) 
        {
        ?>
            <tr>

                <?php
                // Now I need to loop through the columns and generate the random numbers
                for ($j = 0; $j < $columns; $j++) 
                {

                    // Get the Random number
                    $num1 = rand(1, 100);
                    $num2 = rand(1, 100);

                    $sum = addNumbers($num1, $num2);
        ?>
            <td><?php echo "$num1 + $num2 = $sum"; ?></td>
            <?php
            }
            ?>
            </tr>
        <?php
        }
        ?>

</table>


</body>
</html>

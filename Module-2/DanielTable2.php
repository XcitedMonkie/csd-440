
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assingment 2</title>
    <!-- Adding in my css to make it look nicer -->
    <link rel="stylesheet" href="fryer.css">
</head>
<body>

    <h1>Fryer's Table of Randomness</h1>

    <?php
    /*
        Daniel Fryer
        Assignment 2
        10/30/2026
    */

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
                    $number = rand(1, 100);
                ?>
                    <!-- Print out the random number -->
                    <td><?php echo $number; ?></td>

                <?php
                } // Here is where the inner loop will end
                ?>

            </tr>
        <?php
        } // Here is where the outer loop will end
        ?>

    </table>

</body>
</html>

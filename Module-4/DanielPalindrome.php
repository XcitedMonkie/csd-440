
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assignment 4</title>
    <link rel="stylesheet" href="fryer.css">
</head>
<body>

<h1>Assignment 4 PHP Palindrome Checker</h1>

<?php
/*
    Daniel Fryer
    Assignment 4
    11/7/2026
 */

// Function to check for a palindrome
function checkPalindrome($word) {
    // get the reverse of the word
    $reverse = strrev($word);

    // lower strings to make sure they are the same
    if (strtolower($word) == strtolower($reverse)) {
        return "Yes";
    } else {
        return "No";
    }
}

// Array containing six example strings
$words = array(
    "racecar",
    "kayak",
    "noon",
    "hello",
    "world",
    "daniel"
);
?>

// display the results in a table to make it easy to read
<table>
    <tr>
        <th>Original String</th>
        <th>Reversed String</th>
        <th>Palindrome?</th>
    </tr>

    <?php
    // Loop through the six strings
    foreach ($words as $word) {
        $reverse = strrev($word);
        $result = checkPalindrome($word);
    ?>
        <tr>
            <td><?php echo $word; ?></td>
            <td><?php echo $reverse; ?></td>
            <td><?php echo $result; ?></td>
        </tr>
    <?php
    }
    ?>
</table>

</body>
</html>

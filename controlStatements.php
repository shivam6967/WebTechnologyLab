<!-- Control Statements in PHP  -->
<?php


// Conditional Statements
$number = 15;

// Using if-else
if ($number > 0) {
    echo "$number is positive.<br>";
} else if ($number < 0) {
    echo "$number is negative.<br>";
} else {
    echo "$number is zero.<br>";
}

// Using switch case 
$day = 3;

switch ($day) {
    case 1:
        echo "It's Monday.<br>";
        break;
    case 2:
        echo "It's Tuesday.<br>";
        break;
    case 3:
        echo "It's Wednesday.<br>";
        break;
    case 4:
        echo "It's Thursday.<br>";
        break;
    case 5:
        echo "It's Friday.<br>";
        break;
    case 6:
        echo "It's Saturday.<br>";
        break;
    case 7:
        echo "It's Sunday.<br>";
        break;
    default:
        echo "Invalid day.<br>";
}

// Looping in PHP

// Using for loop
echo "Counting from 1 to 5:<br>";
for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}

// Using while loop
echo "Counting down from 5 to 1:<br>";
$count = 5;
while ($count > 0) {
    echo $count . "<br>";
    $count--;
}

// Function with control statement (if-else)
function checkEvenOdd($num) {
    if ($num % 2 == 0) {
        return "$num is even.<br>";
    } else {
        return "$num is odd.<br>";
    }
}

// Calling the function
echo checkEvenOdd(10);
echo checkEvenOdd(11);

?>

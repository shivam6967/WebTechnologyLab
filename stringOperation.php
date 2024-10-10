<?php
// PHP String Operations

// Defining strings
$string1 = "Information";
$string2 = "Technology!";

// we are using . for concationation of the two strings :- 
$fullString = $string1 . " " . $string2;


echo "Concatenated String: $fullString<br>";

// String Length :- space is also counted
$length = strlen($fullString);
echo "Length of the string: $length<br>";

// Substring
$substring = substr($fullString, 0, 10); // Extracting "Inforamtion" here the 5 is exclusive
echo "Substring first word: $substring<br>";



// String Replacement
$replacedString = str_replace("Information", "Facts", $fullString); // Replacing "Information" with "Facts" from the full string 
echo "String after replacement: $replacedString<br>";

// Changing case
$uppercaseString = strtoupper($fullString); // Convert to uppercase
$lowercaseString = strtolower($fullString); // Convert to lowercase
echo "Uppercase: $uppercaseString<br>";
echo "Lowercase: $lowercaseString<br>";

// Trimming the spaces between the strings 
$whitespaceString = "    Ratan, Tata!    ";
$trimmedString = trim($whitespaceString); // Remove whitespace from both ends
echo "Trimmed String: '$trimmedString'<br>";

// Splitting a string into an array
$stringToSplit = "apple,banana,orange";
$fruitsArray = explode(",", $stringToSplit); // Splitting by using any seperator , here we are using , (commna) as a seperator
echo "Fruits Array: ";

// print_r :- for printing the human readable information 
print_r($fruitsArray);
echo "<br>";

// Explode , we can convert the string into an array by using any seperator 

// Implode , we can convert the array into the string with added seperator

// Joining an array into a string
$joinedString = implode(" - ", $fruitsArray); // Joining with " - "
echo "Joined String: $joinedString<br>";

?>

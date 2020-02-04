<?php

/*
+---+
| 1 |
+---+
Declare variable named redLight and 
assign it with the value true.
*/

echo "<h1>Task 1</h1>";

$redLight = true;

/*
Use "if" statement to check if the red light is on,
if so, print "Stop the car!".
*/

 if ($redLight === true) {
 	echo "Stop the car!";
 }

/*
If the red light is on, use ternary operator to print "Stop the car!" as a paragraph.
*/

 print ($redLight === true) ? "<p>Stop the car!</p>" : "Go Ahead";
 // 	echo "<p>";
 // 	echo "Stop the car!";
 // 	echo "</p>";
 // }


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Reasign redLight with the value false.
*/

echo "<h1>Task 2</h1>";

$redLight = false;

/*
Use if/else statement to check if the red light is on,
if so, print "Stop the car!", otherwise print "Are you sure that yellow light is not on?".
*/

if ($redLight === true) {
 	echo "Stop the car!";
 } else {
 	echo "Are you sure that yellow light is not on?";
 }


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare variable named yellowLight and 
assign it with the value false.
*/

echo "<h1>Task 3</h1>";

$yellowLight = false;

/*
Use if/else statement to check if the red or yellow light is on,
if so, print "Stop the car!", otherwise print "Are you sure that traffic lights are working at all?".
*/

if ($redLight === true || $yellowLight === true) {
	echo "Stop the car!";
} else {
	echo "Are you sure that traffic lights are working at all?";
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Declare variable named greenLight and 
assign it with the value false.
*/

echo "<h1>Task 4</h1>";

$greenLight = false;

/*
Use if/else-if/else statement.

Check if the red or yellow light is on, and the green light is off,
if so, print "Stop the car!".

Next, check if the red and yellow and green light is off,
In this case, print "Power outage!".

Next, check if the red and yellow light is off, and the green light is on.
In this case, print "Keep moving!";

Next, check if the red or yellow light is on, and the green light is on too.
In this case, print "Traffic lights are messed up!".

In any other case, print "Use the common sense and stay safe!".
*/

if ($redLight === true || $yellowLight === true && $greenLight === false) {
	echo "Stop the car!";
} elseif ($redLight === false && $yellowLight === false && $greenLight === false) {
	echo "Power outage!";
} elseif ($redLight === false && $yellowLight === false && $greenLight === true) {
	echo "Keep moving!";
} elseif ($redLight === true || $yellowLight === true && $greenLight === true) {
	echo "Traffic lights are messed up!";
} else {
	echo "Use the common sense and stay safe!";
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Handle the problem from the task 4 with switch-statement!
The referencial value will be true.
*/

echo "<h1>Task 5</h1>";

switch ($greenLight) {
    case "false":
        echo "Stop the car!";
        break;
    case "false":
        echo "Power outage!";
        break;
    case "true":
        echo "Go ahead";
        break;
    case "true":
        echo "Traffic lights are messed up!";
        break;
    default:
        echo "Use common sense and stay safe!";
}
?>
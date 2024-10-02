<?php

// Get the current day number (1 for Monday, 7 for Sunday)
$dayNumber = readline("Enter a number (1-7) representing the day of the week: ");

switch ($dayNumber) {
    case 1:
        echo "It's Monday.\n";
        break;
    case 2:
        echo "It's Tuesday.\n";
        break;
    case 3:
        echo "It's Wednesday.\n";
        break;
    case 4:
        echo "It's Thursday.\n";
        break;
    case 5:
        echo "It's Friday.\n";
        break;
    case 6:
        echo "It's Saturday.\n";
        break;
    case 7:
        echo "It's Sunday.\n";
        break;
    default:
        echo "Invalid day number. Please enter a number between 1 and 7.\n";
}
// Get the input for a weather forecast
$weather = readline("Enter the weather (sunny, cloudy, rainy, snowy): ");

switch ($weather) {
    case "sunny":
    case "cloudy":
        echo "You should be fine to go out.\n";
        break;
    case "rainy":
    case "snowy":
        echo "Better take an umbrella or stay indoors.\n";
        break;
    default:
        echo "Unknown weather type.\n";
}
?>

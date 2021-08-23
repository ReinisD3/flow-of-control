<?php



$day_number = readline('Enter dayNumber integer 0-6 : ');

if (is_numeric($day_number) && $day_number >= 0 && $day_number < 7) {
    switch ($day_number) {
        case 1:
            echo 'Monday' . PHP_EOL;
            break;
        case 2:
            echo 'Tuesday' . PHP_EOL;
            break;
        case 3:
            echo 'Wednesday' . PHP_EOL;
            break;
        case 4:
            echo "Thursday" . PHP_EOL;
            break;
        case 5:
            echo "Friday" . PHP_EOL;
            break;
        case 6:
            echo "Saturday" . PHP_EOL;
            break;
        case 0:
            echo "Sunday" . PHP_EOL;
            break;
        default:
            echo "Not a valid day" . PHP_EOL;
    }
}
    else
{
    echo "Not a valid day".PHP_EOL;
}


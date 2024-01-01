<?php
function sinusAngle($angle, $unite = 'radians') {
    switch ($unite) {
        case 'radians':
            return sin($angle);
        case 'degre':
        case 'degrés':
            return sin(deg2rad($angle));
        case 'grade':
        case 'grades':
            return sin($angle * M_PI / 200);
        default:
            return null;
    }
}


$angleRadians = M_PI / 6;
$angleDegres = 30;
$angleGrades = 33.333;

echo "Sinus en radians : " . sinusAngle($angleRadians) . "\n";
echo "Sinus en degrés : " . sinusAngle($angleDegres, 'degrés') . "\n";
echo "Sinus en grades : " . sinusAngle($angleGrades, 'grades') . "\n";
?>


<?php

require_once 'class/Student.php';
require_once 'class/Grade.php';
require_once 'class/Room.php';
require_once 'class/Floor.php';

$student1 = new Student(1, 1, "email@email.com", "Terry Cristinelli", new DateTime("1990-01-18"), "male");
$student2 = new Student();

$grade1 = new Grade(1, 8, "Bachelor 1", new DateTime("2023-01-09"));
$grade2 = new Grade();

$room1 = new Room(1, 1, "RDC Food and Drinks", 90);
$room2 = new Room();

$floor1 = new Floor(1, "Rez-de-chaussée", 0);
$floor2 = new Floor();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
echo "<pre>";
echo "Student Instances: \n";
print_r($student1);
print_r($student2);

echo "\nGrade Instances: \n";
print_r($grade1);
print_r($grade2);

echo "\nRoom Instances: \n";
print_r($room1);
print_r($room2);

echo "\nFloor Instances: \n";
print_r($floor1);
print_r($floor2);
echo "</pre>";
?>

</body>
</html>

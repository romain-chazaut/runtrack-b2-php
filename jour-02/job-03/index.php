<?php

function insert_student($email, $fullname, $gender, $birthdate, $gradeId) {
    global $host, $dbname, $username, $password;

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $stmt = $conn->prepare("INSERT INTO student (email, fullname, gender, birthdate, grade_id) VALUES (?, ?, ?, ?, ?)");
        
        if ($stmt->execute([$email, $fullname, $gender, $birthdate, $gradeId])) {
            return "L'étudiant a été ajouté avec succès!";
        }
    } catch (PDOException $e) {
        return "Erreur d'insertion : " . $e->getMessage();
    }
}

$host = 'localhost';
$dbname = 'lp_official';
$username = 'root';
$password = 'Romain-1964';

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = insert_student($_POST['input-email'], $_POST['input-fullname'], $_POST['input-gender'], $_POST['input-birthdate'], (int)$_POST['input-grade_id']);
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un étudiant</title>
</head>
<body>

<form method="post">
    <input type="email" name="input-email" required placeholder="Email">
    <input type="text" name="input-fullname" required placeholder="Nom complet">
    <select name="input-gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
    <input type="date" name="input-birthdate" required>
    <input type="number" name="input-grade_id" required placeholder="Grade ID">
    <input type="submit" value="Ajouter">
</form>

<p><?php echo $message; ?></p>

</body>
</html>

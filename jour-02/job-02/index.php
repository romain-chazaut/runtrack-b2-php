<?php

function find_one_student(string $email) : ?array {
    $host = 'localhost';
    $dbname = 'lp_official';
    $username = 'root';
    $password = 'Romain-1964';
    
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    $stmt = $conn->prepare("SELECT * FROM student WHERE email = :email");
    $stmt->execute([':email' => $email]);

    return $stmt->fetch();
}

$studentInfo = null;

if (!empty($_GET['input-email-student'])) {
    $studentInfo = find_one_student($_GET['input-email-student']);
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Rechercher un étudiant</title>
</head>
<body>
    <form method="get">
        <input type="text" name="input-email-student" placeholder="Email de l'étudiant">
        <button type="submit">Rechercher</button>
    </form>

    <?php if ($studentInfo): ?>
    <table border="1">
        <tr>
            <?php foreach ($studentInfo as $key => $value): ?>
            <th><?php echo $key; ?></th>
            <?php endforeach; ?>
        </tr>
        <tr>
            <?php foreach ($studentInfo as $value): ?>
            <td><?php echo $value; ?></td>
            <?php endforeach; ?>
        </tr>
    </table>
    <?php elseif (isset($_GET['input-email-student'])): ?>
    <p>Aucun étudiant trouvé avec cet email.</p>
    <?php endif; ?>

</body>
</html>

<?php

function find_all_students() : array {
    
    $host = 'localhost';
    $dbname = 'lp_official';
    $username = 'root';
    $password = 'Romain-1964';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $query = $conn->query("SELECT * FROM student");
        return $query->fetchAll();
    } catch (PDOException $e) {
        die("Erreur de connexion : " . $e->getMessage());
    }
}

$students = find_all_students();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des étudiants</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <?php if(!empty($students)): ?>
                    <?php foreach(array_keys($students[0]) as $column): ?>
                        <th><?php echo htmlspecialchars($column, ENT_QUOTES, 'UTF-8'); ?></th>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
                <tr>
                    <?php foreach($student as $value): ?>
                        <td><?php echo htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

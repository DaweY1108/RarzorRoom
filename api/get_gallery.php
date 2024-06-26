<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include('../operations/database.php');
        header('Content-Type: application/json');
        $stmt = $conn->prepare("SELECT gallery.id AS photoID, full_name, opinion, date FROM gallery INNER JOIN users ON gallery.user_id = users.id");
        $stmt->execute();
        $fetchedData = $stmt->fetchAll();
        echo json_encode($fetchedData);
    } else {
        header('Location: ../index.php');
    }
?>
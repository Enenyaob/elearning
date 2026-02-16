<?php
function isMatricNumberExists($pdo, $matricNumber) {
    $sql = "SELECT * FROM user WHERE matric_number = :matric_number";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':matric_number', $matricNumber, PDO::PARAM_STR);
    $stmt->execute();

    return $stmt->rowCount() > 0;
}
?>

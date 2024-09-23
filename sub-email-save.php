<?php
include("config.php");

$email = $_POST['email'];


$sql_check = "SELECT * FROM subscribe WHERE email=?";
$stmt = $con->prepare($sql_check);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "Email already exists";
} else {
    $sql = "INSERT INTO subscribe (email) VALUES (?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $email);
    if ($stmt->execute()) {
        echo "Data successfully submitted";
    } else {
        echo "Data not submitted";
    }
}

$stmt->close();
$con->close();
?>

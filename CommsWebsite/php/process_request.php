<?php

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$type = $_POST['type'];
$style = $_POST['style'];
$description = $_POST['description'];
$commercial_use = isset($_POST['option1']) ? 1 : 0;
$additional_char = isset($_POST['option2']) ? 1 : 0;
$ready_to_print = isset($_POST['option3']) ? 1 : 0;

//Connection
$conn = new mysqli('localhost','root','website','art_commissions');
if ($conn->connect_error) {
    die('Connection Failed: '. $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO requests (name, email, subject, type, style, description, commercial_use, additional_char, ready_to_print) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssiii", $name, $email, $subject, $type, $style, $description, $commercial_use, $additional_char, $ready_to_print);

    if ($stmt->execute()) {
        echo "Your order has been successfully placed. Thank you!";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>

<?php
//Placeholder code for PHP


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data and sanitize inputs to avoid security issues
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $type = htmlspecialchars(trim($_POST["type"]));
    $style = htmlspecialchars(trim($_POST["style"]));
    $notes = htmlspecialchars(trim($_POST["notes"]));

    // Collect checkbox values (if checked)
    $option1 = isset($_POST["option1"]) ? $_POST["option1"] : null;
    $option2 = isset($_POST["option2"]) ? $_POST["option2"] : null;
    $option3 = isset($_POST["option3"]) ? $_POST["option3"] : null;

    // Basic validation (checks if data is inside the variable)
    if (empty($name) || empty($email) || empty($type) || empty($style)) {
        echo "Please fill out all required fields.";
        exit;
    }

    // Validate email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
        exit;
    }

    // Handle the data (e.g., save it to a database or send an email)
    $subject = "New Commission Request from $name";
    $message = "
    New commission request:
    
    Name: $name
    Email: $email
    Type: $type
    Style: $style
    Notes: $notes
    
    Additional Options:
    Commercial Use: " . ($option1 ? 'Yes' : 'No') . "
    Additional Character: " . ($option2 ? 'Yes (+$25)' : 'No') . "
    Ready-to-Print: " . ($option3 ? 'Yes' : 'No');
    
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8";
    
    // Send email (make sure to set your email address in the `mail()` function)
    if (mail("youremail@example.com", $subject, $message, $headers)) {
        echo "Thank you for your request! We'll get back to you soon.";
    } else {
        echo "There was an issue submitting your request. Please try again.";
    }
} 
else {
    // Redirect to the home page if the form was not submitted via POST
    header("Location: ../index.html");
    exit;
}
?>

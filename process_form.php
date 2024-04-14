<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $quote = $_POST['quote'];

    // Format the data
    $data = "Name: $name\nEmail: $email\nFavorite Motivational Quote: $quote\n\n";

    // Open the file in append mode and write the data
    $file = fopen('form_submissions.txt', 'a');
    fwrite($file, $data);
    fclose($file);

    // Redirect back to the form page or a thank you page
    header("Location: thank_you.html");
    exit();
}
?>

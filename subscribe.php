<?php
// Check if the form is submitted
if(isset($_POST['submit'])) {
    // Retrieve form data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    
    // Do whatever you want with the form data (e.g., save it to a database)
    
    // Redirect to the thank you page
    header("Location: https://www.insightoftheday.com/thanks-for-subscribing");
    exit();
} else {
    // If the form is not submitted, redirect back to the form page
    header("Location: form.html");
    exit();
}
?>

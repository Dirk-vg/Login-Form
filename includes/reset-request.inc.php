<?php

if (isset($_POST["reset-request-submit"])) {
    
$selector = bin2hex(random_bytes(8));
$token = random_bytes(32);

// url of the website
$url = "www.url.com/create-new-password.php?selector=" . $selector . "&validator=" . bintohex($token);

$expires = date("U") + 1800;

require 'dbh.inc.php';

$userEmail = $_POST["email"];

$sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?;";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "There was an error!";
    exit();
} else {
    mysqli_stmt_bind_param($stmt, "s", $userEmail);
    mysqli_stmt_execute($stmt);
}

$sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetexpires) VALUES (?, ?, ?, ?);";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "There was an error!";
    exit();
} else {
    $hashedToken = password_hash($token, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
    mysqli_stmt_execute($stmt);
}

mysqli_stmt_close($stmt);
mysqli_close();

$to = $userEmail;

$subject = 'Reset your password for ';//add name of website

$message = '<p>We recieved a password reset request.</p>'; //message in mail sent for password reset
$message .= '<p>Here is your password reset link: </br>';
$message .= '<a href="' . $url . '">' . $url . '</a></p>';

$headers = "From: example <example@test.com>\r\n";// Enter the name && email from owner
$headers .= "Reply-To: example@test.com";// Enter the Email for replay to send email back
$readers .= "Content-type: text/html\r\n";// Allow to become html of the email

// send email to user
// need to upload to liver server to work 
mail($to, $subject, $message, $headers);

// send user back to signup page
header("Location: ../reset_password.php?reset=success");

} else {
    header("Location: ../index.php");
}
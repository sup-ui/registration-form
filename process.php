<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);
    $hobbies = htmlspecialchars($_POST['hobbies']);
    $dob = htmlspecialchars($_POST['dob']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <link rel="stylesheet" href="success.css">
</head>
<body>
    <div class="success-container">
        <h1>🎉 Registration Successful! 🎉</h1>
        <p class="message">Thank you for registering, <strong><?php echo $firstname . " " . $lastname; ?></strong>!</p>
        <div class="details">
            <h2>Your Details:</h2>
            <ul>
                <li><strong>Full Name:</strong> <?php echo $firstname . " " . $lastname; ?></li>
                <li><strong>Email:</strong> <?php echo $email; ?></li>
                <li><strong>Phone Number:</strong> <?php echo $phone; ?></li>
                <li><strong>Gender:</strong> <?php echo ucfirst($gender); ?></li>
                <li><strong>Hobbies:</strong> <?php echo $hobbies; ?></li>
                <li><strong>Date of Birth:</strong> <?php echo $dob; ?></li>
            </ul>
        </div>
        <a href="index.html" class="back-button">Go Back</a>
    </div>
</body>
</html>
<?php
} else {
    echo "Invalid request.";
}
?>

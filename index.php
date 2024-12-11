<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Initialize variables
$name = $email = $phone = $address = ""; 

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and store form data
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['address'])) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $address = htmlspecialchars($_POST['address']);
        
        // JavaScript alert for success
        echo "<script>alert('Congratulations! You've Registration Successfully!');</script>";
    } else {
        echo "<p style='color: red;'>Please fill in all fields!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Registration Form</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
    <div class="container">
        <h2>Registration Form</h2>
        <form id="registrationForm" action="index.php" method="post">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required />

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required />

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required />

            <label for="address">Address:</label>
            <textarea id="address" name="address" required></textarea>

            <button type="submit">Submit</button>
        </form>

        <!-- Display Success Message After Form Submission -->
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($name) && !empty($email) && !empty($phone) && !empty($address)): ?>
        <div class="success-message">
            <h3>Registration Successful!</h3>
            <p><strong>Name:</strong> <?php echo $name; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Phone:</strong> <?php echo $phone; ?></p>
            <p><strong>Address:</strong> <?php echo $address; ?></p>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>

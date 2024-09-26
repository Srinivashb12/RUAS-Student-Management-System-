<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUAS Student Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <img src="lg.png" alt="RUAS Logo">
            <h1>RUAS Student Management System</h1>
        </header>
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="name">Student Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
        
            <div class="form-group">
                <label for="regNo">Reg. No:</label>
                <input type="text" id="regNo" name="regNo" required>
            </div>
            <div class="form-group">
                <label for="branch">Branch:</label>
                <select id="branch" name="branch" required>
                    <option value="" disabled selected>Select Branch</option>
                    <option value="CSE">CSE</option>
                    <option value="AIML">AIML</option>
                    <option value="ISE">ISE</option>
                    <option value="EEE">EEE</option>
                    <option value="EC">EC</option>
                    <option value="Mech">Mech</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact Details:</label>
                <input type="tel" id="contact" name="contact" required>
            </div>
            <div class="form-group">
                <label for="fee">Fee Payment:</label>
                <input type="text" id="fee" name="fee" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "srini";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $regNo = $_POST['regNo'];
    $branch = $_POST['branch']; 
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $fee = $_POST['fee'];
    

    $sql = "INSERT INTO srini (name, regNo, branch, email, contact, fee)
    VALUES ('$name', '$regNo', '$branch', '$email', '$contact', '$fee')";

    if ($conn->query($sql) === TRUE) {
        echo "Thanks for Contacting! Please Visit Again.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Validate and process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $servername = "localhost";
    $username = "jrzohtvm_dexterous";
    $password = "jrzohtvm_dexterous";
    $dbname = "jrzohtvm_dexterous";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO contact (name, email, phone, project, subject, message) 
                                VALUES (:name, :email, :phone, :project, :subject, :message)");

        // Validate and bind parameters
        $name = test_input($_POST['name']);
        $email = test_input($_POST['email']);
        $phone = test_input($_POST['phone']);
        $project = test_input($_POST['project']);
        $subject = test_input($_POST['subject']);
        $message = test_input($_POST['message']);

        // Check for empty fields
        if (empty($name) || empty($email) || empty($phone) || empty($message)) {
            throw new Exception("All fields are required");
        }

        // Check email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Invalid email format");
        }

        // Bind parameters
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':project', $project);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':message', $message);

        // Execute the prepared statement
        $stmt->execute();

        echo "<script>alert('Contact successfully Created!'); window.location='contact.php'</script>";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    } catch(Exception $e) {
        echo "Error: " . $e->getMessage();
    }

    // Close connection
    $conn = null;
}
?>

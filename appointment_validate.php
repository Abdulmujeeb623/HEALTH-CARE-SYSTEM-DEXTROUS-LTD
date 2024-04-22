<?php
// Include the database connection file
include_once 'db_connection.php';

// Class to handle form validation and database interaction
class AppointmentFormHandler {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function validateForm() {
        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validate form inputs
            $first_name = $this->test_input($_POST["first_name"]);
            $email = $this->test_input($_POST["email"]);
            $phone = $this->test_input($_POST["phone"]);
            $gender = $this->test_input($_POST["gender"]);
            $appointment_date = $this->test_input($_POST["appointment_date"]);
            $department = $this->test_input($_POST["department"]);
            $comments = $this->test_input($_POST["comments"]);

            // Insert data into database if inputs are valid
            $this->insertData($first_name, $email, $phone, $gender, $appointment_date, $department, $comments);
        }
    }

    private function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    private function insertData($first_name, $email, $phone, $gender, $appointment_date, $department, $comments) {
        // Prepare SQL statement to insert data into the database
        $stmt = $this->db->prepare("INSERT INTO appointments (first_name, email, phone, gender, date, department, comments) VALUES (?, ?, ?, ?, ?, ?, ?)");

        // Bind parameters
        $stmt->bind_param("sssssss", $first_name, $email, $phone, $gender, $appointment_date, $department, $comments);

        // Execute the statement
        if ($stmt->execute()) {
            echo "<script>alert('Contact successfully Created!'); window.location='appointment.php'</script>";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    }
}

// Create an instance of the AppointmentFormHandler class
$handler = new AppointmentFormHandler($conn);

// Validate the form
$handler->validateForm();
?>

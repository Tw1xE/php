<?php
// Replace these with your actual database credentials
$conn = new mysqli('localhost', 'root', '', 'ucr_registration');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to create tables if they don't exist
function createTables($conn) {
    $sql1 = "CREATE TABLE IF NOT EXISTS form1_data (
        id INT PRIMARY KEY AUTO_INCREMENT,
        usdot VARCHAR(255) NOT NULL
    )";

    $sql2 = "CREATE TABLE IF NOT EXISTS form2_data (
        id INT PRIMARY KEY AUTO_INCREMENT,
        legal_name VARCHAR(255) NOT NULL,
        dba_name VARCHAR(255),
        physical_street VARCHAR(255) NOT NULL,
        physical_city VARCHAR(255) NOT NULL,
        physical_state VARCHAR(255) NOT NULL,
        physical_zip_code VARCHAR(10) NOT NULL,
        email VARCHAR(255) NOT NULL,
        mobile_phone_number VARCHAR(15) NOT NULL,
        registration_creator VARCHAR(255) NOT NULL,
        years TEXT NOT NULL,
        carrier_classification TEXT NOT NULL,
        straightTrucks INT NOT NULL,
        exemptionsStraightTrucks INT NOT NULL,
        passengerVehicles INT NOT NULL,
        exemptionsPassengerVehicles INT NOT NULL,
        additionalVehicles INT NOT NULL
    )";

    if ($conn->query($sql1) !== TRUE || $conn->query($sql2) !== TRUE) {
        echo "Error creating tables: " . $conn->error;
        return false;
    }

    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create tables if they don't exist
    if (createTables($conn)) {
        // Handle data from the first form
        if (isset($_POST['submit-button1'])) {
            $usdot = isset($_POST['usdot']) ? $conn->real_escape_string($_POST['usdot']) : '';

            // Insert data into the first table
            $sql = "INSERT INTO form1_data (usdot) VALUES ('$usdot')";

            if ($conn->query($sql) !== TRUE) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        // Handle data from the second form
        elseif (isset($_POST['submit-button2'])) {
            // Retrieve and sanitize data from the second form
            $legalName = isset($_POST['legal_name']) ? $conn->real_escape_string($_POST['legal_name']) : '';
            $dbaName = isset($_POST['dba_name']) ? $conn->real_escape_string($_POST['dba_name']) : '';
            // Add other form fields as needed

            // Insert data into the second table
            $sql = "INSERT INTO form2_data (legal_name, dba_name) VALUES ('$legalName', '$dbaName')";

            if ($conn->query($sql) !== TRUE) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
}

// Close the database connection
$conn->close();
?>

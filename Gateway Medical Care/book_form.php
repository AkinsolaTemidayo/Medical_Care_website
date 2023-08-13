<?php
$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if ($connection) {
    if (isset($_POST['send'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $insertQuery = "INSERT INTO book_form (name, email, phone, date, message) 
                        VALUES ('$name', '$email', '$phone', '$date', '$message')";

        if (mysqli_query($connection, $insertQuery)) {
            echo '<script>
                    alert("Appointment submitted successfully!");
                    window.location.href = "GATEWAY Medic Care.html"; // Redirect to the home page
                  </script>';
        } else {
            echo '<script>
                    alert("Error inserting data: ' . mysqli_error($connection) . '");
                    window.location.href = "GATEWAY Medic Care.html"; // Redirect to the home page
                  </script>';
        }
    }
} else {
    echo 'Database connection error.';
}
?>



```php
<?php

include "db.php";

if (isset($_POST['book'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $appointment_date = $_POST['appointment_date'];
    $appointment_time = $_POST['appointment_time'];
    $message = $_POST['message'];

    $sql = "INSERT INTO appointments 
            (name, phone, service, appointment_date, appointment_time, message)
            VALUES 
            ('$name', '$phone', '$service', '$appointment_date', '$appointment_time', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Appointment booked successfully!');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html>
<head>

    <title>Appointment Booking</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            width: 400px;
            margin: 50px auto;
            background-color: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px gray;
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        textarea {
            height: 80px;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: green;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: darkgreen;
        }

    </style>

</head>

<body>

<div class="container">

    <h2>Appointment Booking</h2>

    <form method="POST">

        <label>Full Name:</label>
        <input type="text" name="name" required>

        <label>Phone Number:</label>
        <input type="text" name="phone" required>

        <label>Service:</label>
        <select name="service" required>

            <option value="">-- Select Service --</option>
            <option value="Consultation">Consultation</option>
            <option value="Haircut">Haircut</option>
            <option value="Massage">Massage</option>
            <option value="Other">Other</option>

        </select>

        <label>Appointment Date:</label>
        <input type="date" name="appointment_date" required>

        <label>Appointment Time:</label>
        <input type="time" name="appointment_time" required>

        <label>Message:</label>
        <textarea name="message"></textarea>

        <button type="submit" name="book">
            Book Appointment
        </button>

    </form>

</div>

</body>
</html>

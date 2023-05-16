<?php

// Database connection variables
$host = "localhost"; // MySQL server hostname
$user = "root"; // MySQL user
$password = "1052001Zhondy"; // MySQL password
$database = "booking"; // MySQL database name

// Create a PDO instance
$dsn = "mysql:host=$host;dbname=$database";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
try {
    $pdo = new PDO($dsn, $user, $password, $options);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Escape user inputs for security
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$arrival_date = $_POST['arrival-date'];
$departure_date = $_POST['departure-date'];
$num_guests = $_POST['num-guests'];
$apartment_type = $_POST['apartment-type'];
$special_requests = $_POST['special-requests'];
$card_number = $_POST['card-number'];
$expiry_date = $_POST['expiry-date'];
$cvv = $_POST['cvv'];

// Prepare and execute the SQL statement
$sql = "INSERT INTO Tablica (name, email, phone, address, arrivalDate, departureDate, numGuests, apartmentType, specialRequests, cardNumber, expiryDate, cvv) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $email, $phone, $address, $arrival_date, $departure_date, $num_guests, $apartment_type, $special_requests, $card_number, $expiry_date, $cvv]);

// Check if the statement was successful
if ($stmt->rowCount() > 0) {
    echo "Uspješno ste ispunili formular. Sada smijete zatvoriti ovaj prozor";
} else {
    echo "Error: " . $sql . "<br>" . $pdo->errorInfo()[2];
}

// Close connection
unset($pdo);

?>

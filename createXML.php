<html>
<!doctype html>
<html lang="hr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/Tablica.css">
  </head>
  <body>
  <?php
// Database connection variables
$host = "localhost"; // MySQL server hostname
$user = "root"; // MySQL user
$password = "1052001Zhondy"; // MySQL password
$database = "booking"; // MySQL database name

// Create a PDO instance
$dsn = "mysql:host=$host;dbname=$database";
$options = [    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,    PDO::ATTR_EMULATE_PREPARES => false,];
try {
    $pdo = new PDO($dsn, $user, $password, $options);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Determine the sorting order and column
$sortColumn = isset($_GET['sort']) ? $_GET['sort'] : 'name';
$sortOrder = isset($_GET['order']) && strtolower($_GET['order']) == 'desc' ? 'DESC' : 'ASC';

// Prepare and execute the SQL statement
$sql = "SELECT * FROM Tablica ORDER BY $sortColumn $sortOrder";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$xml = '<?xml version="1.0" encoding="UTF-8"?><items>';

if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch()) {
        $xml .= '<item>';
        $xml .= '<name>'.$row['name'].'</name>';
        $xml .= '<email>'.$row['email'].'</email>';
        $xml .= '<phone>'.$row['phone'].'</phone>';
        $xml .= '<address>'.$row['address'].'</address>';
        $xml .= '<arrivaldate>'.$row['arrivalDate'].'</arrivaldate>';
        $xml .= '<departuredate>'.$row['departureDate'].'</departuredate>';
        $xml .= '<numberofguests>'.$row['numGuests'].'</numberofguests>';
        $xml .= '<apartmenttype>'.$row['apartmentType'].'</apartmenttype>';
        $xml .= '<specialrequests>'.$row['specialRequests'].'</specialrequests>';
        $xml .= '</item>';
    }
    $xml .= '</items>';
} else {
    $xml = 'No results found.';
}

echo $xml;
file_put_contents('items.xml', $xml);


// Close connection
unset($pdo);
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    

  </body>
</html>

</html>


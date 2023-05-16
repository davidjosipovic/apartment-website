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

// Check if there are any results
if ($stmt->rowCount() > 0) {
    // Output the results as a table with sortable headers
    echo "<div class='table-responsive '><table class='responsiveTableLayout table table-striped' id='myTable'><thead><tr>
        <th><a href='?sort=name&order=".($sortColumn == 'name' && $sortOrder == 'ASC' ? 'DESC' : 'ASC')."'>Name</a></th>
        <th><a href='?sort=email&order=".($sortColumn == 'email' && $sortOrder == 'ASC' ? 'DESC' : 'ASC')."'>Email</a></th>
        <th><a href='?sort=phone&order=".($sortColumn == 'phone' && $sortOrder == 'ASC' ? 'DESC' : 'ASC')."'>Phone</a></th>
        <th><a href='?sort=address&order=".($sortColumn == 'address' && $sortOrder == 'ASC' ? 'DESC' : 'ASC')."'>Address</a></th>
        <th><a href='?sort=arrivalDate&order=".($sortColumn == 'arrivalDate' && $sortOrder == 'ASC' ? 'DESC' : 'ASC')."'>Arrival Date</a></th>
        <th><a href='?sort=departureDate&order=".($sortColumn == 'departureDate' && $sortOrder == 'ASC' ? 'DESC' : 'ASC')."'>Departure Date</a></th>
        <th><a href='?sort=numGuests&order=".($sortColumn == 'numGuests' && $sortOrder == 'ASC' ? 'DESC' : 'ASC')."'>Number of Guests</a></th>
        <th><a href='?sort=apartmentType&order=".($sortColumn == 'apartmentType' && $sortOrder == 'ASC' ? 'DESC' : 'ASC')."'>Apartment Type</a></th>
        <th><a href='?sort=specialRequests&order=".($sortColumn == 'specialRequests' && $sortOrder == 'ASC' ? 'DESC' : 'ASC')."'>Special Requests</a></th>
        </tr></thead><tbody>";
    while ($row = $stmt->fetch()) {
        echo "<tr><td data-title='Name'>".$row['name']."</td><td data-title='Email'>".$row['email']."</td><td data-title='Phone'>".$row['phone']."</td><td data-title='Address'>".$row['address']."</td><td data-title='ArrivalDate'>".$row['arrivalDate']."</td><td data-title='DepartureDate'>".$row['departureDate']."</td><td data-title='NumberOfGuests'>".$row['numGuests']."</td><td data-title='ApartmentType'>".$row['apartmentType']."</td><td data-title='SpecialRequests'>".$row['specialRequests']."</td></tr>";
    }
    echo "</tbody></table></div>";
} else {
    echo "No results found.";
}

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


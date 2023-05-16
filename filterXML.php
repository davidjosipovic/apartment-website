<?php
echo "emails and names </br></br>";
$xml=simplexml_load_file('items.xml');
$filteredElements=$xml->xpath('//email');
foreach ($filteredElements as $element) {
    echo $element;
    echo "</br>";  
}

echo "</br>";

$filteredElements=$xml->xpath('//name');
foreach ($filteredElements as $element) {
    echo $element;
    echo "</br>";  
}


echo "</br></br> Slobodni apartmani u razmaku 20-22.4.2023 </br></br>";
echo"<hr>";
$targetStartDate = strtotime('2023-04-20');
$targetEndDate = strtotime('2023-04-22');
foreach ($xml->item as $item) {
  $arrivalDate = strtotime($item->arrivaldate);
  $departureDate = strtotime($item->departuredate);
  

  // Check if the item's arrival and departure dates do not overlap with the target range
  if ($departureDate < $targetStartDate || $arrivalDate > $targetEndDate) {
    // Print out the details of the item that does not overlap with the date range
    echo "Name: " . $item->name . "<br>";
    echo "Email: " . $item->email . "<br>";
    echo "Phone: " . $item->phone . "<br>";
    echo "Address: " . $item->address . "<br>";
    echo "Arrival Date: " . $item->arrivaldate . "<br>";
    echo "Departure Date: " . $item->departuredate . "<br>";
    echo "Number of Guests: " . $item->numberofguests . "<br>";
    echo "Apartment Type: " . $item->apartmenttype . "<br>";
    echo "Special Requests: " . $item->specialrequests . "<br>";
    echo "<br>";
  }


  
}


$xml=simplexml_load_file('data.xml');
$xml = new SimpleXMLElement($xml); // Create a SimpleXMLElement object from the string
// Extract some data
$date = $xml->SalesInvoice->date;
$number = $xml->SalesInvoice->number;
list($var1, $var2, $var3) = explode('/', $number);
$article = $xml->SalesInvoice->Items->Item->articleName;

// Print the extracted data
echo "Date: $date\n<br>";
echo "Number 1: $var1\n<br>";
echo "Number 2: $var2\n<br>";
echo "Number 3: $var3\n<br>";
echo "Article: $article\n<br>";




?>
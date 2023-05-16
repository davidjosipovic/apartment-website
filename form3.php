<html>
   
<!doctype html>
<html lang="hr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/Index.css">
    
    
    <title>Apartman3</title>
  </head>
  <body >
    <div class="bg-image slika3"></div>
    <div class="bg-text">
    <form method="post" action="connect.php">
    <div class="naslov">Booking form</div>
    <hr></hr>
    <label for="name">Name <span class="crvena">*</span></label>
  <input type="text" id="name" name="name" required><br>

  <label for="email">Email <span class="crvena">*</span></label>
  <input type="email" id="email" name="email" required><br>

  <label for="phone">Phone <span class="crvena">*</span></label>
  <input type="tel" id="phone" name="phone" required><br>

  <label for="address">Address <span class="crvena">*</span></label>
  <input type="text" id="address" name="address" required><br>

  <label for="arrival-date">Arrival Date <span class="crvena">*</span></label>
  <input type="date" id="arrival-date" name="arrival-date" required><br>

  <label for="departure-date">Departure Date <span class="crvena">*</span></label>
  <input type="date" id="departure-date" name="departure-date" required><br>

  <label for="num-guests">Number of Guests <span class="crvena">*</span></label>
  <input type="number" id="num-guests" name="num-guests" min="1" max="10" required><br>

  <label for="apartment-type">Apartment Type <span class="crvena">*</span></label>
  <select id="apartment-type" name="apartment-type" required>
    <option value="">Please select</option>
    <option value="1-bedroom">1 Bedroom</option>
    <option value="2-bedroom">2 Bedrooms</option>
    <option value="3-bedroom">3 Bedrooms</option>
  </select><br>

  <label for="special-requests">Special Requests</label>
  <textarea id="special-requests" name="special-requests" rows="3" cols="30"></textarea><br>

  <label for="card-number">Card Number <span class="crvena">*</span></label>
  <input type="text" id="card-number" name="card-number" required><br>

  <label for="expiry-date">Expiry Date <span class="crvena">*</span></label>
  <input type="month" id="expiry-date" name="expiry-date" required><br>

  <label for="cvv">CVV <span class="crvena">*</span></label>
  <input type="password" id="cvv" name="cvv" required><br>

  <label for="terms">I agree to the terms and conditions <span class="crvena">*</span></label>
  <input type="checkbox" id="terms" name="terms" required><br>

  <input type="submit" value="Book Now">
</form>



</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

</html>
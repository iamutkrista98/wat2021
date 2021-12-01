<!DOCTYPE html>
<html lang="en">

<head>
  <title>Web Applications and Technologies</title>
  <link type="text/css" rel="stylesheet" href="main.css" />
</head>

<body>
  <header>
    <h1>Dipesh Mahato, 7261131</h1>
  </header>

  <section id="container">
    <h1>Fundamentals of PHP</h1>
    <h2>Selection</h2>
    <?php
    $day = date("l"); // that is a lower case L
    echo 'It\'s ' . $day;

    echo "<br />";

    // prints somethng like: Monday 31th of October 2021 07:28:00 AM
    echo date("l jS \of F Y h:i:s A");
    echo "<br />";

    $day = date("l"); // represents the current day
    if ($day == "Wednesday") {
      echo "It's midweek";
    } else {
      echo "It's not midweek";
    }

    $hour = date("H"); // represents the current hour
    if ($hour < 12) {
      echo "<br />Good morning";
    } elseif ($hour > 12 && $hour <= 18) {
      echo "<br />Good afternoon";
    } else {
      echo "<br />Good evening";
    }

    $password = "password";
    if ($password == "password" || $password == "username") {
      if (strlen($password) > 4 && strlen($password) < 10) {
        echo "<br />The password length is invalid.";
      } else {
        echo "<br />The password length is valid.";
      }
      echo "<br />Incorrect password";
    } else {
      echo "<br />Correct password";
    }

    echo "<br />";

    $ticketPrice = 25;
    $age = 15;
    $membership = TRUE;
    $finalTicketPrice = 0;

    if ($age <= 12 && $membership == TRUE) {
      $finalTicketPrice = $ticketPrice - ($ticketPrice * 0.5);
      echo "Initial Ticket Price: " . $ticketPrice . "<br />";
      echo "Age: " . $age . "<br />";
      echo "Membership: " . $membership . "<br />";
      echo "Finale Ticket Price: " . $finalTicketPrice . "<br />";
    } elseif ($age <= 18 && $membership == TRUE) {
      $finalTicketPrice = $ticketPrice - ($ticketPrice * 0.25);
      echo "Initial Ticket Price: " . $ticketPrice . "<br />";
      echo "Age: " . $age . "<br />";
      echo "Membership: " . $membership . "<br />";
      echo "Finale Ticket Price: " . $finalTicketPrice . "<br />";
    } elseif ($age >= 65 && $membership == TRUE) {
      $finalTicketPrice = $ticketPrice - ($ticketPrice * 0.25);
      echo "Initial Ticket Price: " . $ticketPrice . "<br />";
      echo "Age: " . $age . "<br />";
      echo "Membership: " . $membership . "<br />";
      echo "Finale Ticket Price: " . $finalTicketPrice . "<br />";
    } elseif ($membership == TRUE) {
      $finalTicketPrice = $ticketPrice - ($ticketPrice * 0.10);
      echo "Initial Ticket Price: " . $ticketPrice . "<br />";
      echo "Age: " . $age . "<br />";
      echo "Membership: " . $membership . "<br />";
      echo "Finale Ticket Price: " . $finalTicketPrice . "<br />";
    } else {
      $finalTicketPrice = $ticketPrice;
      echo "Initial Ticket Price: " . $ticketPrice . "<br />";
      echo "Age: " . $age . "<br />";
      echo "Membership: " . $membership . "<br />";
      echo "Finale Ticket Price: " . $finalTicketPrice . "<br />";
    }

    echo "<h2>Arrays</h2>" . "<br />";
    echo "<h3>Simple Arrays</h3>" . "<br />";

    $products = array("T-Shirt", "Cap", "Mug");
    print_r($products);

    echo "<br />";

    $products[1] = "Shirt";
    print_r($products);

    echo "<br />";

    $products[] = "Skirt";
    print_r($products);

    echo "<br />";

    echo "The item at index[2] is: " . $products[2] . "<br />";
    echo "The item at index[3] is: " . $products[3] . "<br />";

    echo "<h3>Associative Arrays</h3>" . "<br />";
    $customer = array("CustID" => 12, "CustName" => "Sarah", "CustAge" => 23, "CustGender" => "F");
    print_r($customer);

    echo "<br />";

    $customer["CustAge"] = 24;
    $customer["CustEmail"] = "sarah@gmail.com";
    print_r($customer);

    echo "<br />";

    echo "Items in my customer array" . "<br />";
    echo "The item at index[CustName] is: " . $customer["CustName"] . "<br />";
    echo "The item at index[CustEmail] is: " . $customer["CustEmail"] . "<br />";

    echo "<h3>Multi-Dimensional Arrays</h3>" . "<br />";
    $stock = array(
      array("T-Shirt", 9.99, 100, "blue", "green", "red"),
      array("Cap", 4.99, 50, "blue", "black", "grey"),
      array("Mug", 6.99, 30, "yellow", "green", "pink"),
    );

    echo "This is my order:" . "<br />";
    echo $stock[0][4] . " " . $stock[0][0] . "<br />";
    echo "Price: &pound" . $stock[0][1] . "<br />";
    echo $stock[1][5] . " " . $stock[1][0] . "<br />";
    echo "Price: &pound" . $stock[1][1] . "<br />";

    echo "<h2>Loops</h2>" . "<br />";
    echo "<h3>While Loop</h3>" . "<br />";

    $counter = 1;
    while ($counter < 6) {
      echo "Count: " . $counter . "<br />";
      $counter++;
    }

    echo "<br />";

    $shirtPrice = 9.99;
    $counter = 1;
    while ($counter <= 10) {
      $total = $counter * $shirtPrice;
      echo $counter . " - &pound" . $total . "<br />";
      $counter++;
    }

    echo "<br />";
    echo "<table border = 1px>";
    $shirtPrice = 9.99;
    $counter = 1;
    echo "<th>Quantity</th><th>Price</th>";
    while ($counter <= 10) {
      $total = $counter * $shirtPrice;
      echo "<tr><td>" . $counter . "</td><td>&pound" . number_format($total, 2) . "</td></tr>";
      $counter++;
    }

    echo "</table>";
    echo "<br />";

    echo "<h3>For Loop</h3>" . "<br />";
    $names = array("Sarah", "John", "Jane", "Mark", "Doe");
    for ($i = 0; $i < 5; $i++) {
      echo $names[$i] . "<br />";
    }

    echo "<br />";
    echo "<h3>Foreach Loops</h3>";

    $names = array("Sarah" => 77261044, "John" => 77261045, "Jane" => 77261134, "Mark" => 77261135, "Doe" => 77261136);
    foreach ($names as $name => $id) {
      echo "Name: " . $name . " " . "ID: " . $id . "<br />";
    }

    echo "<br />";

    $city = array("Peter" => "LEEDS", "Kat" => "bradford", "Laura" => "wakeField");
    foreach ($city as $k => $v) {
      print_r(ucfirst(strtolower($city[$k])) . "<br />");
    }

    ?>
  </section>

  <footer>
    <small><a href="../watIndex.html">Home</a></small>
  </footer>
</body>

</html>
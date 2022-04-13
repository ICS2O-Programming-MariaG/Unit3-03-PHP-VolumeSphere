<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Maria's PHP Sphere Volume Webpage">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="MariaG">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Calculating the Volume of a Sphere in PHP- Maria Goemans</title>
  </head>
  <body>
    <?php echo "<h1>Calculating the Volume of a Sphere in PHP</h1>"; ?>
    <!-- Div for style -->
    <div id="green">
      <?php echo "<p>Welcome! This web page will take your input for the radius of a sphere and  calculate the volume of that sphere. See below for a diagram of the radius of a sphere (the radius is equal to 1/2 the diameter) Then input the radius in the form below:</p>"; ?>
      <img src="./images/radius.png" alt="radius = 1/2 diameter">
    </div>
    <!-- Another div for style -->
    <div id="blue">
      <?php echo "<h3>Your Input</h3>"; ?>
      <form action="./calculations.php" method="post" target="volume-sphere">
        <label for="radius">Length of the radius of a sphere (in cm)</label>
        <input type="number" step="0.01" min="0" name="radius" placeholder="Length of a radius..."><br><br>
        <input type="submit" value="Calculate">
      </form>
    </div>
    <!-- Last div for style -->
    <div id="yellow">
      <iframe id="volume-sphere" name="volume-sphere">
      </iframe>
    </div>
  </body>
</html>
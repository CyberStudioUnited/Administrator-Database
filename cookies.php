<!DOCTYPE html>
<title>admin database port 127.0.0.1</title>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color: #04AA6D;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
</style>
</head>
<body>
<img src="ADMINDB.png" alt="FM" href="filemanager.php">
<div class="navbar">
  <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i>Tools</a> 
  <a href="settings.php"><i class="fa fa-fw fa-search"></i>Settings</a>
</div>
</head>
<body>
  <h1>Click on this button to check all cookies associated with your site.</h1>
  <button onclick="getCookies()">Check cookies</button>

  <p id="cookies"></p>

<script>
function getCookies() {
  var x = "Your cookies: " + document.cookie;
  document.getElementById("cookies").innerHTML = x;
}
</script>
</div>



</body>
</html> 

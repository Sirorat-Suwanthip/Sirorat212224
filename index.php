<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
 </style>
 <body>
<header>
  <h2>Sirorat </h2>
</header>

 <article>
    <iframe src="https://thingspeak.com/channels/1458416/maps/channel_show" width="450" height="260"></iframe>
<iframe src="https://thingspeak.com/channels/1458416/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" width="450" height="260"></iframe>
<iframe src="https://thingspeak.com/channels/1458416/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" width="450" height="260"></iframe>
<?php
 $Temperature = file_get_contents('https://api.thingspeak.com/channels/1458415/fields/1/last.txt');
 $Humidity = file_get_contents('https://api.thingspeak.com/channels/1458415/fields/2/last.txt');
?>
<script type="text/JavaScript">
function timedRefresh(timeoutPeriod) {
    setTimeout("location.reload(true);",timeoutPeriod);
}
</script>
 <br> <?php echo "Humidity is = ".$Temperature ?> </br> 
 <br> <?php echo " Temperature is = ".$Humidity ?> </br>
  </article>


<footer>
  <p>Happy Happy</p>
</footer>
 </body>

</html>

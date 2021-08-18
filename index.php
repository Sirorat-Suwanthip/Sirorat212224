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
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
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
  width: 100%;
  height: 100%; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 70px;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 40px;
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
  <h2>Sirorat Suwanthip 62109459</h2>
</header>
   
<nav>
  <table>
    <tr>
      <td><iframe src="https://thingspeak.com/channels/1458416/maps/channel_show" width="450" height="260"></iframe></td>
      <td><iframe src="https://thingspeak.com/channels/1458416/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" width="450" height="260"></iframe></td>
      <td><iframe src="https://thingspeak.com/channels/1458416/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" width="450" height="260"></iframe></td>
    </tr>
<?php
 $Temperature = file_get_contents('https://api.thingspeak.com/channels/1458415/fields/1/last.txt');
 $Humidity = file_get_contents('https://api.thingspeak.com/channels/1458415/fields/2/last.txt');
?>
<script type="text/JavaScript">
function timedRefresh(timeoutPeriod) {
    setTimeout("location.reload(true);",timeoutPeriod);
}
</script>
    <tr>
     <td>My home location</td>
     <td><br> <?php echo "Humidity is = ".$Temperature ?> </br> </td>
     <td><br> <?php echo " Temperature is = ".$Humidity ?> </br></td>
    </tr>
   </table>
</nav>
<footer>
  <p>Happy Happy</p>
</footer>
 </body>

</html>

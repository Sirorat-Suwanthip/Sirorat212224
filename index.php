<body onload="JavaScript:timedRefresh(15000);"> 
<br><h1>Sirorat Suwanthip 62109459 </h1></br>

<iframe src="https://thingspeak.com/channels/1458416/maps/channel_show" width="450" height="260"></iframe>
<iframe src="https://thingspeak.com/channels/1458416/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" width="450" height="260"></iframe>
<iframe src="https://thingspeak.com/channels/1458416/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" width="450" height="260"></iframe>
<?php
 $Temperature = file_get_contents('https://thingspeak.com/channels/1458416/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15');
 $Humidity = file_get_contents('https://thingspeak.com/channels/1458416/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15');
?>
<script type="text/JavaScript">
function timedRefresh(timeoutPeriod) {
    setTimeout("location.reload(true);",timeoutPeriod);
}
</script>
 <br> <?php echo "Humidity is = ".$Temperature ?> </br> 
 <br> <?php echo " Temperature is = ".$Humidity ?> </br>
 
</body>

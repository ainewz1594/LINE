<!DOCTYPE html>
<html>
<head>
<TITLE>SmartGardent Kmutnb</TITLE>
<META NAME="Generator" CONTENT="EditPlus">
<META NAME="Author" CONTENT="">
<META NAME="Keywords" CONTENT="">
<META NAME="Description" CONTENT="">
</head>
<style type="text/css">
  body { background-color: #ffffff; }
</style>
<body>
<center><h1><font color=#330066>Welcome To Smart Gardent Control System</FONT></h1>
<h2><img src="http://www.vesternet.com/media/wysiwyg/GreenIQ/GreenIQ_system.jpg"></h2>
<font color=#000080><FONT SIZE=5>หน้าต่างแสดงผล <font color=#000080>จุดทดสอบ</FONT></FONT></FONT><br>
<br>
<button onClick = "window.location = 'https://smart-kmutnb.herokuapp.com/'"> Refresh </button><br>
  <p> </p>
<table align="center">
<tr algin="center">
 <td align="center"><iframe width="450" height="300" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/345345/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&days=1&results=20&title=temp_C&type=line&update=60"></iframe></td>
  <td align="center"><iframe width="450" height="300" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/345345/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&days=1&results=20&title=Humidity_percen&type=line&update=60"></iframe></td>
  </tr>
 </table>
  <p> </p>
<font color=#000080><FONT SIZE=5> สถานะการทำงาน </FONT></FONT><br>
  <center>  
 <canvas id="myCanvas" width="200" height="100"
style="border:5px solid pink;">
</canvas>
<script>
var c=document.getElementById("myCanvas");
var ctx=c.getContext("2d");
ctx.font="30px Arial";
ctx.fillText("Status: OFF",15,60);
</script>
    <p> </p>
  
<FONT SIZE=4>

 <?php
date_default_timezone_set('Asia/Bangkok');
$now = new DateTime();
  $datenow = $now->format("Y-m-d H:i:s");
 $hvalue = $value;
 $temp = file_get_contents('https://api.thingspeak.com/channels/345345/fields/1/last.txt');
$humidity = file_get_contents('https://api.thingspeak.com/channels/345345/fields/2/last.txt');

 echo "temp is = ".$temp."<br>";
 echo "humidity is = ".$humidity."<br>";
 echo "Time Update = ".$datenow."<br>";
?>
  

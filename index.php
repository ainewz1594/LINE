<!DOCTYPE html>
<html>
<head>
<TITLE>Smart Gardent</TITLE>
<META NAME="Generator" CONTENT="EditPlus">
<META NAME="Author" CONTENT="">
<META NAME="Keywords" CONTENT="">
<META NAME="Description" CONTENT="">
</head>
<style type="text/css">
  body { background-color: #ffffff; }
</style>
<body>



<center> <h1>Welcome To Smart Gardent Control System</h1>
<h2><img src="http://www.vesternet.com/media/wysiwyg/GreenIQ/GreenIQ_system.jpg"></h2>
<p>หน้าต่างแสดงผล</p>
<button onClick = "window.location = 'https://smart-kmutnb.herokuapp.com/'"> Refresh </button>
<p> <p>
<table align="center">
<tr algin="center">
 <td align="center"><iframe width="450" height="300" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/345345/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=temp&type=line"></iframe></td>
  <td align="center"><iframe width="450" height="300" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/345345/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Humidity&type=line"></iframe></td>
  </tr>
 </table>
<p><p>

 <p align = "center"><img src="" hspace=20> สถานะการทำงาน
  <p></p>
<center><input type="label" name="gender" id="On/off" value="                On/Off" ><br>

</body>
</html>

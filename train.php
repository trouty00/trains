<!--<?php #include_once("http://192.168.1.110/analyticstracking.php") ?>-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75844603-3', 'auto');
  ga('send', 'pageview');

</script>
<html>
 <head>
  <title>Imperihome Trains</title>
   <meta http-equiv="refresh" content="90">
<!-- PLEASE READ THE FOLLOWIING
V0.1

This is using a hosted forked version of Huxleys JSON Proxy (https://github.com/jpsingleton/Huxley) Credit to him for the hard work.
Feel free to use it but please dont abuse and I could be forced to remove at any time. you can also setup your own following Huxleys instructions

You have to do two things to get this working 
1. see line 50 and uopdate station codes. Currently HER (Hersham) to Wat (London Waterloo)

2. You also must register for a OPENLDWS token which you can easily get here https://realtime.nationalrail.co.uk/OpenLDBWSRegistration/Registration
Again - line 50 replace {tokengoeshere} with your code - removing the {} also.

There are ways to show all departures but figure most people are just interested in one journey. you cab explore (https://github.com/jpsingleton/Huxley) to do this.
Place this file in a folder on your webserver which is running PHP

Also apologies - I'm sure the code is super inefficient but I am not a programmer and 
everything you see below I have put together in the last few days by learning bits of PHP, CSS, HTML and JSON

If anyone has the ability to tidy up and wants to send it back then please do and I will update the download
--> 
 </head>
 <style type="text/css" scoped>
 <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
p.GeneratedText {
color:#FFFFFF;background-color:#262626;
}
  body {
	background-color:#262626;	
}
type {
    color: #FFFFFF;
	font-size:16px; 
	font-family: 'Roboto', sans-serif;
	text-decoration:none
}
green{
    color: #00ff00;
	font-size:18px; 
	font-family: 'Roboto', sans-serif;
	font-weight: bold;
	text-align: center;
}
red{
    color: #ff0000;
	font-size:18px; 
	font-family: 'Roboto', sans-serif;
	font-weight: bold;
	text-align: center;
}

</style>
 <body>

 <type>   	
 <?php 
#$json_string2 = file_get_contents("https://huxley.apphb.com/departures/HER/to/WAT?accessToken=DA1C7740-9DA0-11E4-80E6-A920340000B1");
$json_string2 = file_get_contents("https://stuarttrains.apphb.com/departures/HER/to/WAT?accessToken=9301b0ec-2cf8-45c9-9038-f60f2f23ee0b");
$parsed_json2 = json_decode($json_string2, true);
#output the json array to debug/create
#echo '<pre>' . print_r($parsed_json2, true) . '</pre>';


$from = $parsed_json2['crs'];
$to = $parsed_json2['filtercrs'];
$sta0 = $parsed_json2['trainServices'][0]['sta'];
$eta0 = $parsed_json2['trainServices'][0]['eta'];
$std0 = $parsed_json2['trainServices'][0]['std'];
$etd0 = $parsed_json2['trainServices'][0]['etd'];


$sta1 = $parsed_json2['trainServices'][1]['sta'];
$eta1 = $parsed_json2['trainServices'][1]['eta'];
$std1 = $parsed_json2['trainServices'][1]['std'];
$etd1 = $parsed_json2['trainServices'][1]['etd'];

$sta2 = $parsed_json2['trainServices'][2]['sta'];
$eta2 = $parsed_json2['trainServices'][2]['eta'];
$std2 = $parsed_json2['trainServices'][2]['std'];
$etd2 = $parsed_json2['trainServices'][2]['etd'];

?>
<style>
	.demo {
		width:432px;
		height:180px;
		border:0px solid #C0C0C0;
		border-collapse:collapse;
		padding:0px;
	}
	.demo th {
		border:0px solid #C0C0C0;
		padding:0px;
		background:#F0F0F0;
	}
	.demo td {
		border:0px solid #C0C0C0;
		padding:0px;
		color: #FFFFFF;
		font-size:18px; 
		font-family: 'Roboto', sans-serif;
		font-weight: bold;
		text-align: center;
	}
</style>
<table class="demo">
	<!-- <caption>Table 1</caption> -->
	<thead>
	<tr>
		<th>From</th>
		<th>To</th>
		<th>Due</th>
		<th>Status</th>
	</tr>
	</thead>
	<tbody>
	<type>
	<tr>
		<td><?php echo "${from}";?></td>
		<td><?php echo "${to}";?></td>
		<td><?php echo "${std0}";?></td>
		<td><?php if ($etd0 == "On time")
	 {
	 echo  "<green> ${etd0}</green>";
	 }
	 else
	 echo  "<red> ${etd0}</red>";?></td>
	</tr>
		
	<tr>
		<td><?php echo "${from}";?></td>
		<td><?php echo "${to}";?></td>
		<td><?php echo "${std1}";?></td>
		<td><?php if ($etd1 == "On time")
	 {
	 echo  "<green> ${etd1}</green>";
	 }
	 else
	 echo  "<red> ${etd1}</red>";?></td>
	</tr>
	<tr>
		<td><?php echo "${from}";?></td>
		<td><?php echo "${to}";?></td>
		<td><?php echo "${std2}";?></td>
		<td><?php if ($etd2 == "On time")
	 {
	 echo  "<green> ${etd2}</green>";
	 }
	 else
	 echo  "<red> ${etd2}</red>";?></td>
	</tr>
	</tbody>
</table>

<type>
 

 </a>
 </body>
 
 <!-- Piwik -->
<!--temp disable
 <script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//192.168.1.110/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//192.168.1.110/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>

-->
<!-- End Piwik Code -->
</html>


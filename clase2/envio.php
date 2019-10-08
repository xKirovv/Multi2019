<html>
	<head>
		<title></title>
	</head>
	<style>
	
	body{
	background:#333;
	}
	
	.boton {
	background-color: #ccffcc; 
	color: #fff;
	border: none;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	float:left;
	transition-duration: 0.4s;
	}
	.boton:hover
	{
	color: #fff;
	background-color: #99ff99;
	}

	#header{
	width:1200px;
	height:200px;
	background:#cccccc;
	}
	#menu{
	width:1200px;
	height:50px;
	background:#ccffcc;
	}
	#main{
	width:1200px;
	height:1000px;
	background:#cccccc;
	}
	#footer{
	width:1200px;
	height:200px;
	background:#ccffcc;
	}
	#div1_fondo
	{
	width:400px;
	height:250px;
	background:url(img/div1_fondo.png)no-repeat;
	float:left;
	}
	#div2_fondo
	{
	width:400px;
	height:250px;
	background:url(img/div1_fondo.png)no-repeat;
	float:left;
	}
	#div_cont3
	{
	width:800px;
	height:750px;
	float:left;
	}
	#div3
	{
	border-radius:25px;
	background: #99CCFF;
	 
	width:800px;
	height:250px;
	float:left;
	}
	#div4
	{
	border-radius:25px;
	background: #99CCFF;
	width:800px;
	height:250px;
	float:left;
	}
	


	#div5
	{
	border-radius:25px;
	background: #99CCFF;
	width:400px;
	height:750px;
	float:left;
	}
	#div6
	{
	border-radius:200px;
	background: #99CCFF;
	margin:25px 25px;
	width:200px;
	height:200px;
	float:left;
	}
	#div7
	{
	border-radius: 50px 50px 50px; 
	background: #99CCFF;
	margin:25px 25px;
	width:200px;
	height:200px;
	float:left;
	}
	#div8
	{
	border:1px dotted #000;
	border-radius: 100px 10px;
	box-shadow: 5px 10px 8px #888888;
	background: url(img/textura.jpg);
	margin:25px 25px;
	width:200px;
	height:200px;
	float:left;
	
	}

	<!--  fin div Id -->
	</style>
	<body>
	<center>
	<div id="header"></div>
	<div id="menu">
			<div class="boton"><a href="#">Inicio</a></div>
			<div class="boton"><a href="#">clase1</a></div>
			<div class="boton"><a href="#">clase2</a></div>
			<div class="boton"><a href="#">clase3</a></div>
			<div class="boton"><a href="#">clase4</a></div>
	</div>
	<div id="main">
	<form action="case.php" method="POST">
	Ingrese a:<br>
	
	
	<select name="CLASE">
	<option value="AB" >AB</option><!-- 6,400,000 -->
    <option value="C1A" >C1A</option> <!-- 2,739,000 -->
    <option value="C1B">C1B</option> <!-- 1,986,000 -->
	<option value="C2">C2</option> <!-- 1,360,000 -->
	<option value="C3">C3</option> <!-- 899,000 -->
	<option value="D">D</option> <!-- 562,000 -->
	<option value="E">E</option> <!-- 324,000 -->
	
  </select>
	<input type="submit" value="Enviar">
</form>
	</div>
	<div id="footer"></div>
	</center>
	</body>
</html>
<!DOCTYPE html>
<head>
<title> Кратчайший путь </title>
</head>
<body>
	<h1> Нахождение кратчайшего пути по взвешенному графу</h1>
	<form method = 'post'>
	<label> Введите начальную вершину графа </label>
	<br/>
	<input name = 'p_start' type='text' required>
	<br/>
	<label> Введите конечную вершину графа </label>
	<br/>
	<input name = 'p_end' type='text' required>
	<br/>
	<input type = 'submit' name = 'submit' value = 'Вычислить'>
	
	
	<?php
require_once "binary.php";
?>
</body>
</html>

<form action="index.php" method="get">
    Имя:  <input type="text" name="name" /><br />
    <input type="submit" name="submit" value="Отправь меня!" />
</form>

<?php
$a=$_REQUEST['name'];
if ($a>0){
	echo "$a - положительное <br/>";
}
elseif ($a<0) {
	echo "$a - отрицательное <br/>";
}
elseif ($a===0) {
	echo "$a - ноль <br/>";
}
else {
	echo "$a - не число <br/>";
}

?>
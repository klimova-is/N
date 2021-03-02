<form action="lab2.php" method="post">
    Имя:  <input type="text" name="name" /><br />
    <input type="submit" name="submit" value="Отправь меня!" />
</form>

<?php

$ar=array('html', 'css', 'php', 'js', 'jq');

foreach ($ar as $value) {
	echo "$value<br/>";
}

$ar[]='sql';

foreach ($ar as $value) {
	echo "$value<br/>";
}

$ar1=array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach ($ar1 as $key => $value) {
	echo "$key; ";
}

echo "<br/>";

foreach ($ar1 as $key => $value) {
	echo "$value; ";
}

echo "<br/>";

$n=$_REQUEST['name'];
$ar2=array();
for($i=0;$i<$n; $i++){
	$ar2[$i]=$i;
}
foreach ($ar2 as $value) {
	echo "$value<br/>";
}
echo $ar[3];
?>
<?php
$mysqli = new mysqli("localhost", "root", "root", "users");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo "Вы подключились к базе данных" . "\n";

$res = $mysqli->query("SELECT First_name FROM user_name ORDER BY First_name");

echo "Обратный порядок...\n";
for ($row_no = $res->num_rows - 1; $row_no >= 0; $row_no--) {
    $res->data_seek($row_no);
    $row = $res->fetch_assoc();
    echo " First_name = " . $row['First_name'] . "\n";
}

echo "Исходный порядок строк...\n";
$res->data_seek(0);
while ($row = $res->fetch_assoc()) {
    echo " First_name = " . $row['First_name'] . "\n";
}
?>
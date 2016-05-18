<?php 
// Сервер
// Имя
// Логин пользователя БД
// Пароль пользователя БД
// Переменная, для подключения к БД
// Выбор базы данных
// Кодировка

$host = "localhost";
$db_name = "mydb";
$login = "_______";
$password = "________";

$connect = mysql_connect("$host", "$login", "$password");
if (!$connect) {
	exit(mysql_error());
} else {
	mysql_select_db("$db_name", $connect);
}
mysql_query("SET NAMES 'utf-8'");

/* Выполняем SQL-запрос */
$query = "SELECT * FROM tutorials ORDER BY artist asc";
$sql = "select COLUMN_NAME from INFORMATION_SCHEMA.COLUMNS where TABLE_NAME=\'tutorials\'";
$result = mysql_query($query) or die("Query failed : " . mysql_error());

/* Выводим результаты в html */
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    print "\t<tr>\n";
    foreach ($line as $col_value) {
       	print "\t\t<td>$col_value</td>\n";
        }
    print "\t</tr>\n";
    }
    
/* Освобождаем память от результата */
mysql_free_result($result);

/* Закрываем соединение */
mysql_close($connect);

?>
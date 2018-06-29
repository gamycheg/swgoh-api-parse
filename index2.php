<?php
//Забираем ID Гильдии
$guild = "1111";
if(isset($_POST['idguild'])) $guild = $_POST['idguild'];
//Ссылка на главную
echo "<h1><p align=center>Статистика по гильдии</p></h1>";
echo "<h2><p align=center><a href=http://92.53.91.30/>Вернуться на главную</a></h2>";
//Обработка API с swgoh.gg (для смены инфы просто подставьте ссылку на свою ги)
$json=file_get_contents("https://swgoh.gg/api/guilds/$guild/units/");
$data =  json_decode($json, true);

//Подгружаем массивы
	include "headers.php";
	
//Расскоментить следующую строку для проверки обработки API
//var_dump($data);

//Создание таблицы с данными
echo "<table border=1 align=center bgcolor=#FFFACD>";
echo "<tr>";
echo "<th>Имя персонажа</th>";
foreach($headnames as $fuck => $val) {
	echo "<th>$val</th>";	
}
echo "</tr>";
foreach ($data as $heroname => $heroparams) {
	foreach($heroparams as $paramkey => $params) {   
		echo "<tr>";
		echo "<td align=center>".(isset($data[$heroname])?str_replace($hero_eng,$hero_rus,$heroname):"not have")."</td>";
		foreach($headnames as $headname => $fuck) {
			if($headname=='gear_level') echo "<td align=center>".(isset($params[$headname])?number_to_roman($params[$headname]):"none")."</td>";
			else if($headname=='combat_type') echo "<td align=center>".(isset($params[$headname])?str_replace($tip_old,$tip_new,$params[$headname]):"none")."</td>";
			else if($headname=='rarity') echo "<td align=center>".int_to_star($params[$headname])."</td>";
			else echo "<td align=center>$params[$headname]</td>";
			
		}
		echo "</tr>";	
	}

	 
}

echo "</table>";

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8"><Title>Ипотека</Title>
<style type="text/css">
    body { background-color:
 #fff; border-top: solid 10px #000;
 color: #333; font-size: .85em;
 margin: 20; padding: 20;
 font-family: "Segoe UI",
 Verdana, Helvetica, Sans-Serif;
    }
    h1, h2, h3,{ color: #000;
margin-bottom: 0; padding-bottom: 0; }
    h1 { font-size: 2em; }
    h2 { font-size: 1.75em; }
    h3 { font-size: 1.2em; }
    table { margin-top: 0.75em; }
    th { font-size: 1.2em;
 text-align: left; border: none; padding-left: 0; }
    td { padding: 0.25em 2em 0.25em 0em;
border: 0 none; }
</style>
</head>
<body>
<h1>Оформление ипотеки</h1>
<p>Заполните анкету.</p>
<form method="post" action="anketa.php">
Пол <select name="pol">
  <option value=""></option>
  <option value ="Man">Муж</option>
  <option value ="Woman">Жен</option>
</select></br>
Возраст <select name="age">
  <option value ="a1">20-30 лет</option>
  <option value ="a2">31-45 лет</option>
  <option value ="a3">46-60 лет </option>
</select></br>
Семейное положение <select name="sp">
  <option value ="b1">женат (замужем)</option>
  <option value ="b2">холост (не замужем)</option>
  <option value ="b3">разведен(а)</option>
  <option value ="b4">вдовец(ва)</option>
</select></br>
Иждевенцы <input type="checkbox" name="ij" value="d1">есть<br/>
Образование <select name="educat">
  <option value ="c1">среднее</option>
  <option value ="c2">техническое</option>
  <option value ="c3">высшее</option>
</select></br>
Работа <select name="work">
  <option value ="f1">собственное дело</option>
  <option value ="f2">работа по найму</option>
  <option value ="f3">работа в бюджетной сфере</option>
</select></br>
Должность <select name="dolj">
  <option value ="g1">топ-менеджер</option>
  <option value ="g2">руководитель </option>
  <option value ="g3">служащий</option>
</select></br>
Среднемесячный доход <select name="sel">
  <option value ="h1">до $1000</option>
  <option value ="h2">$1000 - 2000</option>
  <option value ="h3">$2000 - 3000</option>
  <option value ="h4">больше $3000</option>
</select></br>
Прочие источники дохода <select name="prsel">
  <option value ="k1">ценные бумаги</option>
  <option value ="k2">вклады </option>
  <option value ="k3">прочие доходы</option>
  <option value ="k4">нет</option>
</select></br>
Кредитовались ли вы ранее
<input type="checkbox" name="credit" value="l1"> да </br>
Имеются ли непогашенные кредиты
<input type="checkbox" name="nepcredit" value="m1"> да</br>
Наличие собственности <select name="prop">
  <option value ="n1">квартира</option>
  <option value ="n2">дом, дача</option>
  <option value ="n3">автомобиль</option>
  <option value ="n4">нет</option>
</select></br>
Стоимость приобретаемой квартиры <input type="text"
name="hom" id="hom"/></br>
Срок кредита  <select name="srok">
  <option value ="o1">1-3 года</option>
  <option value ="o2">4-6 лет</option>
  <option value ="o3">7-10 лет</option>
  <option value ="o4">11-15 лет</option>
</select></br>
Начальный капитал <input type="text" name="nachkap" id="name"/></br>
Привлекались ли Вы к уголовной ответственности?
<input type="checkbox" name="ugot" value="p1"> да</br>
<input type="submit" name="submit" value="Результат"/>
</form>
</body>
</html>

<?php
try
{
  $conn = new PDO("mysql:host=localhost;dbname=Progr", "root", "");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
  print("Error connecting to SQL Server.");
  die(print_r($e));
}




if (isset($_POST['submit'])) {

 $familiya = $_POST['familiya'];
 $name = $_POST['name'];
 $otchestvo = $_POST['otchestvo'];
 $birthday = $_POST['birthday'];
 $inn = $_POST['inn'];
 $telefon = $_POST['telefon'];
 $adres = $_POST['adres'];
 $seria = $_POST['seria'];
 $nomerp = $_POST['nomerp'];
 $kem = $_POST['kem'];
 $data = $_POST['data'];
 $kodp = $_POST['kodp'];

 $pol = $_POST['pol'];
 $age = $_POST['age'];
 $sp = $_POST['sp'];
 $ij = $_POST['ij'];
 $educat = $_POST['educat'];
 $work = $_POST['work'];
 $dolj = $_POST['dolj'];
 $sel = $_POST['sel'];
 $prsel = $_POST['prsel'];
 $credit = $_POST['credit'];
 $nepcredit = $_POST['nepcredit'];
 $prop = $_POST['prop'];
 $hom = $_POST['hom'];
 $srok = $_POST['srok'];
 $nachkap = $_POST['nachkap'];
 $ugot = $_POST['ugot'];

   // Insert data
  $sql_insert = "INSERT INTO klient_tbl (familiya,name,otchestvo, birthday, inn, telefon,adres, seria,nomerp,kem,data,kodp,pol,age,sp,ij,educat,work,dolj,sel,prsel,credit,nepcredit,prop,hom,srok,nachkap,ugot)
  VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
 $stmt = $conn->prepare($sql_insert);
 $stmt->bindValue(1, $familiya);
 $stmt->bindValue(2, $name);
 $stmt->bindValue(3, $otchestvo);
 $stmt->bindValue(4, $birthday);
 $stmt->bindValue(5, $inn);
 $stmt->bindValue(6, $telefon);
 $stmt->bindValue(7, $adres);
 $stmt->bindValue(8, $seria);
 $stmt->bindValue(9, $nomerp);
 $stmt->bindValue(10, $kem);
 $stmt->bindValue(11, $data);
 $stmt->bindValue(12, $kodp);
 $stmt->bindValue(13, $pol);
 $stmt->bindValue(14, $age);
 $stmt->bindValue(15, $sp);
 $stmt->bindValue(16, $ij);
 $stmt->bindValue(17, $educat);
 $stmt->bindValue(18, $work);
 $stmt->bindValue(19, $dolj);
 $stmt->bindValue(20, $sel);
 $stmt->bindValue(21, $prsel);
 $stmt->bindValue(22, $credit);
 $stmt->bindValue(23, $nepcredit);
 $stmt->bindValue(24, $prop);
 $stmt->bindValue(25, $hom);
 $stmt->bindValue(26, $srok);
 $stmt->bindValue(27, $nachkap);
 $stmt->bindValue(28, $ugot);
 $stmt->execute();

}

?>

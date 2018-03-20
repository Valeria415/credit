<html>
<head>
<Title>Ипотека</Title>
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
<p>Введите свои данные и перейдите по кнопке<strong> "Далее" </strong> .</p>
<form method="post" action="index.php"
      enctype="multipart/form-data" >
Фамилия  <input type="text"
       name="familiya" id="familiya"/></br>
Имя  <input type="text"
       name="name" id="name"/></br>  
Отчество  <input type="text"
       name="otchestvo" id="otchestvo"/></br>
Дата рождения <input type="date" pattern="[0-9]{2}.[0-9]{2}.[0-9]{4}"
       name="birthday"/></br>  
ИНН  <input type="text"
       name="inn" id="inn"/></br>  
Номер телефона <input type="text"
       name="telefon" id="telefon"/>
Адрес  <input type="text"
       name="adres" id="adres"/></br>  
Серия  <input type="text"
       name="seria" id="seria"/></br>  
Номер  <input type="text"
       name="nomerp" id="nomerp"/></br>  
Кем выдан  <input type="text"
       name="kem" id="kem"/></br>  
Дата выдачи  <input type="date" pattern="[0-9]{2}.[0-9]{2}.[0-9]{4}"
       name="data" id="data"/></br>  
Код подразделения  <input type="text"
       name="kodp" id="kodp"/></br>
<input type="submit"
name="submit" value="Далее"/>
</body>
</html>

<?php
try 
{
$conn = new PDO("sqlsrv:server = tcp:pinyasova.database.windows.net,1433; Database = Progr", "Valera", "Hswfhmlyz08");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) 
  {
print("Error connecting to SQL Server.");
die(print_r($e));
  }

if(isset($_POST["submit"])) {
    if($_POST["familiya"] ==""){echo "Введите свои данные";}
    else{
    try {
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
        
// Insert data 
$sql_insert = "INSERT INTO klient_tbl (familiya,name,otchestvo, birthday, inn, telefon,adres, seria,nomerp,kem,data,kodp) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
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
$stmt->execute();
}
catch(Exception $e) 
{
die(var_dump($e));
}
}
}
$sql_select = "SELECT * FROM klient_tbl";
$stmt = $conn->query($sql_select);
$registrants = $stmt->fetchAll();
if(count($registrants) > 0) {
    echo "<table>";
    echo "<tr><th>familiya</th>";
    echo "<th>name</th>";
    echo "<th>otchestvo</th>";
    echo "<th>birthday</th>";
    echo "<th>inn</th>";
    echo "<th>telefon</th>";
    echo "<th>adres</th></tr>";
    foreach($registrants as $registrant) {
        echo "<tr><td>".$registrant['familiya']."</td>";
        echo "<td>".$registrant['name']."</td>";
        echo "<td>".$registrant['otchestvo']."</td>";
         echo "<td>".$registrant['birthday']."</td>";
        echo "<td>".$registrant['inn']."</td>";
         echo "<td>".$registrant['telefon']."</td>";
        echo "<td>".$registrant['adres']."</td></tr>";
    }
    echo "</table>";
   }
     else {
    echo "<h3>Ни один пользователь не зарегистрирован.</h3>";
}


?>

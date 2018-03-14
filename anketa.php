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
<p>Заполните анкету.</p>
<form method="post" action="index.php"
      enctype="multipart/form-data" >
Пол <select name="pol">
  <option value ="Man">Муж</option>
  <option value ="Woman">Жен</option>
</select></br>
Возраст <select name="age">
  <option value ="">20-30 лет</option>
  <option value ="">31-45 лет</option>
  <option value ="">46-60 лет </option>
</select></br>  
Семейное положение <select name="sp">
  <option value ="">женат (замужем)</option>
  <option value ="">холост (не замужем)</option>
  <option value ="">разведен(а)</option>
  <option value ="">вдовец(ва)</option>
</select></br>
Иждевенцы <input type="radio" name="ij" value="d1"> есть
          <input type="radio" name="ij" value="d2" checked> нет <br/>
Образование <select name="educat">
  <option value ="e">среднее</option>
  <option value ="">техническое</option>
  <option value ="">высшее</option>
</select></br>
Работа <select name="work">
  <option value ="f">собственное дело</option>
  <option value ="">работа по найму</option>
  <option value ="">работа в бюджетной сфере</option>
</select></br> 
Должность <select name="dolj">
  <option value ="g">топ-менеджер</option>
  <option value ="">руководитель </option>
  <option value ="">служащий</option>
</select></br>
Среднемесячный доход <select name="sel">
  <option value ="h">до $1000</option>
  <option value ="">$1000 - 2000</option>
  <option value ="">$2000 - 3000</option>
  <option value ="">больше $3000</option>
</select></br>
Прочие источники дохода <select name="prsel">
  <option value ="k">ценные бумаги</option>
  <option value ="">вклады </option>
  <option value ="">прочие доходы</option>
  <option value ="">нет</option>
</select></br>
Кредитовались ли вы ранее
<input type="radio" name="credit" value="l1"> да
<input type="radio" name="credit" value="l2" checked> нет </br>
Имеются ли непогашенные кредиты
<input type="radio" name="nepcredit" value="m1"> да
<input type="radio" name="nepcredit" value="m2" checked> нет</br>
Наличие собственности <select name="prop">
  <option value ="">квартира</option>
  <option value ="">дом, дача</option>
  <option value ="">автомобиль</option>
  <option value ="">нет</option>
</select></br> 
Стоимость приобретаемой квартиры <input type="text"
name="hom" id="hom"/></br>
Срок кредита  <select name="srok">
  <option value ="">1-3 года</option>
  <option value ="">4-6 лет</option>
  <option value ="">7-10 лет</option>
  <option value ="">11-15 лет</option>
</select></br>
Начальный капитал <input type="text"
name="nachkap" id="name"/></br>
Привлекались ли Вы к уголовной ответственности?
<input type="radio" name="nepcredit" value="p1"> да
<input type="radio" name="nepcredit" value="p2" checked> нет</br>
<input type="submit"
name="submit" value="Результат"/>
</body>
</html>

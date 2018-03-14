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
Иждевенцы <select name="ij">
  <option value ="">есть</option>
  <option value ="">нет</option>
</select></br>
Образование <select name="educat">
  <option value ="">среднее</option>
  <option value ="">техническое</option>
  <option value ="">высшее</option>
</select></br>
Работа <select name="work">
  <option value ="">собственное дело</option>
  <option value ="">работа по найму</option>
  <option value ="">работа в бюджетной сфере</option>
</select></br> 
Должность <select name="dolj">
  <option value ="">топ-менеджер</option>
  <option value ="">руководитель </option>
  <option value ="">служащий</option>
</select></br>
Среднемесячный доход <select name="sel">
  <option value ="">до $1000</option>
  <option value ="">$1000 - 2000</option>
  <option value ="">$2000 - 3000</option>
  <option value ="">больше $3000</option>
</select></br>
Прочие источники дохода <select name="prsel">
  <option value ="">ценные бумаги</option>
  <option value ="">вклады </option>
  <option value ="">прочие доходы</option>
  <option value ="">нет</option>
</select></br>
Кредитовались ли вы ранее <select name="credit">
  <option value ="">да</option>
  <option value ="">нет</option>
</select></br>
Имеются ли непогашенные кредиты <select name="npcredit">
  <option value ="">да</option>
  <option value ="">нет</option>
</select></br>
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
Привлекались ли Вы к уголовной ответственности?  <select name="ugot">
  <option value ="">да</option>
  <option value ="">нет</option>
</select></br>
<input type="submit"
name="submit" value="Результат"/>
</body>
</html>

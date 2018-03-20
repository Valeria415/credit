<?php
try {
    $conn = new PDO("sqlsrv:server = tcp:pinyasova.database.windows.net,1433; Database = Progr", "Valera", "Hswfhmlyz08");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE klient_tbl(
    id INT NOT NULL IDENTITY(1,1) 
    PRIMARY KEY(id),
    familiya VARCHAR(30),
    name VARCHAR(30),
    otchestvo VARCHAR(30),
    birthday DATE,
    inn VARCHAR(30),
    telefon VARCHAR(30),
    adres VARCHAR(30),
    seria VARCHAR(30),
    nomerp VARCHAR(30),
    kem VARCHAR(30),
    data DATE,
    kodp VARCHAR(30),
    pol INTEGER(2),
    age INTEGER(3),
    sp INTEGER(4),
    ij VARCHAR(30),
    educat INTEGER(3),
    work INTEGER(3),
    dolj INTEGER(2),
    sel INTEGER(4),
    prsel INTEGER(4),
    credit INTEGER(3),
    nepcredit INTEGER(2),
    prop INTEGER(4),
    hom VARCHAR(30),
    srok INTEGER(4),
    nachkap VARCHAR(30),
    ugot INTEGER(4),
    )";
   
    $conn->query($sql);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
?>

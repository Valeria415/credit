<?php
try {
    $conn = new PDO("sqlsrv:server = tcp:pinyasova.database.windows.net,1433; Database = Progr", "Valera", "Hswfhmlyz08");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE client_tbl(
    id INT NOT NULL IDENTITY(1,1) 
    PRIMARY KEY(id),
    familiya VARCHAR(30),
    name VARCHAR(30),
    otchestvo VARCHAR(30),
    birthday DATE,
    inn VARCHAR(30),
    telefon VARCHAR(30),
    adres VARCHAR(30)
    )";
   
    $conn->query($sql);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
?>

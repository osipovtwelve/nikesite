<?php 
require_once('php/connect.php');
$stmt=$pdo->prepare("SELECT * FROM product where count=1");
$stmt->execute();
$result=$stmt->fetchAll()

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike Russia</title>
    <link rel="icon" href="img/ico/icon.ico">
    <link rel="stylesheet" href="css/sale.css">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <style>
        button{
        background: rgb(76, 99, 202);
        padding: 10px;
        border-radius: 30px;
        color: white;
        }
    </style>
</head>
<body>

    <header>

        <div class="logo"><a href="index.html"><img src="img/logotype/logo.png" alt="logo"></a></div>

<nav>
    <div class="mainlist">
    <a href="index.php">Главная</a>
      <a href="menu.php">Кроссовки</a>
      <a href="menu.php">Одежда</a>
      <a href="menu.php">Аксессуары</a>
      <a href="delivery.php">Доставка</a>
      <a href="sale.php">Предзаказ</a>
    </div>
</nav>


    </header>


    <main>

        <table class="tables">
        <tr>
        <td><img src="img/mainitems/11.png" alt=""></td>
        <td>
          <h1>УСПЕЙ СДЕЛАТЬ ПРЕДЗАКАЗ НА НОВУЮ МОДЕЛЬ<br>Nike Zoom Vaporfly</h1>
          <p>Предзаказ действует с <strong>11.01 ПО 20.01</strong></p>
         <div class="buttons">
            <button>ЗАКАЗАТЬ</button>
        </div>
        </td>
    </tr>
     

        </table>
    </main>
    
    <footer>

      

<br><nav class="mail"><a href="mailto:oliveralmedia@gmail.com">nikerussia@gmail.com</a></nav>


<div class="social"><a href=""><img src="img/footeritems/paypal.png"></a>
  <a href=""><img src="img/footeritems/whatsapp.png"></a>
  <a href=""><img src="img/footeritems/instagram.png"></a>
</div>
    </footer>
    
</body>
</html>
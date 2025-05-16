<?php

$nomeFilme = $_POST["nomeFilme"];
$nomeDiretor = $_POST["nomeDiretor"];
$ano = $_POST["ano"];
$linkfoto = $_POST["imagem"];




echo "<div style='
    width: 300px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0,0,0,0.2);
    font-family: Arial, sans-serif;
    text-align: center;
'>";

echo "<img src='$linkfoto' style='
    width: 100%;
    height: auto;
    border-radius: 5px;
    margin-bottom: 15px;
'><br>";

echo "<h2 style='margin: 0; font-size: 20px;'>$nomeFilme</h2>";
echo "<p style='margin: 5px 0;'><strong>Diretor:</strong> $nomeDiretor</p>";
echo "<p style='margin: 5px 0;'><strong>Ano:</strong> $ano</p>";

echo "</div>";


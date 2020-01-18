<?php
$username = 'root';
$password = 'almondega';
try {
    $conn = new PDO('mysql:host=127.0.0.1;dbname=locadora;port=3306', $username, $password);
    $categoria = $conn->prepare('SELECT * FROM aluguel');
    $categoria->execute();


    // categoria (categoria), titulo (filme), preço (filme), duração (filme), ano de lançamento (filme), classificação.


    $filme = $conn->prepare('SELECT * FROM aluguel');
    $filme->execute();

    $filme_categoria = $conn->prepare('SELECT * FROM aluguel');
    $filme_categoria->execute();

} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>
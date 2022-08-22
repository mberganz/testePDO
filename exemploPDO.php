<?php

try {
    $username = "buteco";
    $password = "123456789";
    $pdo = new PDO('mysql:host=localhost;dbname=buteco', $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare('INSERT INTO usuarios ( nome, sobrenome, senha, cpf, complemento, cep, imagem, cartao, codigo, numero) '
        . 'VALUES(:nome, :sobrenome,:senha, :cpf, :complemento, :cep, :imagem, :cartao, :codigo, :numero)');
    $stmt->execute(array(
        ':nome' => 'Cara',
        ':sobrenome' => 'Bom',
        ':senha' => 'senha',
        ':cpf' => '12345678910',
        ':complemento' => 'complemento',
        ':cep' => '11665150',
        ':imagem' => 'imagem.png',
        ':cartao' => '12345678912345',
        'codigo' => '123',
        ':numero' => '1234568789'
    ));
    echo "Inserido com sucesso";
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

<?php

// Mikael Berganzini    CG3009971
// Juliano Appezzato    CG3010538

try {
    $username = "buteco";
    $password = "123456789";
    $pdo = new PDO('mysql:host=localhost;dbname=buteco', $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $options = ['cost' => 8];
    $algoritmo = "AES-256-CBC";
    $chave = "123456";
    $iv = "wNYtCnelXfOa6uiJ";


    $stmt = $pdo->prepare('INSERT INTO usuarios ( nome, sobrenome, senha, cpf, complemento, cep, imagem, cartao, codigo, numero) '
        . 'VALUES(:nome, :sobrenome,:senha, :cpf, :complemento, :cep, :imagem, :cartao, :codigo, :numero)');
    $stmt->execute(array(
        ':nome' => 'Cara',
        ':sobrenome' => 'Bom',
        ':senha' => password_hash('senha',  PASSWORD_BCRYPT, $options),
        ':cpf' => base64_encode(openssl_encrypt('12345678910', $algoritmo, $chave, OPENSSL_RAW_DATA, $iv)),
        ':complemento' => 'complemento',
        ':cep' => base64_encode(openssl_encrypt('11665150', $algoritmo, $chave, OPENSSL_RAW_DATA, $iv)),
        ':imagem' => md5('imagem.png'),
        ':cartao' => base64_encode(openssl_encrypt('1234567891234567', $algoritmo, $chave, OPENSSL_RAW_DATA, $iv)),
        ':codigo' => base64_encode(openssl_encrypt('123', $algoritmo, $chave, OPENSSL_RAW_DATA, $iv)),
        ':numero' => base64_encode(openssl_encrypt('1234568789', $algoritmo, $chave, OPENSSL_RAW_DATA, $iv))
    ));
    echo "Inserido com sucesso";
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

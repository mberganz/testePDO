<?php

//------------cifrando com  AES------------
$string = "Madruga vence o Thanos";
$algoritmo = "AES-256-CBC";
$chave = "123456";
$iv = "wNYtCnelXfOa6uiJ";

$cifrado = openssl_encrypt($string, $algoritmo, $chave, OPENSSL_RAW_DATA, $iv);
echo base64_encode($cifrado);
echo '<p>';

//------------decifrando com AES------------
$decifrado = openssl_decrypt($cifrado, $algoritmo, $chave, OPENSSL_RAW_DATA, $iv);
echo $decifrado;
echo '<p>';

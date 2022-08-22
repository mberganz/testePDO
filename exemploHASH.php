<?php

//---- Usando senha  MD5
$senha = "madruga"; //quebrado em 2005
echo 'Hash md5: ' . md5($senha);
echo '<p>';

//---- Usando senha + salt com MD5
$senha = "madruga"; //quebrado em 2005
$salt = "wNYtCnelXfOa6uiJ";
echo 'Hash md5+salt: ' . md5($senha . $salt);
echo '<p>';

//sha1($string);
//---- Usando senha do usuário com SHA256
$string = "madruga"; //usado atualmente
echo 'Hash SHA256: ' . hash('sha256', $string);
echo '<p>';

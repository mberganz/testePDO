<?php

$senha = "madruga";
$options = ['cost' => 8];
$hash = password_hash($senha,  PASSWORD_BCRYPT, $options);
echo 'Exemplo 1:' . $hash;
echo '<p>';
$hash = password_hash($senha,  PASSWORD_BCRYPT, $options);
echo 'Exemplo 2:' . $hash;
echo '<p>';
$hash = password_hash($senha,  PASSWORD_BCRYPT, $options);
echo 'Exemplo 3:' . $hash;
echo '<p>';

//-----------------COMPARANDO-----------------
if (crypt($senha, $hash) === $hash) {
    echo 'Senha OK!';
} else {
    echo 'Senha incorreta!';
}
